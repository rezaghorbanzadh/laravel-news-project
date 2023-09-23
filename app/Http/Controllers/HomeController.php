<?php

namespace App\Http\Controllers;

use App\Models\Admin\Banner;
use App\Models\Admin\Category;
use App\Models\Admin\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $SelectedPost = Post::where('selected', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        $breakingNews = Post::where('breaking_news', 1)->orderBy('created_at', 'desc')->limit(1)->get();
        $latestNews = Post::orderBy('created_at', 'desc')->limit(6)->get();
        $banners = Banner::orderBy('created_at', 'desc')->limit(2)->get();
        $categories = Category::where('created_at', '<', now())->get();
        $popular = Post::orderBy('view', 'desc')->limit(3)->get();
        $mostControversialPosts = Post::withCount('comments')->orderBy('comments_count', 'desc')->limit(20)->get();
        return view('home.pages.index', compact( 'categories', 'latestNews', 'popular', 'SelectedPost', 'breakingNews', 'banners', 'mostControversialPosts'));
    }


    public function view(Post $post){
        $nextPost = Post::where('id', '>', $post->id)->orderBy('id', 'asc')->first();
        $prevPost = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $SelectedPost = Post::where('selected', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        $banners = Banner::orderBy('created_at', 'desc')->limit(2)->get();
        $mostControversialPosts = Post::withCount('comments')->orderBy('comments_count', 'desc')->limit(20)->get();

        return view('home.pages.view-post', compact('post','banners', 'nextPost', 'prevPost','mostControversialPosts','SelectedPost'));    }
}
