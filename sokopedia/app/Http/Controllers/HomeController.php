<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $data = Product::paginate(3);
        $this->setSessionCart();
        return view('home', compact('data'));
    }

    public function search(Request $req){
    	$data = Product::where('name', 'like', '%'.$req->search.'%')->paginate(3);
        return view('home', compact('data'));
    }

    public function setSessionCart(){
        if(!Auth::user()){
            return;
        }

        $total = Cart::where('user_id', Auth::user()->id)->get();
        Session::put('totalItem',count($total));
    }
}
