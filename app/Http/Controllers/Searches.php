<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Searches extends BaseController
{
    function index($args){

        // echo Request::segment(2) ;
        global $_moh_en,$_hay_en,$_reg_en ,$_type_s_en,$_purp_en , $_type_s ,$_purp_l ,
               $_hay , $_reg , $_moh  ;
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
        if(empty($config['purp'])){
            $config['purp']="1";
        }
        //print_r($data['meta']);exit();
       // echo $title ;exit();
        //print_r($config);exit();
        $units = (new \App\SearchesModel)->units($config);

        $data['meta'] = $this->get_title($config);
        return view('searches')->with(array( "units" => $units ))
           ->with("config",$config)
            ->with("meta", $data['meta']);
    }

    function get_title($config)
    {
        global $_moh_en,$_hay_en,$_reg_en ,$_type_s_en,$_purp_en , $_type_s ,$_purp_l ,
               $_hay , $_reg , $_moh ,$_type ;
        if(isset($config['type'])){
            $t = $config['type'] ;
            $titl = $_type_s[$t];
            $des = $_type[ $t];
            $key = $_type_s[$t] ." - ".$_type[ $t];
        }else{
            $titl = "عقارات";
            $des = "عقار";
            $key ="عقار";
        }
        if(isset($config['purp'])){
            $p = $config['purp'] ;
            $titl .=' '. $_purp_l[$p];
            $des .= ' '. $_purp_l[$p];
            $key .=' - '. $_purp_l[$p];
        }else{
            $titl .= " للبيع ";
            $des .= " للبيع ";
            $key .=" - "." للبيع ";
        }
        if(isset($config['reg'])){
            $h = $config['hay'] ;
            $m = $config['moh'] ;
            $r = $config['reg'] ;
            $titl .=' فى '. $_reg[$r];
            $des .=' فى '. $_reg[$r];
            $key .= ' - '. $_reg[$r];
            $key .= ' - '. $_hay[$h];
            $key .=' - '. $_moh[$m];
            $key .=' - '.' ب'.$_reg[$r];
            $key .=' - '. ' ب'. $_hay[$h];
            $key .=' - '.' ب'. $_moh[$m];
        }elseif(isset($config['hay'])){
            $h = $config['hay'] ;
            $m = $config['moh'] ;
            $titl .=' فى '. $_hay[$h];
            $des .=' فى '. $_hay[$h];
            $key .= ' - '. $_hay[$h];
            $key .=' - '. $_moh[$m];
            $key .=' - '. ' ب'. $_hay[$h];
            $key .=' - '.' ب'. $_moh[$m];
        }elseif(isset($config['moh'])){
            $m = $config['moh'] ;
            $titl .=' فى '. $_moh[$m];
            $des .=' فى '. $_moh[$m];
            $key .=' - '. $_moh[$m];
            $key .=' - '.' ب'. $_moh[$m];
        }else{
            $titl .=' فى مصر  ';
            $des .=' فى القاهره  ';
            $key .=" - "."القاهرة";
        }

        $year = date("Y");
        $title =$year." | ".$titl." | "."البيوت ";
        $description = $key." - ".$des.$title;
        $kewords = $key;
        $meta['title'] = $title;
        $meta['desc'] = $description;
        $meta['keywords'] = $kewords;

        //print_r($meta);exit();
        return $meta;
    }
}
