<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth','admin'])->group(function(){
//     Route::get('/master/book',function(){
//         // route menggunakan middleware auth dan admin
//     });
//     Route::get('/user/profile', function(){
//         // route menggunakan middleware auth dan admin
//     });
// });

// Route::middleware('auth')->group(function(){
//     // route hanya menggunakan middleware auth
//     Route::get('/user',[UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::prefix('admin')->group(function(){
//     Route::get('/user', [UserController::class, 'index']);
//     // hasil url: localhost/PWL-2024/public/admin/user
//     Route::get('/post', [PostController::class, 'index']);
//     // hasil url: localhost/PWL-2024/public/admin/post
//     Route::get('/event', [EventController::class, 'index']);
//     // hasil url: localhost/PWL-2024/public/admin/event
// });

// Route::redirect('/here','/there');
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name'=>'Taylor']);