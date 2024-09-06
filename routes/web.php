<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::resource('photos', PhotoController::class);

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

// // Route::redirect('/here','/there');
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name'=>'Taylor']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::resource('photos', PhotoController::class)->only([
  'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
  'create', 'store', 'update', 'destroy'
]);