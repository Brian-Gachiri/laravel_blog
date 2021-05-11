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

Route::get('/', [App\Http\Controllers\StaticController::class, 'home']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\StaticController::class, 'about'])->name('about');
Route::get('/contact/{id}', [App\Http\Controllers\StaticController::class, 'contact'])->name('contact');
Route::get('/post/details/{id}', [App\Http\Controllers\StaticController::class, 'showPostDetails'])->name('show.post.details');
Route::post('/store/comment',[App\Http\Controllers\CommentController::class, 'store'])->name('store.comment');


Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');

Route::get('add/project', function() {
    return view('projects.add-project');
})->name('add.project');

Route::get('posts', [App\Http\Controllers\PostController::class, 'index'] )->name('posts');

Route::get('add/post',[App\Http\Controllers\PostController::class, 'create'])->name('add.post');


Route::post('create/project',
 [App\Http\Controllers\ProjectController::class, 'store'])->name('create.project');

Route::get('edit/project/{id}',
 [App\Http\Controllers\ProjectController::class, 'edit'])->name('edit.project');

 Route::post('update/project/{id}',
 [App\Http\Controllers\ProjectController::class, 'update'])->name('update.project');
 
 Route::get('show/project/{id}',
 [App\Http\Controllers\ProjectController::class, 'show'])->name('show.project');

 Route::get('show/project/details/{id}',
 [App\Http\Controllers\ProjectController::class, 'showDetails'])->name('show.project.details');

 Route::get('show/post/{id}',
 [App\Http\Controllers\PostController::class, 'show'])->name('show.post');

 Route::get('edit/post/{id}',
 [App\Http\Controllers\PostController::class, 'edit'])->name('edit.post');

 Route::post('update/post/{id}',
 [App\Http\Controllers\PostController::class, 'update'])->name('update.post');

 
 Route::post('create/post',
 [App\Http\Controllers\PostController::class, 'store'])->name('create.post');

 Route::get('delete/project/{id}',[App\Http\Controllers\ProjectController::class, 'destroy'])->name('delete.project');
 Route::get('delete/post/{id}',[App\Http\Controllers\PostController::class, 'destroy'])->name('delete.post');

Route::get('categories/', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('create/category',[App\Http\Controllers\CategoryController::class, 'create'])->name('create.category');
Route::post('store/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('store.category');
Route::get('delete/category/{id}',[App\Http\Controllers\CategoryController::class, 'destroy'])->name('delete.category');
Route::get('edit/category/{id}',[App\Http\Controllers\CategoryController::class, 'edit'])->name('edit.category');
Route::post('update/category/{id}',[App\Http\Controllers\CategoryController::class, 'update'])->name('update.category'); 

Route::get('posts/list/', [App\Http\Controllers\PostController::class, 'showPostList'])->name('show.post.list');