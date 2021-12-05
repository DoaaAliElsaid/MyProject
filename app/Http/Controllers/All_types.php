<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class All_types extends BaseController
{
    function index($type,$purp){
        //echo 'all types'. $type. ' - '.$purp;
        //exit();
        $purp = 'for-'.$purp;
        if(! isset($type)) {
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
        //echo $t . $p .$title ;exit();
        $units = (new \App\All_types)->units($t,$p);
        //print_r($units);exit();
        return view('All_types')->with( "units" , $units )->with("title",$title);
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
        if(! isset($t)){
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
        return view('All_types')->with( "units" , $units )->with("title",$title);
    }
    function special ($type){
        $units = (new \App\All_types)->special();
        $title = "أحدث العقارات";
        //print_r($units);exit();
        return view('All_types')->with( "units" , $units )->with("title",$title);
    }
    function rent ($type){
        $type = $type.'-rent';
        // echo $type;exit();
        switch ($type) {
            case "old-rent":
                $p = 4;
                //$t = 1;
                break;
            case "furnished-rent":
                $p = 3;
                //$t = 0;
                break;
        }
        if(! isset($t)){
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
        return view('All_types')->with( "units" , $units )->with("title",$title);
    }
}
