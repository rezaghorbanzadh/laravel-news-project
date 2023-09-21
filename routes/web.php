<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\LogOutAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('/admin')->namespace("Admin")->middleware("auth")->group(function (){

    Route::middleware(["admin"])->get("/",[DashboardController::class,"index"])->name("admin.pages.dashboard.index");
    //admin category address url
    Route::prefix('category')->middleware("admin")->group(function(){
        Route::get('/' , [CategoryController::class , 'index'])->name('admin.category.index');
        Route::get('/create' , [CategoryController::class , 'create'])->name('admin.category.create');
        Route::post('/store' , [CategoryController::class , 'store'])->name('admin.category.store');
        Route::get('/edit/{category}' , [CategoryController::class , 'edit'])->name('admin.category.edit');
        Route::put('/update/{category}' , [CategoryController::class , 'update'])->name('admin.category.update');
        Route::delete('/destroy/{id}' , [CategoryController::class , 'destroy'])->name('admin.category.destroy');
    });

    //admin post address url
    Route::prefix('post')->middleware("admin")->group(function(){
        Route::get('/' , [PostController::class , 'index'])->name('admin.post.index');
        Route::get('/create' , [PostController::class , 'create'])->name('admin.post.create');
        Route::post('/store' , [PostController::class , 'store'])->name('admin.post.store');
        Route::get('/edit/{post}' , [PostController::class , 'edit'])->name('admin.post.edit');
        Route::put('/update/{post}' , [PostController::class , 'update'])->name('admin.post.update');
        Route::delete('/destroy/{id}' , [PostController::class , 'destroy'])->name('admin.post.destroy');
        Route::get('/change-breaking-news/{posts}', [PostController::class , 'breakingNews'])->name('admin.post.breaking-news');
        Route::get('/change-selected/{posts}', [PostController::class , 'selected'])->name('admin.post.selected');
    });

    //admin banner address url
    Route::prefix('banner')->middleware("admin")->group(function(){
        Route::get('/' , [BannerController::class , 'index'])->name('admin.banner.index');
        Route::get('/create' , [BannerController::class , 'create'])->name('admin.banner.create');
        Route::post('/store' , [BannerController::class , 'store'])->name('admin.banner.store');
        Route::get('/edit/{banner}' , [BannerController::class , 'edit'])->name('admin.banner.edit');
        Route::put('/update/{banner}' , [BannerController::class , 'update'])->name('admin.banner.update');
        Route::delete('/destroy/{banner}' , [BannerController::class , 'destroy'])->name('admin.banner.destroy');

    });

    //admin user address url
    Route::prefix('user')->middleware("admin")->group(function(){
        Route::get('/' , [UserController::class , 'index'])->name('admin.user.index');
        Route::get('/edit/{user}' , [UserController::class , 'edit'])->name('admin.user.edit');
        Route::put('/update/{user}' , [UserController::class , 'update'])->name('admin.user.update');
        Route::delete('/destroy/{user}' , [UserController::class , 'destroy'])->name('admin.user.destroy');
        Route::get('/change/{user}', [UserController::class , 'change'])->name('admin.user.change');

    });
    //admin comment address url
    Route::prefix('comment')->middleware("admin")->group(function(){
        Route::get('/' , [CommentController::class , 'index'])->name('admin.comment.index');
        Route::delete('/destroy/{comment}' , [CommentController::class , 'destroy'])->name('admin.comment.destroy');
        Route::get('/status/{comment}', [CommentController::class , 'status'])->name('admin.comment.status');
    });

    //admin menu address url
    Route::prefix('menu')->middleware("admin")->group(function(){
        Route::get('/' , [MenuController::class , 'index'])->name('admin.menu.index');
        Route::get('/create' , [MenuController::class , 'create'])->name('admin.menu.create');
        Route::post('/store' , [MenuController::class , 'store'])->name('admin.menu.store');
        Route::get('/edit/{menu}' , [MenuController::class , 'edit'])->name('admin.menu.edit');
        Route::put('/update/{menu}' , [MenuController::class , 'update'])->name('admin.menu.update');
        Route::delete('/destroy/{menu}' , [MenuController::class , 'destroy'])->name('admin.menu.destroy');

    });
    //admin setting address url
    Route::prefix('setting')->middleware("admin")->group(function(){
        Route::get('/' , [SettingController::class , 'index'])->name('admin.setting.index');
        Route::get('/edit/{setting}' , [SettingController::class , 'edit'])->name('admin.setting.edit');
        Route::put('/update/{setting}' , [SettingController::class , 'update'])->name('admin.setting.update');

    });

});

//home
Route::prefix('')->group(function (){
    Route::get('/' , [HomeController::class , 'index'])->name('home.index');
    Route::get('/view-post/{post}', [HomeController::class , 'show'])->name('home.view-post');
    Route::get('/category/{category}', [HomeController::class , 'category'])->name('home.category');
});





Route::get("/logout",[LogOutAdminController::class ,"index"])->middleware("auth")->name("admin.log");
Auth::routes();
