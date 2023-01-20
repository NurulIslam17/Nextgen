<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPanelController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SendInTwoTableController;
use App\Http\Controllers\ManageImgDiffController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\MainBlogController;


//Font Ends Routes
Route::get('/',[FontendController::class,'home'])->name('font.home');
Route::get('/blogs',[FontendController::class,'blogs'])->name('font.blogs');
Route::get('/blog/post/details/{id}',[FontendController::class,'postDetails'])->name('blog.post.details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[UserPanelController::class,'dashboard'])->name('dashboard');

    Route::get('/create/blog',[BlogController::class,'createClog'])->name('create.blog');
    Route::get('/manage/blog',[BlogController::class,'manageBlog'])->name('manage.blog');

    Route::post('/store/post',[BlogController::class,'storePost'])->name('store.post');
    Route::get('/post/details/{id}',[BlogController::class,'postDetails'])->name('post.details');
    Route::get('/post/delete/{id}',[BlogController::class,'postDelete'])->name('post.delete');

    //    random.post
    Route::get('/random-post',[BlogController::class,'randomPost'])->name('random.post');
    Route::post('/data-post',[BlogController::class,'dataPost'])->name('data.post');

    // Send data in two table
    Route::get('/insert-into-two',[SendInTwoTableController::class,'insertIntoTwo'])->name('insert.into.two');
    Route::post('/store-in-two',[SendInTwoTableController::class,'storeInTwo'])->name('store.in.two');

    Route::get('/manage-img-diff',[ManageImgDiffController::class,'index'])->name('mange.img.diff');
    Route::get('/create-img-diff',[ManageImgDiffController::class,'create'])->name('create.img.diff');
    
    //Ajax 
    Route::resource('ajax',AjaxController::class);

    //main blog Controller
    Route::resource('main_blog', MainBlogController::class);


});


