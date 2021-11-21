<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class Index extends BaseController
{
    function blocks()
    {
        app('App\Http\Controllers\Controllers')->globals();
        //echo 'pla pla';exit();
        // Read value from Model method
        $units = (new \App\Page)->units();
        //print_r($units);
        // Pass to view
        return view('index')->with("units" , $units);
    }

}
