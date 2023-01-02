<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPanelController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\BlogController;



//Font Ends Routes
Route::get('/',[FontendController::class,'home'])->name('font.home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[UserPanelController::class,'dashboard'])->name('dashboard');

    Route::get('/create/blog',[BlogController::class,'createClog'])->name('create.blog');
    Route::get('/manage/blog',[BlogController::class,'manageBlog'])->name('manage.blog');

});
