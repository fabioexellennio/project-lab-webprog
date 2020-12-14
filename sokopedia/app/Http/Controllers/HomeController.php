<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $data = Product::paginate(3);
        return view('home', compact('data'));
    }

    public function search(Request $req){
    	$data = Product::where('name', 'like', '%'.$req->search.'%')->paginate(3);
        return view('home', compact('data'));
    }
}
