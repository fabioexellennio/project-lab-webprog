<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Validator;

class CartController extends Controller
{
    public function viewCart()
    {
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


        $newcart = new Cart;
        $newcart->quantity = $request->quantity;
        $newcart->product_id = $id;
        $newcart->user_id = Auth::user()->id;
        $newcart->save();

        $user = Auth::user();
        $carts = $user->carts;
        foreach ($carts as $cart) {
            dd($cart->product);
        }
        return view('listcart', compact('carts'));
    }
}
