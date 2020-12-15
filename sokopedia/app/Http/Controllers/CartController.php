<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\DetailTransaction;
use App\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Validator;

class CartController extends Controller
{
    public function viewCart()
    {
        $user = Auth::user();
        $carts = $user->carts;

        return view('listcart', compact('carts'));
    }

    public function insertCart(Request $request, $id)
    {
        $rules = [
            'quantity' => 'required|integer|min:1'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        Cart::updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'product_id' => $id,
            ],
            [
                'quantity' => $request->quantity,
                'product_id' => $id,
                'user_id' => Auth::user()->id
            ]
        );

        return redirect('/');
    }

    public function deleteCart($id)
    {
        $cart = Cart::find($id);
        if (isset($cart)) {
            $cart->delete();
        }
        return redirect('/list-cart');
    }

    public function checkoutCart()
    {

        $carts = Cart::where('user_id', Auth::user()->id)->get();
        if (isset($carts)) {
            return redirect('/');
        }

        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->save();

        foreach ($carts as $cart) {
            $detail = new DetailTransaction;
            $detail->transaction_id = $transaction->id;
            $detail->product_id = $cart->product->id;
            $detail->quantity = $cart->quantity;
            $detail->save();
        }

        $carts->each->delete();

        return redirect('/transaction');
    }
}
