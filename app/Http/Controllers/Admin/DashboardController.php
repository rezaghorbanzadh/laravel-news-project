<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Comment;
use App\Models\Admin\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::all();
        $user=User::all();
        $userAdmin = User::where('permission', '1')->get();
        $NormalUser = User::where('permission', 'user')->get();
        $post = Post::all();
        $views = Post::sum('view');
        $comment = Comment::all();
        $unseen = Comment::where('status', 0)->get();
        $seen = Comment::where('status', 1)->get();
        $popularPosts = Post::orderBy('view', 'desc')->take(5)->get();
      $mostCommentPosts = Post::withCount('comments')->orderBy('comments_count', 'desc')->take(5)->get();
        return view("admin.pages.dashboard.index",compact("mostCommentPosts","category","user","userAdmin","NormalUser",
        "post","views","comment","unseen","seen","popularPosts"));
    }


}
