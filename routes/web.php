<?php

use App\Http\Controllers\BookController;
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

Route::get('/Movie/{id}', function ($id) {
    return 'Movie' . $id;
});
Route::get('/test/{id}', 'MovieController@test');

Route::get('/edit/{id}', 'MovieController@edit');
Route::get('/show', 'MovieController@show');
Route::put('/edit/{id}', 'MovieController@update');

Route::get('/test', function () {
    return view('testing');
});

Route::get('/books', 'BookController@show');
Route::get('book/update/{id}', 'BookController@update');
Route::put('book/update/{id}', 'BookController@update2');
Route::delete('book/delete/{id}', 'BookController@delete');
Route::get('/book/create', 'BookController@edit');
Route::put('/book/create', 'BookController@add');
Route::get('/book-list', 'BookController@show2');
