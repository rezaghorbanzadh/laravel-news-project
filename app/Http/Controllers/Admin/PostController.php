<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Admin\Post;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Post::orderBy('id' , 'desc')->simplePaginate(15);
        return view("admin.pages.posts.index",compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.posts.create' , compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $inputs = $request->all();

        //date fixed
        $realTimestampStart = substr($request->published_at, 0, 10);
        $inputs['published_at'] = date("Y-m-d H:i:s", (int)$realTimestampStart);
        //save image


        if($request->hasFile('image')) {
            if (!empty($post->image)) {
                file("$post->image")->delete();
            }
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'uploads';

            // Upload file
            $file->move($location,$filename);
            $inputs['image']=$filename;
        }
        else
        {
            if (isset($inputs['currentImage']) && !empty($post->image)) {
                $image = $post->image;
                $image['currentImage'] = $inputs['currentImage'];
                $inputs['image'] = $image;
            }
        }


        // set user_id
        // $inputs['user_id'] = 1;
//        $inputs['user_id'] =  Auth::user()->id;
             $inputs['user_id'] =  1;

        $post = Post::create($inputs);
        return redirect()->route('admin.post.index');
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
    public function edit(Post $post )
    {
        $categories = Category::all();
        return view('admin.pages.posts.edit', compact("post","categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request,  Post $post)
    {
        $input=$request->all();

        //date
        $realTimestampStart = substr($request->published_at, 0, 10);
        $input['published_at'] = date("Y-m-d H:i:s", (int)$realTimestampStart);

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

        // set user_id
        // $inputs['user_id'] = 1;
//        $inputs['user_id'] =  Auth::user()->id;
        $input['user_id'] =  1;

        $post->update($input);
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $result = $post->delete();
        return redirect()->back();
    }

    public function breakingNews(Post $posts){
        if ($posts['breaking_news'] == 1){
            $posts['breaking_news']=0;
            $posts->save();
            return to_route("admin.post.index");
        }elseif ($posts['breaking_news'] == 0){
            $posts['breaking_news']=1;
            $posts->save();
            return to_route("admin.post.index");
        }



    }


    public function selected(Post $posts){
        if ($posts['selected'] == 1){
            $posts['selected']=0;
            $posts->save();
            return to_route("admin.post.index");
        }elseif ($posts['selected'] == 0){
            $posts['selected']=1;
            $posts->save();
            return to_route("admin.post.index");
        }
    }
}
