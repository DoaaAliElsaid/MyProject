<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class All_types extends BaseController
{
    function index($type,$purp){
//        echo 'all types'. $type. ' - '.$purp;
//        exit();
        $purp = 'for-'.$purp;
        if(empty($type)) {
            switch ($purp) {
                case "for-rent":
                    $p = 2;
                    $t = 0;
                    break;
                case "for-sale":
                    $p = 1;
                    $t = 0;
                    break;
            }
        }else{
            $ty = DB::table('type')->select('id')-> where('type_en',$type)->get();
            $t = $ty[0]->id;
            switch ($purp) {
                case "for-rent":
                    $p = 2;
                    break;
                case "for-sale":
                    $p = 1;
                    break;
            }
        }

        if(isset($t)){
            global $_type_s;
            $title = $_type_s[$t];
        }else{
            $title = "عقارات";
        }
        if(isset($p)){
            global $_purp_l;
            $title .=' '. $_purp_l[$p];
        }else{
            $title .= " للبيع ";
        }
        $data['meta'] = $this->get_title($t,$p);
        //echo $t . $p .$title ;exit();
        $units = (new \App\All_types)->units($t,$p);
        //print_r($units);exit();
        return view('all_types')->with( "units" , $units )->with("title",$title)
            ->with("meta",$data['meta']);
    }
    function purp ($purp){
        $purp = 'for-'.$purp;
       // echo $purp;exit();
        switch ($purp) {
            case "for-rent":
                $p = 2;
                //$t = 0;
                break;
            case "for-sale":
                $p = 1;
                //$t = 0;
                break;
        }
        $data['meta'] = $this->get_title($t='',$p);
        if(empty($t)){
            $title = "عقارات";
        }
        if(isset($p)){
            global $_purp_l;
            $title .=' '. $_purp_l[$p];
        }else{
            $title .= " للبيع ";
        }
        //echo $t . $p .$title ;exit();
        $units = (new \App\All_types)->purp($p);
        //print_r($units);exit();
        return view('all_types')->with( "units" , $units )->with("title",$title) ->with("meta",$data['meta']);
    }
    function special ($type){
        $units = (new \App\All_types)->special();
        $title = "أحدث العقارات";
        $titl = $title." للبيع و للايحار "." |"."البيوت";
        $description=$title." "." للبيع "." - ".$title." "."للايحار القديم"." - ".$title." "."للايجار الجديد"." - ".$title." للايجار المفروش "." - ".$title." "."للبيع بالتقسيط"." |"."البيوت";;
        $keywords="عقارات - بيع - ايجار قديم - ايجار جديد - تمليك - مفروش - تقسيط ";
        $meta['title'] = $titl;
        $meta['desc'] = $description;
        $meta['keywords'] = $keywords;
        //print_r($units);exit();
        return view('all_types')->with( "units" , $units )->with("title",$title)
            ->with("meta",$meta);
    }
    function rent ($purp){
        $purp = $purp.'-rent';
        // echo $purp;exit();
        switch ($purp) {
            case "old-rent":
                $p = 4;
                //$t = 1;
                break;
            case "furnished-rent":
                $p = 3;
                //$t = 0;
                break;
        }
        if(empty($t)){
            $title = "عقارات";
        }
        if(isset($p)){
            global $_purp_l;
            $title .=' '. $_purp_l[$p];
        }else{
            $title .= " للبيع ";
        }
        $data['meta'] = $this->get_title($t='',$p);
         //echo $t . $p .$title ;exit();
        $units = (new \App\All_types)->purp($p);
        //print_r($units);exit();
        return view('all_types')->with( "units" , $units )->with("title",$title)
            ->with("meta",$data['meta']);;
    }

    function get_title($t,$p)
    {
        global $_type_s ,$_purp_l ,$_type ;
        if(empty($t)){
            $_type[$t]="عقار";
            $_type_s[$t]="عقارات";
            $titl = "عقارات";
            $des="عقار";
            $des2 ="عقارات";
            $key="عقارات";
            $key .=" - "."عقار";
        }else{
            $titl = $_type_s[$t];
            $des = $_type[$t];
            $des2 = $_type_s[$t];
            $key = $_type_s[$t];
            $key .=" - ".$_type[$t];
        }
        if(isset($p)){
            if($p == 1) {
                $des2 .=' '. "تمليك ";
                $des2 .=" - ".$_type[$t].' '. "تمليك ";
                $key .= " - كل العقارات للبيع و للتمليك ";
            }elseif($p == 2){
                $des2 =' '. "للايجار ";
//                $des2 .=" - ".$_type[$t].' '. "للايجار";
                $key .= " - كل العقارات للايجار الجديد ";
            }else{
//                $des2 =' '. $_purp_l[$p];
                $des2 ="";
//                $des2 =" - ".$_type[$t].' '.$_purp_l[$p];
                $key .= " - كل العقارات ".$_purp_l[$p];
            }
            $titl .=' '. $_purp_l[$p];
            $des .=' '. $_purp_l[$p];
            $key .= ' - '. $_purp_l[$p];
            $key .= " - "." تمليك ";
        }else{
            $titl .= " للبيع ";
            $des .= " للبيع ";
            $des2 .= " تمليك ";
            $key .= " - "." للبيع ";
            $key .= " - "." تمليك ";
        }
        $year = date("Y");
        $title = $titl ." - ".$des." - ".$des2." |"."البيوت" ;
        $description = $titl." - ".$des." - ".$des2." - ".$key ." | "."البيوت"." | ".$year;
        $kewords = $key;
        $meta['title'] = $title;
        $meta['desc'] = $description;
        $meta['keywords'] = $kewords;

        return $meta;
    }
}
