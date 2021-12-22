<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class Index extends BaseController
{
    function blocks()
    {
        //echo date("Y"); exit();
        $data['meta'] = $this->get_title();
        // Read value from Model method
        $units = (new \App\Page)->units();
        //print_r($units);
        // Pass to view
        return view('index')->with("units" , $units)->with("meta",$data['meta']);
    }
    function get_title()
    {
        $year = date("Y");
        $title = " شقق للبيع و للايجار -المعادي "." |"."مكاتب للايجار بالمعادي "." |"."البيوت"." ".$year;
        $description = "مكتب - مكاتب للايجار - مكتب للايجار - احدث عقارات فى المعادي - بالمعادي - مكتب بالمعادي - مكاتب للايجار فى المعادي - عقارات المعادي".$title;
        $kewords = "مكتب - مكاتب للايجار - مكتب للايجار - احدث عقارات فى المعادى - بالمعادي - مكتب بالمعادي - مكاتب للايجار فى المعادي - عقارات المعادي"." |"."البيوت";

        $meta['title'] = $title;
        $meta['desc'] = $description;
        $meta['keywords'] = $kewords;

        return $meta;
    }
}
