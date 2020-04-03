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


/*
Route::get('/about', function () {
    return "<h1>Hello World</h1>";
});
*/

Route::get('/contact', function () {
    return view('pages.index');
});

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@abt_timmer');

Route::get('/services', 'PagesController@services');
