<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $title="Category list";
        return view("admin.category.index",['categories'=>$categories,'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $title="Add Category";
        return view("admin.category.add",['title'=>$title,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'image', 'parent_id', 'is_active', 'is_deleted']);
        Category::create($data);
        return redirect("/admin/category");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $category = Category::find($id);
        return view("admin.category.edit", ['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::where('id', '!=', $id)->get();
        $category = Category::find($id);
        $title="Category list";
        return view("admin.category.edit", ['title'=>$title,'category'=>$category,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $data = $request->only(['name', 'description', 'image', 'parent_id', 'is_active', 'is_deleted']);
        $category->update($data);
        return redirect("/admin/category");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect("/admin/category");
    }
}
