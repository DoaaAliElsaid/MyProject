<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controllers extends BaseController
{
    function globals()
    {
        global $imgthumb  , $imglogo ,$site_name_en,$site_name_ar ;
        $site_name_en = "elbyoot";
        $site_name_ar = "البيوت";
        $imgthumb = "https://www.homz4sale.com/uploads/thumb/";
        $imglogo = "./images/logo.png";
       // echo 'hi';
        $result = (new \App\Models)->globals();
       // print_r($result['moh']);exit();
        global $_moh , $_moh_b , $_moh_in ,$_moh_en  ;
        global $_hay , $_hay_b , $_hay_in ,$_hay_en ;
        global $_reg , $_reg_b , $_reg_in ,$_reg_en ;

        global $_type , $_type_s , $_type_s_en ,$_type_en ;
        global $_purp , $_purp_en , $_purp_l , $_purp_l_en ;
        global $country ;
        //global $colonical;

        foreach ($result['moh'] as $rows)
        {
            $cod=$rows->code;
            $_moh[$cod] = $rows->name;
            $_moh_b[$cod] = ' بـ'.$rows->name;
            $_moh_in[$cod] = ' في '.$rows->name;
            $_moh_en[$cod] = $rows->moh_en;

        }

        foreach ($result['hay'] as $rows)
        {
            $sec_cod=$rows->sec_code;
            $_hay[$sec_cod] = $rows->name;
            $_hay_b[$sec_cod] = ' بـ'.$rows->name;
            $_hay_in[$sec_cod] = ' في '.$rows->name;
            $_hay_en[$sec_cod] = $rows->hay_en;

        }

        foreach ($result['reg'] as $rows)
        {
            $reg_cod=$rows->region_code;
            $_reg[$reg_cod] = $rows->region_name;
            $_reg_b[$reg_cod] = ' بـ'.$rows->region_name;
            $_reg_in[$reg_cod] = ' في '.$rows->region_name;
            $_reg_en[$reg_cod] = $rows->reg_en;
            //print_r( $result['reg']);
        }
        //exit();
        foreach ($result['type'] as $rows)
        {
            $idd= $rows->id;
            $_type[$idd] = $rows->type;
            $_type_s[$idd] = $rows->types;
            $_type_s_en[$idd] = $rows->type_en ;
            //print_r( $_type_s[$idd]);
        }
       // exit();
        $_type_en=$_type_s_en;
        foreach ($result['purp'] as $rows)
        {
            $idd= $rows->id;
            $_purp[$idd] = $rows->purp ;
            $_purp_l[$idd] = $rows->purp_l ;
            $_purp_en[$idd] = $rows->purp_en ;
            $_purp_l_en[$idd] = "for ".$rows->purp_en;
        }


    }
    function get_code_location($location) {
       //  echo 'fhfh '.$location; exit();
        $location = str_replace(' - ', '-', $location);
        $location = str_replace(' -', '-', $location);
        $location = str_replace('- ', '-', $location);
        if(preg_match('/[-]/', $location)) {
            // echo 'found <br>';
            $arr = explode("-", $location, 3);
            //die($arr);
            if (isset($arr[0])) {
                $first = $arr[0];
                //echo 'first word = ' . $first . '<br>';
             }
            if (isset($arr[1])) {
                $second = $arr[1];
                //echo 'second word = ' . $second . '<br>';
            }
             if(isset($arr[2])){
                $third = $arr[2];
                //echo 'third word = '.$third.'<br>';
                 $coder = DB::table('regions')->select('region_code')->where('region_name', 'like', '%' .$first . '%')->where('ahyaa_name','like', '%' . $second. '%')->where('mohafazat_name','like', '%' . $third. '%')->get();
                 $code=$coder[0]->region_code;
            }else{
                 $codea = DB::table('ahyaa')->select('sec_code')->where('name','like', '%' .$first. '%')->where('gov_name','like', '%' .$second. '%')->get();
                 $code=$codea[0]->sec_code;
            }

        }else{
            $codem = DB::table('mohafazat')->select('code')->where('name','like', '%' .$location. '%')->get();
            $code=isset($codem[0])?$codem[0]->code:null;
            if(!$code){
                echo 'NOT CODE';
            }
        }
       // echo $code;exit();
        return $code;
    }
    function ReplacePhones($details=''){
        $matches = array();
        // returns all results in array $matches
        $arabic[] = array('word'=>" صفر" , 'num'=>"1" )  ;
        $arabic[] = array('word'=>" زيرو" , 'num'=>"1" )  ;
        $arabic[] = array('word'=>" zero" , 'num'=>"1" )  ;
        $arabic[] = array('word'=>" واحد" , 'num'=>"1" )  ;
        $arabic[] = array('word'=>" wa7d" , 'num'=>"1" )  ;
        $arabic[] = array('word'=>" one" , 'num'=>"1" )  ;
        $arabic[] = array('word'=>" wahd" , 'num'=>"1" )  ;
        $arabic[] = array('word'=>" اثنين" , 'num'=>"2" )  ;
        $arabic[] = array('word'=>" etnen" , 'num'=>"2" )  ;
        $arabic[] = array('word'=>" ethnen" , 'num'=>"2" )  ;
        $arabic[] = array('word'=>" ثلاثة" , 'num'=>"3" )  ;
        $arabic[] = array('word'=>" ثلاثه" , 'num'=>"3" )  ;
        $arabic[] = array('word'=>" talata" , 'num'=>"3" )  ;
        $arabic[] = array('word'=>" thalata" , 'num'=>"3" )  ;
        $arabic[] = array('word'=>" three" , 'num'=>"3" )  ;
        $arabic[] = array('word'=>" اربعة" , 'num'=>"4" )  ;
        $arabic[] = array('word'=>" اربعه" , 'num'=>"4" )  ;
        $arabic[] = array('word'=>" أربعة" , 'num'=>"4" )  ;
        $arabic[] = array('word'=>" أربعه" , 'num'=>"4" )  ;
        $arabic[] = array('word'=>" four" , 'num'=>"4" )  ;
        $arabic[] = array('word'=>" arba3a" , 'num'=>"4" )  ;
        $arabic[] = array('word'=>" arbaa" , 'num'=>"4" )  ;
        $arabic[] = array('word'=>" خمسة" , 'num'=>"5" )  ;
        $arabic[] = array('word'=>" خمسه" , 'num'=>"5" )  ;
        $arabic[] = array('word'=>" five" , 'num'=>"5" )  ;
        $arabic[] = array('word'=>" khmsa" , 'num'=>"5" )  ;
        $arabic[] = array('word'=>" 5msa" , 'num'=>"5" )  ;
        $arabic[] = array('word'=>" سته" , 'num'=>"6" )  ;
        $arabic[] = array('word'=>" ستة" , 'num'=>"6" )  ;
        $arabic[] = array('word'=>" seta" , 'num'=>"6" )  ;
        $arabic[] = array('word'=>" six" , 'num'=>"6" )  ;
        $arabic[] = array('word'=>" سبعة" , 'num'=>"7" )  ;
        $arabic[] = array('word'=>" سبعه" , 'num'=>"7" )  ;
        $arabic[] = array('word'=>" seven" , 'num'=>"7" )  ;
        $arabic[] = array('word'=>" sab3a" , 'num'=>"7" )  ;
        $arabic[] = array('word'=>" sabaa" , 'num'=>"7" )  ;
        $arabic[] = array('word'=>" ثمانية" , 'num'=>"8" )  ;
        $arabic[] = array('word'=>" ثمانيه" , 'num'=>"8" )  ;
        $arabic[] = array('word'=>" eghit" , 'num'=>"8" )  ;
        $arabic[] = array('word'=>" tamania" , 'num'=>"8" )  ;
        $arabic[] = array('word'=>" تسعه" , 'num'=>"9" )  ;
        $arabic[] = array('word'=>" تسعة" , 'num'=>"9" )  ;
        $arabic[] = array('word'=>" nine" , 'num'=>"9" )  ;
        $arabic[] = array('word'=>" tes3a" , 'num'=>"9" )  ;
        $arabic[] = array('word'=>" عشرة" , 'num'=>"10" )  ;
        $arabic[] = array('word'=>" عشره" , 'num'=>"10" )  ;
        $arabic[] = array('word'=>" ten" , 'num'=>"10" )  ;
        $arabic[] = array('word'=>" 3ashara" , 'num'=>"10" )  ;
        $arabic[] = array('word'=>" ashara" , 'num'=>"10" )  ;



        foreach($arabic as $str)
        {
            $details = str_replace($str['word'] , $str['num'] , $details);

        }

        preg_match_all('/[0-9]{3}[\-][0-9]{8}|[0-9]{3}[\s][0-9]{8}|[0-9]{3}[\s][0-9]{3}[\s][0-9]{5}|[0-9]{11}|[0-9]{8}|[0-9]{7}|[0-9]{5}|[0-9]{3}[\-][0-9]{3}[\-][0-9]{5}/', trim($details), $matches);
        $matches = $matches[0];
        $replaces = array();
        foreach($matches As $ma){
            $replaces[] = '-';
        }
        $details = str_replace($matches,$replaces,$details);

        foreach($arabic as $str)
        {
            $details = str_replace($str['word'] , $str['num'] , $details);

        }

        preg_match_all('/[٠-٩]{٣}[\-][٠-٩]{٨}|[٠-٩]{٣}[\s][٠-٩]{٨}|[٠-٩]{٣}[\s][٠-٩]{٣}[\s][٠-٩]{٥}|[٠-٩]{11}|[٠-٩]{٨}|[٠-٩]{7}|[٠-٩]{٥}|[٠-٩]{٣}[\-][٠-٩]{٣}[\-][٠-٩]{٥}/', trim($details), $matches);
        $matches = $matches[0];
        foreach($matches As $ma){
            $replaces[] = '-';
        }
        //$details = str_replace($matches,$replaces,$details);


        $matchs = array();
        $pattern = "/(?:[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
        preg_match_all($pattern,trim($details),$matchs);
        //print_r($matchs);
        $replacs = array();
        $matchs = $matchs[0];
        foreach($matchs As $ma){
            $replacs[] = '-';
        }
        $details = str_replace($matchs,$replacs,$details);
        $p = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
        preg_match_all($p,trim($details),$m);
        $m = @call_user_func_array('array_merge', $m);
        $m = @array_values(@array_unique(@array_filter($m)));
        $r = array();
        foreach($m As $ma){
            $r[] = '-';
        }
        $details = str_replace($m,$r,trim($details));
        $p = "/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
        preg_match_all($p,trim($details),$mc);
        $mc = @call_user_func_array('array_merge', $mc);
        $mc = @array_values(@array_unique(@array_filter($mc)));
        foreach($mc As $ma){
            $r[] = '-';
        }
        $details = str_replace($mc,$r,trim($details));
        return htmlspecialchars($details,ENT_IGNORE);
    }
    function getImage($img)
    {
        if($img != NULL || $img !=""){

            if (@getimagesize("https://www.homz4sale.com/uploads/".$img))
            {
                return "https://www.homz4sale.com/uploads/".$img ;
            }
            elseif (@getimagesize("https://www.homz4sale.com/uploads/thumb/".$img))
            {
                return "https://www.homz4sale.com/uploads/thumb/".$img ;
            }else{
                return "./public/images/logo.png" ;
            }
        }
        else
        {
            return "./public/images/logo.png" ;
        }
    }
}
