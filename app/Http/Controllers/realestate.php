<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Page;

class realestate extends BaseController
{
    function index($id)
    {
        //echo "id : ".$id;
        // Read value from Model method
        $real = (new \App\Realestate)->real($id);
       // print_r($real);exit();

        if(isset($real[0])){
            $units = (new \App\Realestate)->units($real[0]->type);
            $data['meta'] = $this->get_title($real);
            // Pass to view
            return view('realestate',array("real" => $real , "units"=>$units))
                ->with("meta",$data['meta']);
        }else{
          //  echo 'juujk';exit();
            // Pass to view

            return redirect('/');
        }

    }
    function get_title($real)
    {
        global $_type_s ,$_purp_l ,$_type ,$_reg ,$_hay , $_moh ;
        $row = $real[0];
        $t = $row->type;
        $p = $row->purp ;
        if(isset($row->region_code))
        {
            $r1= $row->region_code;
            $loc = $_reg[$r1] . " - ";
        }
        if(isset($row->ahyaacode))
        {
            $h1= $row->ahyaacode;
            $loc .=  $_hay[$h1] . " - ";
        }
        if(isset($row->mohafzacode))
        {
            $m1= $row->mohafzacode;
            $loc .=  $_moh[$m1]." - ";
        }
        $year = date("Y");
        $title = $row->title;
        $kewords = $_type_s[$t]." - ".$_type[$t]." - ".$_purp_l[$p]." - ".$loc." البيوت";
        $description = $title . " ".$kewords;
        $meta['title'] = $title;
        $meta['desc'] = $description;
        $meta['keywords'] = $kewords;

        return $meta;
    }


}
