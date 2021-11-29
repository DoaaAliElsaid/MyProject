<?php

namespace App;

use Carbon\Traits\Units;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class new_purp extends Model
{
    function units($config)
    {
        DB::enableQueryLog();
        //print_r($config);
        //exit();

        foreach($config as $key=>$value)
        {
            $query;
            //$value;
            switch ($key)
            {
                case "purp":
                    //if ($value>0) {
                        $keys = 'purp';
                        $where = explode(',' , $value);
                        $query[$keys] = $where;
                       // print_r($query);exit();
                    //}
                    break;

                case "type":
                    //if ($value>0) {
                        $keys = 'type';
                        $where = explode(',' , $value);
                        $query[$keys] = $where;
                    //print_r($query);exit();
                    //}
                    break;

                case "moh":
                    if ($value>0) {
                        $keys = 'mohafzacode';
                        $where = explode(',' , $value);
                        $query[$keys] = $where;
                    }
                    break;

                case "hay":
                    if ($value>0) {
                        $keys = 'ahyaacode';
                        $where = explode(',' , $value);
                        $query[$keys] = $where;
                    }
                    break;

                case "reg":
                    if ($value>0) {
                        $keys = 'region_code';
                        $where = explode(',' , $value);
                        $query[$keys] = $where;
                    }
                    break;

                //print_r($key ,$where);
            }
        }
        //print_r($key ,$value);exit();
         //print_r($query);
        //exit();

        $val =  DB::table('units')->where(function($q) use ($query)
        {
            foreach($query as $key => $value)
            {
               // print_r($value);exit();
                $q->whereIn($key,$value);
            }
        })->paginate(10);
        //print_r($val);

        if(isset($_GET['q_purp'])){
            $query = DB::getQueryLog();
            $query = end($query);
            dd($query);
        }
        //exit();
        return $val;
    }
}
