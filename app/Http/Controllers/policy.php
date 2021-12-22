<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class policy extends BaseController
{
    function index()
    {
        $data['meta'] = $this->get_title();
        // Pass to view
        return view('policy')->with("meta",$data['meta']);
    }
    function get_title()
    {
        global $site_name_ar;
        $meta['title'] = $site_name_ar." | سياسة الخصوصية ";
        $meta['desc'] = $site_name_ar." يسهل عليك تصفح العقارات والمشاريع المعروضة من الشركات العقارية وملاك العقارات لتجد كل ماتبحث عنه";
        $meta['keywords'] ="سياسه الخصوصيه";
        return $meta ;
    }
}
