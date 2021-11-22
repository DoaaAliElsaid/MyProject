<?php

namespace App;

use Carbon\Traits\Units;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Searches extends Model
{
    function units($config)
    {
        DB::enableQueryLog();
        //print_r($config);exit();
       // $table='units';
        //$where = 1 ;
        foreach($config as $key=>$value)
        {
            $query;
            switch ($key)
            {
                case "moh":
                    if ($value>0)
                        $keys= 'mohafzacode' ;
                        $where = $value  ;

                    $query = [$keys => $value] ;

                    break;

                case "hay":
                    if ($value>0)
                        $keys = 'ahyaacode' ;
                        $where= $value  ;
                        $query[$keys] = $value ;

                    break;

                case "reg":
                    if ($value>0)
                        $keys = 'region_code' ;
                        $where = $value  ;
                    $query[$keys] = $value ;
                      //  $where .= " , ". $keys. "=" . $value ;
                       // $where .=" and region_code=".$value ;
                    break;

                case "type":
                    if ($value>0)
                        $keys = 'type' ;
                        $where= $value  ;
                    $query[$keys] = $value ;
                        //$where .= " , ". $keys. "=" . $value ;
                        //$where .=" and type=".$value ;
                    break;

                case "purp":
                    if ($value>0)
                        $keys = 'purp' ;
                        $where= $value  ;
                    $query[$keys] = $value ;
                        //$where .= " , ". $keys. "=" . $value ;
                        //$where .=" and purp=".$value ;
                    break;
                    //print_r($keys ,$where);
            }


        }
//        print_r($query);
//        exit();

        $val =  DB::table('units')->where(function($q) use ($query)
    {
        foreach($query as $key => $value)
        {

            $q->where($key, '=', $value);
        }
    })->paginate(10);

//        print_r($val);
//        exit();
        if(isset($_GET['q_searches'])){
            $query = DB::getQueryLog();
            $query = end($query);
            dd($query);
        }
        return $val;

    }
    function count($val){
        $count = count($val);
        return $count;
        //print_r($count);
        //exit();
    }

}
