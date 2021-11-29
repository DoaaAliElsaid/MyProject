<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controllers extends BaseController
{
    function globals()
    {
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
        $ci=& get_instance();
        $ci->load->database();
        /*  $sql  = "SELECT region_code FROM `regions` where region_name like '%$first%' and ahyaa_name like '%$second%' and mohafazat_name like '%$third%'";

         echo 'query = '.$sql.'<br>';
      $query = $ci->db->query($sql);
         $row = $query->row();*/


        //$result = mysql_query($query);

        //$rows = mysql_fetch_assoc($result);
        // echo'kjkjk<pre>';print_r($row);echo'</pre>';exit();

         echo 'fhfh '. 'function helper';exit();
        $location = str_replace(' - ', '-', $location);
        $location = str_replace(' -', '-', $location);
        $location = str_replace('- ', '-', $location);
        if(preg_match('/[-]/', $location)){
            // echo 'found <br>';
            $arr = explode("-", $location, 3);
            $first = $arr[0];
            // echo 'first word = '.$first.'<br>';
            $second = $arr[1];
            // echo 'second word = '.$second.'<br>';
            $third = $arr[2];
            //  echo 'third word = '.$third.'<br>';
            if($third == ''){
                $sql = "SELECT sec_code FROM ahyaa where name like '%$first%' and gov_name like '%$second%'";
                // echo $sql.'<br>';
                $query = $ci->db->query($sql);
                $row = $query->row();
                $code = $row->sec_code;
            }else{
                $sql = "SELECT region_code FROM `regions` where region_name like '%$first%' and ahyaa_name like '%$second%' and mohafazat_name like '%$third%'";
                //echo $sql.'<br>';
                $query = $ci->db->query($sql);
                $row = $query->row();
                $code = $row->region_code;
            }

        }else{
            //echo 'Not found <br>';
            $sql = "SELECT code FROM mohafazat where name like '%$location%'";
            //echo $sql.'<br>';
            $query = $ci->db->query($sql);
            $row = $query->row();
            $code = $row->code;
            if(!$code){
                echo 'NOT CODE';
                $sql = "SELECT sec_code FROM ahyaa where name like '%$location%'";
                //echo $sql.'<br>';
                $query = $ci->db->query($sql);
                $row = $query->row();
                $code = $row->sec_code;
            }
        }
        //echo '<br> code ='.$code;exit();
        return $code;
    }
}
