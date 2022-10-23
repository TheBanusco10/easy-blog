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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $posts = \App\Models\Post::all()->where('user_id', '=', \Illuminate\Support\Facades\Auth::id());

    return view('dashboard', [
        'posts' => $posts
    ]);
})->middleware(['auth'])->name('dashboard');


// Posts
Route::get('/post/{post_slug}', [PostsController::class, 'show'])->name('post.show');
Route::middleware('auth')->group(function () {
    Route::get('/post', [PostsController::class, 'createView'])->name('post.view');
    Route::post('/post', [PostsController::class, 'create'])->name('post.create');
    Route::delete('/post/{post}', [PostsController::class, 'remove'])->name('post.remove');
});


require __DIR__.'/auth.php';
