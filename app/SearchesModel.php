<?php

namespace App;

use Carbon\Traits\Units;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SearchesModel extends Model
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
                    break;

                case "type":
                    if ($value>0)
                        $keys = 'type' ;
                        $where= $value  ;
                        $query[$keys] = $value ;
                    break;

                case "purp":
                    if ($value>0)
                        $keys = 'purp' ;
                        $where= $value  ;
                        $query[$keys] = $value ;
                    break;
                    //print_r($keys ,$where);
            }
        }
//        print_r($query);
//        exit();

        $val =  DB::table('units')->select('units.roomnum','units.bathnum','mohafzacode', 'ahyaacode', 'region_code','units.date', 'units.unit_id', 'purp', 'type', 'details', 'units.title', 'area','price', 'image1name','units.mobile','units.video_img')->where(function($q) use ($query)
                {
                    foreach($query as $key => $value)
                    {

                        $q->where($key, '=', $value);
                    }
                })->limit(10)->get();
       // $val = $val->paginate(10);
       // print_r($val);
        //exit();
        if(isset($_GET['q_searches'])){
            $query = DB::getQueryLog();
            $query = end($query);
            dd($query);
        }
        return $val;
    }

}
