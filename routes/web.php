<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
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
Route::prefix('/admin')->namespace("Admin")->group(function (){

    Route::get("/",function (){
       return view("admin.pages.dashboard.index");
    })->name("admin.pages.dashboard.index");
    //category address url
    Route::prefix('category')->group(function(){
        Route::get('/' , [CategoryController::class , 'index'])->name('admin.category.index');
        Route::get('/create' , [CategoryController::class , 'create'])->name('admin.category.create');
        Route::post('/store' , [CategoryController::class , 'store'])->name('admin.category.store');
        Route::get('/edit/{category}' , [CategoryController::class , 'edit'])->name('admin.category.edit');
        Route::put('/update/{category}' , [CategoryController::class , 'update'])->name('admin.category.update');
        Route::delete('/destroy/{id}' , [CategoryController::class , 'destroy'])->name('admin.category.destroy');
    });

    //post address url
    Route::prefix('post')->group(function(){
        Route::get('/' , [PostController::class , 'index'])->name('admin.post.index');
        Route::get('/create' , [PostController::class , 'create'])->name('admin.post.create');
        Route::post('/store' , [PostController::class , 'store'])->name('admin.post.store');
        Route::get('/edit/{post}' , [PostController::class , 'edit'])->name('admin.post.edit');
        Route::put('/update/{post}' , [PostController::class , 'update'])->name('admin.post.update');
        Route::delete('/destroy/{id}' , [PostController::class , 'destroy'])->name('admin.Post.destroy');
    });
});
