<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class search extends BaseController
{
    function term($term)
    {
        echo 'term is : ' . $term;exit();
        // Read value from Model method
        //$units = (new \App\Page)->units();
        //print_r($units);
        // Pass to view
       // return view('index')->with("units" , $units);
    }

}
