<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'name' => 'required|unique:products,name',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required|integer|min:100',
            'image' => 'required|image|max:10000'
        ];


        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        
        $file = $request->file('image');
        Storage::disk('public')->putFileAs('images', $request->file('image'), $file->getClientOriginalName());
        $product = new Product;
        $product->category_id = $request->category;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $file->getClientOriginalName();
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
            'categoryname' => 'required|unique:categories,name'
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
