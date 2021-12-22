<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class about_us extends BaseController
{
    function index()
    {
        $data['meta'] = $this->get_title();
        // Pass to view
        return view('about-us')->with("meta",$data['meta']);
    }
    function get_title()
    {
        global $site_name_ar;
        $title=$site_name_ar." | اتصل بنا ";
        $description=$site_name_ar." اكبر موقع يضم اكبر عدد من العقارات من شقق وفيلات للبيع والايجار";
        $kewords="اتصل بنا";
        $meta['title'] = $title;
        $meta['desc'] = $description;
        $meta['keywords'] = $kewords;

        return $meta;
    }
}
