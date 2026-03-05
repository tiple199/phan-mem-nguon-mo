<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $product = Product::all();
        $title="Product list";
        return view("admin.product.index",['products'=>$product,'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $title="Add Product";
        return view("admin.product.add",['title'=>$title,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->sale_price = $request->sale_price;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::find($id);
        return view("admin.product.edit", ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categories = Category::all();
        $product = Product::find($id);
        $title = "Edit Product";
        return view("admin.product.edit", ['product'=>$product, 'categories'=>$categories, 'title'=>$title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::find($id);
        
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->sale_price = $request->sale_price;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::find($id);
        // $product->delete();
        $product->is_deleted = 1;
        $product->save();
        return redirect("/admin/product");
    }

}
