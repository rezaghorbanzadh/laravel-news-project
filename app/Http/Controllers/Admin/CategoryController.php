<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::orderBy('id' , 'desc')->simplePaginate(15);
        return view("admin.pages.categories.index",compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.categories.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs= $request->all();
        $Category = Category::create($inputs);
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.pages.categories.edit', compact("category"));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Category $category)
    {
        $inputs = $request->all();
        $category->update($inputs);

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $id)
    {
        $result = $id->delete();
        return redirect()->route('admin.category.index');
    }
}
