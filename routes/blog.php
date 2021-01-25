<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\CategoryController;


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

// Route::get('/blog', "Blog\PostController@index");
Route::get('/blog', [PostController::class, "index"]);

// Route::get('/blog/create', function(){
//     return view("apps/Blog/Post/createEdit");
// });
Route::get('/blog/create', [PostController::class, "create"]);
Route::post('/blog/createupdate', [PostController::class, "createupdate"]);

Route::get('/blog/edit/{id}', [PostController::class, "edit"]);
// Route::post('/blog/update/{id}', [PostController::class, "edit"]);

// Show data
Route::get('/blog/show/{id}', [PostController::class, "show"]);

// Delete data
Route::get('/blog/delete/{id}', [PostController::class, "delete"]);

// Search data
Route::post('/blog/search', [PostController::class, "search"]);

// Categories
Route::get('/blog/category', function(){
    return view("apps/Blog/Post/categories");
});

// Upload Image
Route::post("/blog/upload_image", [PostController::class, "upload_image"]);

// Categories logic
Route::post('/categories',[CategoryController::class,"store"]);
Route::get('/categories/create',[CategoryController::class,"create"]);
Route::get('/categories', [CategoryController::class,"index"] );
Route::get('/categories/{category}',[CategoryController::class,"show"]);
Route::get('/categories/{category}/delete',[CategoryController::class,"delete"]);
Route::get('/categories/{category}/edit',[CategoryController::class,"edit"]);
Route::put('/categories/{category}',[CategoryController::class,"update"]);
Route::get('/tagposts/{tag}',[PostController::class,"tagposts"]);
