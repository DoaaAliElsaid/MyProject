<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class realestate extends BaseController
{
    function index($id)
    {
        //echo 'pla pla';exit();
        // Read value from Model method
        $real = (new \App\Realestate)->real($id);
        //print_r($real);exit();
        // Pass to view
        return view('realestate')->with("real" , $real);
    }

}
