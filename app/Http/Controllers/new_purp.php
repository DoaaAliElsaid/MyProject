<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;
use Illuminate\Support\Facades\Request;

class new_purp extends BaseController
{
    function index($args){
        global $_moh_en,$_hay_en,$_reg_en ,$_type_s_en,$_purp_en;
        $args = explode('/', $args);
        // echo Request::segment(1) ;
        //print_r($args);
        $purp = Request::segment(1);
        if(isset($purp) ){
            switch ($purp)
            {
                case "allsale":
                    $config['purp'] = ' 1 , 9 ';
                    break;
                case "allrent":
                    $config['purp'] = ' 2 , 3 , 4 ';
                    break;
            }
        }

        if ( isset($args[0]) ){
            $type = $args[0];
            switch ($type)
            {
                case "Allrealestate":
                    $config['type'] = ' 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 , 13 , 14 , 15 , 16 , 17 , 18 , 19 , 20 , 21 , 22 , 23 , 24 , 25 ';
                    break;
                case "Allapartments":
                    $config['type'] = ' 1 , 17 ,23 , 6 , 9 , 18 , 27 ';
                    break;
                case "Allvillas":
                    $config['type'] = ' 2 , 11 , 12 , 7 , 19 ';
                    break;
                case "Alllands":
                    $config['type'] = ' 3 , 14 , 24 , 25 , 20 ';
                    break;
                case "Allshops":
                    $config['type'] = ' 4 , 10 , 5 , 16 ';
                    break;
                case "Alloffices":
                    $config['type'] = ' 8 , 22 , 15 ';
                    break;
                case "Allchalet":
                    $config['type'] = ' 13 ';
                    break;
            }
        }

        if ( isset($args[1]) ){
            $mohza = $args[1];
            $m = array_search($mohza,$_moh_en);
            if($m!='')
                $config['moh'] = $m ;
        }

        if (isset($args[2])) {
            $ahya = $args[2];
            $h = array_search($ahya, $_hay_en);
            if ($h != '') {
                $config['hay'] = $h;
            }
        }

        if ( isset($args[3]) ){
            $regs = $args[3];
            $r = array_search($regs, $_reg_en);
            if ($r != '') {
                $config['reg'] = $r;
            }
        }
            //print_r($config);exit();
        //echo 'new purp';exit();
        $units = (new \App\new_purp())->units($config);
       // print_r($units);exit();
        return view('new_purp')->with( "units" , $units );
    }
}
