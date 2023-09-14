<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Comment;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu=Menu::all();
        return view("admin.pages.menus.index",compact("menu"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = Menu::all();

        return view("admin.pages.menus.create",compact("parents"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->validate(
            [
                'name' => 'required|min:3|max:20',
                'url' => 'required',
                'parent_id' => 'nullable|exists:menus,id',
            ]);

        // create
        $menus = Menu::create($inputs);
        return to_route('admin.menu.index');
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
    public function edit(Menu $menu)
    {
        $parents = Menu::all();
        return view('admin.pages.menus.edit' , compact('parents' ,'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $inputs = $request->validate(
            [
                'name' => 'required|min:3|max:20',
                'url' => 'required',
                'parent_id' => 'nullable|exists:menus,id',
            ]);


        $menu->update($inputs);
        return to_route('admin.menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $result = $menu->delete();
        return redirect()->route('admin.menu.index');
    }
}
