<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

//pages route
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);

//data routes
Route::get('/usersData', [PostController::class, 'usersData']);
Route::get('/latestPost', [CategoryController::class, 'latestPost']);
Route::get('/categories/{id}/posts', [CategoryController::class, 'postsOfCategory']);

//Task -5
Route::get('/postsData', [PostController::class, 'postsData']);
//Task -6
Route::get('/countPost', [PostController::class, 'countPost']);
//Task -7
Route::get('/posts/{id}/delete', [PostController::class, 'deletePost']);
//Task -8
Route::get('retrieveDeleteData', [PostController::class, 'retrieveDeleteData']);
Route::get('restoreDeleteData', [PostController::class, 'restoreDeleteData']);
