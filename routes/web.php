<?php

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
// routes/web.php
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index']); 
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show'); 
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit'); 
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update'); 
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
