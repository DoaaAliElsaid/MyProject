<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Searches extends Model
{
    function units($config)
    {
        //print_r($config);exit();
       // $table='units';
        //$where = 1 ;
        foreach($config as $key=>$value)
        {
            switch ($key)
            {
                case "moh":
                    if ($value>0)
                        $keys= 'mohafzacode' ;
                        $where = $value  ;
                    break;

                case "hay":
                    if ($value>0)
                        $keys= 'ahyaacode' ;
                        $where = $value  ;
                        //$where .=" and ahyaacode =" . $value ;
                    break;

                case "reg":
                    if ($value>0)
                        $keys= 'region_code' ;
                        $where = $value  ;
                       // $where .=" and region_code=".$value ;
                    break;

                case "type":
                    if ($value>0)
                        $keys= 'type' ;
                        $where = $value  ;
                        //$where .=" and type=".$value ;
                    break;

                case "purp":
                    if ($value>0)
                        $keys= 'purp' ;
                        $where = $value  ;
                        //$where .=" and purp=".$value ;
                    break;
            }
        }
        $val =  DB::table('units')->where($keys,$where)->get();
        return $val;

        //print_r($val);
        //exit();
    }
    function count($val){
        $count = count($val);
        return $count;
        //print_r($count);
        //exit();
        //return  $count;
    }

}
