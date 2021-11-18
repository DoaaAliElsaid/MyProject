<?php
ini_set('max_execution_time', 0);
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */
date_default_timezone_set('Africa/Cairo');
session_start();



if (count($_POST)==0 )
{
    ob_start('ob_gzhandler');

    $cache = true ;
    $cache_dir = "cache";
    $session_hash = "" ;


    $_SERVER['REQUEST_URI'] = str_replace("?cache=false", "" , $_SERVER['REQUEST_URI'])   ;

    $cache_hash = md5($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

    $cache_file = $cache_dir.'/'.$cache_hash ;
    $cache_time = 3600*6 ;
    if (file_exists($cache_file) && @$_GET['cache']!='false' )
    {
        if ((filemtime($cache_file)+ $cache_time) > time()  )
        {
            if($_SERVER["SERVER_NAME"]!="localhost")
            {
                include $cache_file;
                //echo "<span style='color:white'>cached page</span>";

                exit() ;
            }
        }
    }
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

$content = ob_get_contents();
@file_put_contents($cache_file , $content );
