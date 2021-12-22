<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class error extends BaseController
{
    function index()
    {
        $data['meta'] = $this->get_title();
        // Pass to view
        return view('error')->with("meta",$data['meta']);
    }

    function get_title()
    {
        $year = date("Y");
        $title = " شقق للبيع و للايجار -المعادى " . " |" . "مكاتب للايجار بالمعادى " . " |" . "البيوت". " " . $year;
        $description = "مكتب - مكاتب للايجار - مكتب للايجار - احدث عقارات فى المعادى - بالمعادى - مكتب بالمعادى - مكاتب للايجار فى المعادى - عقارات المعادى" . $title;
        $kewords = "مكتب - مكاتب للايجار - مكتب للايجار - احدث عقارات فى المعادى - بالمعادى - مكتب بالمعادى - مكاتب للايجار فى المعادى - عقارات المعادى" . " |" . "البيوت";

        $meta['title'] = $title;
        $meta['desc'] = $description;
        $meta['keywords'] = $kewords;
        return $meta;
    }
}
