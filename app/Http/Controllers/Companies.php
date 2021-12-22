<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class Companies extends BaseController
{
    function index($company)
    {
        $company = explode('/', $company);
        $units = (new \App\Companies)->company($company[0]);

        $sponser = (new \App\Companies)->sponser($company[0]);
        $data['meta'] = $this->get_title($sponser);
       // print_r($sponser);
//        exit();
        return view('companies',array("sponser" => $sponser , "units"=>$units))
            ->with("meta",$data['meta']);
    }
    function get_title($sponser)
    {
        $sponsors = $sponser[0];
        $year = date("Y");
        $title = $sponsors ->title ." | "."البيوت"." ".$year;
        $description = $sponsors ->title." - " ."  مقرات ادارية للايجار الجديد في المعادي - شقق للبيع في المعادي- شقق للايجار - شقق للبيع - فيلات للبيع - مكاتب للايجار بالمعادي - مكتب للايجار فى المعادي - المعادي";
        $kewords = "عقارى - للتسويق - العقارى - شركه - عقارات - بيع - ايجار - المعادى - مكاتب - فيلات - شقق - بالمعادي - مكتب - فى المعادي  ";
        $meta['title'] = $title;
        $meta['desc'] = $description;
        $meta['keywords'] = $kewords;

        return $meta;
    }
}
