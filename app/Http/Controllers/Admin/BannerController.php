<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerRequest;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner=Banner::orderBy('id' , 'desc')->simplePaginate(15);
        return view("admin.pages.banners.index",compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.banners.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerRequest $request)
    {
        $inputs= $request->all();

        //save image
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'uploads';

            // Upload file
            $file->move($location,$filename);
            $inputs['image']=$filename;
        }

        $banner = Banner::create($inputs);
        return redirect()->route('admin.banner.index');

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
    public function edit(Banner $banner)
    {
        return view("admin.pages.banners.edit",compact("banner"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerRequest $request, Banner $banner)
    {

        $input=$request->all();

        //save image
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'uploads';

            // Upload file
            $file->move($location,$filename);
            $input['image']=$filename;
        }

        $banner->update($input);
        return redirect()->route('admin.banner.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $result = $banner->delete();
        return redirect()->route('admin.banner.index');
    }
}
