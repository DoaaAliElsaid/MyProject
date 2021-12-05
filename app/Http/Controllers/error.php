<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class error extends BaseController
{
    function index()
    {
        // Pass to view
        return view('error');
    }

}
