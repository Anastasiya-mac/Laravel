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


Route::get('/news', function () {
    return view('news', ['nameOfNews' => 'Спортивные новости'], ['textOfTheNews' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, magni!']);
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/auth/{name}', function(string $name) {
    echo "Добро пожаловать, {$name}!";
    require_once __DIR__.'/../resources/views/Auth.blade.php';
})->where('name', '[A-Za-z]+');