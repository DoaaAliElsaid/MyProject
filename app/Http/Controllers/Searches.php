<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;
use Illuminate\Support\Facades\Request;

class Searches extends BaseController
{
    function index($args){
        app('App\Http\Controllers\Controllers')->globals();
        // echo Request::segment(2) ;
        global $_moh_en,$_hay_en,$_reg_en ,$_type_s_en,$_purp_en;
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
            $config['purp'] = $args[4];
        }
        //print_r($config);exit();
        $units = (new \App\Searches)->units($config);
        $count = (new \App\Searches)->count($units);
        return view('searches', array( "units"=>$units , "count" => $count ));
    }
}
