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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Posts
Route::get('/post/{post_slug}', [PostsController::class, 'show'])->name('showPost');
Route::middleware('auth')->group(function () {
    Route::get('/post', [PostsController::class, 'createView'])->name('createViewPost');
    Route::post('/post', [PostsController::class, 'create'])->name('createPost');
    Route::delete('/post/{id}', [PostsController::class, 'remove'])->name('removePost');
});


require __DIR__.'/auth.php';
