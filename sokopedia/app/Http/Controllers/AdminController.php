<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdmin()
    {
        return view('admin');
    }

    public function viewProductAdmin()
    {
        $products = Product::all();

        return view('viewproduct', compact('products'));
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            $product->delete();
        }
        return redirect('/admin/view-product');
    }

    public function insertProductAdmin()
    {
    }

    public function postInsertProduct()
    {
    }

    public function viewCategoryAdmin()
    {
        $categories = Category::all();

        return view('viewcategory', compact('categories'));
    }

    public function viewProductCategory($id)
    {
        $categories = Category::all();
        $products =  Product::where('category_id', $id)->get();

        return view('viewcategoryproduct', compact('categories', 'products'));
    }

    public function insertCategoryAdmin()
    {
    }

    public function postInsertCategory()
    {
    }
}
