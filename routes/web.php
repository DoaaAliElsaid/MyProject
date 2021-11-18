<?php

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

/*Route::get('/', function () {
    return view('index');
});*/


use Illuminate\Support\Facades\Route;

Route::get('/', 'index@blocks')->name('/');
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/realestate/{id}' , 'realestate@index');
//Route::get('/searches/(:any)', 'Searches@index');
Route::any('/searches/{args?}', 'Searches@index')->where('args', '(.*)');

Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/policy', function () {
    return view('policy');
});

//Route::get('db','Index@blocks') ;
