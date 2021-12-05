<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;
use Illuminate\Support\Facades\Request;

class Searches extends BaseController
{
    function index($args){
        // echo Request::segment(2) ;
        global $_moh_en,$_hay_en,$_reg_en ,$_type_s_en,$_purp_en , $_type_s ,$_purp_l ,
               $_hay , $_reg , $_moh ;
        $args = explode('/', $args);
        if ( isset($args[0]) ){
            $mohza = $args[0];
            $m = array_search($mohza,$_moh_en);
            if($m!='')
                $config['moh'] = $m ;
        }
        if (isset($args[1])) {
            $ahya = $args[1];
            $h = array_search($ahya, $_hay_en);
            if ($h != '') {
                $config['hay'] = $h;
            } else {
                $r = array_search($ahya, $_reg_en);
                if ($r != '') {
                    $config['reg'] = $r;
                } else {
                    $t = array_search($ahya, $_type_s_en);
                    if ($t != '') {
                        $config['type'] = $t;
                    } else {
                        $p = array_search($ahya, $_purp_en);
                        if ($p != '') {
                            $config['purp'] = $p;
                        }
                    }
                }
            }
        }
        if (isset($args[2])) {
            $regs = $args[2];
            $r = array_search($regs, $_reg_en);
            if ($r != '') {
                $config['reg'] = $r;
            } else {
                $t = array_search($regs, $_type_s_en);
                if ($t != '') {
                    $config['type'] = $t;
                } else {
                    $p = array_search($regs, $_purp_en);
                    if ($p != '') {
                        $config['purp'] = $p;
                    }
                }
            }
        }
        if (isset($args[3])) {
            $types = $args[3];
            $t = array_search($types, $_type_s_en);
            if ($t != '') {
                $config['type'] = $t;
            } else {
                $p = array_search($types, $_purp_en);
                if ($p != '') {
                    $config['purp'] = $p;
                }
            }
        }
        if (isset($args[4])) {
            $purps=$args[4];
            $p = array_search($purps, $_purp_en);
            if ($p != '') {
                $config['purp'] = $p;
            }
        }

        if(isset($config['type'])){
            $t = $config['type'] ;
            $title = $_type_s[$t];
        }else{
            $title = "عقارات";
        }
        if(isset($config['purp'])){
            $p = $config['purp'] ;
            $title .=' '. $_purp_l[$p];
        }else{
            $title .= " للبيع ";
        }
        if(isset($config['reg'])){
            $r = $config['reg'] ;
            $title .=' فى '. $_reg[$r];
        }elseif(isset($config['hay'])){
            $h = $config['hay'] ;
            $title .=' فى '. $_hay[$h];
        }elseif(isset($config['moh'])){
            $m = $config['moh'] ;
            $title .=' فى '. $_moh[$m];
        }else{
            $title .=' فى مصر  ';
        }
       // echo $title ;exit();
        //print_r($config);exit();
        $units = (new \App\Searches)->units($config);
        return view('searches')->with(array( "units" => $units ))
            ->with("title",$title);
    }
}
