<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// App\Http\Controllers\PostController@index

// Route::get('posts', function() {
//     return response()->json([
//         'title' => 'mon super titre',
//         'description' => 'ma super description'
//     ]);
// });

// Route::get('articles', function(){
//     return view('articles');
// });

Route::get('/', [PostsController::class, 'index'])->name('welcome');
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts/create', [PostsController::class, 'store'])->name('posts.store');


Route::get('/register', [PostsController::class, 'register']);


Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
Route::get('/contact', [PostsController::class, 'contact'])->name('contact');
