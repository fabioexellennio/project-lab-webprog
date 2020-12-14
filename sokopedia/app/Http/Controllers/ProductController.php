<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function viewProductDetail($id){
        $product = Product::find($id);
        return view('product',compact('product'));
    }

    public function viewProductCart($id){
        $product = Product::find($id);
        return view('cart',compact('product'));
    }
}
