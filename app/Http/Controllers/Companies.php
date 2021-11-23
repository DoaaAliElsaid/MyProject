<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class Companies extends BaseController
{
    function index($company)
    {
        app('App\Http\Controllers\Controllers')->globals();
        $company = explode('/', $company);
        $units = (new \App\Companies)->company($company[0]);

        $sponser = (new \App\Companies)->sponser($company[0]);
        //print_r($sponser);
        //exit();
        return view('companies',array("sponser" => $sponser , "units"=>$units));
        //print_r($com);
        //exit();
    }

}
