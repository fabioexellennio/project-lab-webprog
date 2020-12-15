<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Validator;

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
        $categories = Category::all();
        return view('insertproduct', compact('categories'));
    }

    public function postInsertProduct(Request $request)
    {
        $rules = [
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required|integer|min:100'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $product = new Product;
        $product->category_id = $request->category;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = "";
        $product->save();

        return redirect('/admin/view-product');
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
        return view('insertcategory');
    }

    public function postInsertCategory(Request $request)
    {
        $rules = [
            'categoryname' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $category = new Category;
        $category->name = $request->categoryname;
        $category->save();

        return redirect('/admin/view-category');
    }
}
