<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;
use Illuminate\Support\Facades\Request;

class new_purp extends BaseController
{
    function index($args){
        global $_moh_en,$_hay_en,$_reg_en ,$_type_s_en,$_purp_en,$_type_s ,$_purp_l ,
               $_hay , $_reg , $_moh ;
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

        $data['meta'] = $this->get_title($config);


        if(isset($config['purp'][1])){
            $p = $config['purp'][1] ;
            $title =' '. $_purp_l[$p];
        }else{
            $title = " للبيع ";
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
        //echo $config['type'][1];exit();
        //echo $title;exit();
            //print_r($config);exit();
        //echo 'new purp';exit();
        $units = (new \App\new_purpModel())->units($config);
        $u = json_encode($units);
        $u = json_Decode($u);
        if(isset($u)){
            $title .=" - ".$u->total ." ";
        }
        if(isset($type) && $type == "Allrealestate")
        {
            $title = "عقارات";
        }elseif(isset($config['type'][1])){

            $t = $config['type'][1] ;
            $title .= $_type_s[$t];
        }
        else{
            $title .= "عقارات";
        }
        $title .=" | "."البيوت - elbyoot.com ";
       // print_r($units);exit();
        return view('new_purp')->with( "units" , $units )
            ->with("title",$title)->with("meta", $data['meta'])
            ->with("u", $u);
    }
    function get_title($config)
    {
        global $_moh_en,$_hay_en,$_reg_en ,$_type_s_en,$_purp_en,$_type_s ,$_purp_l ,
               $_hay , $_reg , $_moh , $_type ;
        if(isset($type) && $type == "Allrealestate")
        {
            $titl = "عقارات";
        }elseif(isset($config['type'][1])){

            $t = $config['type'][1] ;
            $titl = $_type_s[$t];
            $des = $_type[ $t];
            $key = $_type_s[$t] ." - ".$_type[ $t];
        }
        else{
            $titl = "عقارات";
            $des = "عقار";
            $key ="عقار";
        }
        if(isset($config['purp'][1])){
            $p = $config['purp'][1] ;
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
