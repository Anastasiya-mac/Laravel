<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [NewsController::class, 'index']) -> name('index');

Route::group(['prefix' => 'news'], function() {
    Route::get('show/{id}', [NewsController::class, 'show'])->where('id', '\d+')-> name('news.show');
    Route::get('ofcategory/{id}', [NewsController::class, 'newsOfCategory'])->where('id', '\d+')-> name('newsofcategory.category');;
});


Route::group(['prefix' => 'admin', 'as' => '.admin'], function()  {
    Route::resource('/', AdminNewsController::class);
    Route::resource('categories', AdminCategoryController::class);
});


Route::group(['prefix' => 'category'], function() {
    Route::get('/', [CategoryController::class, 'index']) -> name('category');
    Route::get('show/{id}', [CategoryController::class, 'show'])->where('id', '\d+')-> name('category.show');
});


Route::redirect('/here', '/admin') -> name('admin.redirect');