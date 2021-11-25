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
app('App\Http\Controllers\Controllers')->globals();

Route::get('/', 'index@blocks')->name('/');

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/realestate/{id}' , 'realestate@index');

Route::any('/searches/{args?}', 'Searches@index')->where('args', '(.*)');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/companies/{args?}', 'Companies@index')->where('args', '(.*)');

Route::get('for-{purp}', 'All_types@purp');
Route::get('{type?}-for-{purp}', 'All_types@index');
Route::get('furnished-{type}-for-{purp}', 'All_types@index');
Route::get('{type}-units', 'All_types@special');
Route::get('{type}-rent', 'All_types@rent');

Route::get('detect', function () {
    $agent = new \Jenssegers\Agent\Agent;
    $result = $agent->isMobile();
    if ($result)
        return "Yes, This is Mobile.";
    else
        return "No, This is not Mobile.";
});

Route::get('detect', function () {
    $agent = new \Jenssegers\Agent\Agent;
    $result = $agent->isDesktop();
    if ($result)
        return "Yes, This is Desktop.";
    else
        return "No, This is not Desktop.";
});

Route::get('detect', function () {
    $agent = new \Jenssegers\Agent\Agent;
    $result = $agent->isTablet();
    if ($result)
        return "Yes, This is Tablet.";
    else
        return "No, This is not Tablet.";
});
