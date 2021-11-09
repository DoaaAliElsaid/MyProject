<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    function globals()
    {
        $result = (new \App\Models)->globals();
        print_r($result);exit();
        global $_moh , $_moh_b , $_moh_in ,$_moh_en  ;
        global $_hay , $_hay_b , $_hay_in ,$_hay_en ;
        global $_reg , $_reg_b , $_reg_in ,$_reg_en ;

        global $_type , $_type_s , $_type_s_en ,$_type_en ;
        global $_purp , $_purp_en , $_purp_l , $_purp_l_en ;
        global $country ;
        //global $colonical;

        foreach ($result['moh'] as $rows)
        {
            $_moh[$rows['code']] = $rows['name'];
            $_moh_b[$rows['code']] = ' بـ'.$rows['name'];
            $_moh_in[$rows['code']] = ' في '.$rows['name'];
            $_moh_en[$rows['code']] = $rows['moh_en'];
        }

        foreach ($result['hay'] as $rows)
        {
            $_hay[$rows['sec_code']] = $rows['name'];
            $_hay_b[$rows['sec_code']] = ' بـ'.$rows['name'];
            $_hay_in[$rows['sec_code']] = ' في '.$rows['name'];
            $_hay_en[$rows['sec_code']] = $rows['hay_en'];
        }
        foreach ($result['reg'] as $rows)
        {
            $_reg[$rows['region_code']] = $rows['region_name'];
            $_reg_b[$rows['region_code']] = ' بـ'.$rows['region_name'];
            $_reg_in[$rows['region_code']] = ' في '.$rows['region_name'];
            $_reg_en[$rows['region_code']] = $rows['reg_en'];
        }
        foreach ($result['type'] as $rows)
        {
            $_type[$rows['id']] = $rows['type'] ;
            $_type_s[$rows['id']] = $rows['types'] ;
            $_type_s_en[$rows['id']] = $rows['type_en'] ;
        }
        $_type_en=$_type_s_en;
        foreach ($result['purp'] as $rows)
        {
            $_purp[$rows['id']] = $rows['purp'] ;
            $_purp_l[$rows['id']] = $rows['purp_l'] ;
            $_purp_en[$rows['id']] = $rows['purp_en'] ;
            $_purp_l_en[$rows['id']] = "for ".$rows['purp_en'] ;
        }


    }
}
