<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Comeent;
use App\Models\Admin\Comment;
use App\Models\Admin\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->middleware("admin");
        $comment=Comment::all();
        return view("admin.pages.comments.index",compact("comment"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Post $post, Request $request)
    {
        $inputs=$request->all();
        $inputs['post_id'] = $post->id;
        $inputs['user_id'] = auth()->user()->id;

        $result = Comment::create($inputs);


        return redirect()->back();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $this->middleware("admin");

        $comment->delete();
        return back();
    }

    public function status(Comment $comment)
    {
        $this->middleware("admin");

        $comment->status = $comment->status == 1 ? 0 : 1 ;
        $comment->save();
        return back();
    }
}
