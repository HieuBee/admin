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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
// Thêm dòng dưới đây vào
Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);

// Update user
// Nhớ là phải truyền thêm id để biết được đối tượng muốn sửa nhé
Route::get('/users/update/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update']);

// Delete user
// Vẫn nhớ phải truyền id vào nhá
Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

// Read user
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);

/* CATEGORIES */

Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create']);
// Thêm dòng dưới đây vào
Route::post('/categories/create', [App\Http\Controllers\CategoriesController::class, 'store']);

// Update Categories
// Nhớ là phải truyền thêm id để biết được đối tượng muốn sửa nhé
Route::get('/categories/update/{id}', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::post('/categories/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update']);

// Delete Categories
// Vẫn nhớ phải truyền id vào nhá
Route::get('/categories/delete/{id}', [App\Http\Controllers\CategoriesController::class, 'delete']);

// Read Categories
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index']);

// NEWS

Route::get('/news/create', [App\Http\Controllers\NewsController::class, 'create']);
// Thêm dòng dưới đây vào
Route::post('/news/create', [App\Http\Controllers\NewsController::class, 'store']);

// Update news
// Nhớ là phải truyền thêm id để biết được đối tượng muốn sửa nhé
Route::get('/news/update/{id}', [App\Http\Controllers\NewsController::class, 'edit']);
Route::post('/news/update/{id}', [App\Http\Controllers\NewsController::class, 'update']);

// Delete news
// Vẫn nhớ phải truyền id vào nhá
Route::get('/news/delete/{id}', [App\Http\Controllers\NewsController::class, 'delete']);

// Read news
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index']);

