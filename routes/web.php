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


// call public or global controller //
use Illuminate\Support\Facades\Route;
app('App\Http\Controllers\Controllers')->globals();

Route::get('/', 'index@blocks')->name('/');

Route::get('/search/term/{term}' , 'search@term');

Route::get('/realestate/{id}' , 'realestate@index');

Route::any('/searches/{args?}', 'Searches@index')->where('args', '(.*)');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/companies/{args?}', 'Companies@index')->where('args', '(.*)');

//-------------------- new purp routes ---------------//
Route::get('/allsale/{args?}', 'new_purp@index')->where('args', '(.*)');
Route::get('/allrent/{args?}', 'new_purp@index')->where('args', '(.*)');
//-----------------------end of new purp --------------//

//-------------------- alltypes routes ---------------//
Route::get('for-{purp}', 'All_types@purp');
Route::get('{type?}-for-{purp}', 'All_types@index');
Route::get('furnished-{type}-for-{purp}', 'All_types@index');
Route::get('{type}-units', 'All_types@special');
Route::get('{type}-rent', 'All_types@rent');
//-----------------------end of alltypes --------------//

//-------------------- detect mobile routes ---------------//
Route::get('detect', function () {
    $agent = new \Jenssegers\Agent\Agent;
    $result = $agent->isMobile();
    if ($result)
        return "Yes, This is Mobile.";
    else
        return "No, This is not Mobile.";
});
//-----------------------end of mobile routes--------------//

//-------------------- detect desktop routes ---------------//
Route::get('detect', function () {
    $agent = new \Jenssegers\Agent\Agent;
    $result = $agent->isDesktop();
    if ($result)
        return "Yes, This is Desktop.";
    else
        return "No, This is not Desktop.";
});
//-------------------- end of desktop routes ---------------//

//-------------------- detect tablet routes ---------------//
Route::get('detect', function () {
    $agent = new \Jenssegers\Agent\Agent;
    $result = $agent->isTablet();
    if ($result)
        return "Yes, This is Tablet.";
    else
        return "No, This is not Tablet.";
});
//-------------------- end of tablet routes ---------------//

