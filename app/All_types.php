<?php

namespace App;

use Carbon\Traits\Units;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class All_types extends Model
{
    function units($type,$purp)
    {
//        echo $type , '   ,     ',$purp;exit();
        DB::enableQueryLog();
        $res=  DB::table('units')->
            where('type',$type)->
            where('purp',$purp)->
            orderBy('unit_id', 'desc')->
            paginate(10);
        //print_r($res);
        //exit();
        if(isset($_GET['q_types'])){
            $query = DB::getQueryLog();
            $query = end($query);
            dd($query);
        }
        return $res;
    }
    function purp($purp)
    {
    //      echo $purp;exit();
        DB::enableQueryLog();
        $res=  DB::table('units')->
        where('purp',$purp)->
        orderBy('unit_id', 'desc')->
         paginate(10);
        //print_r($res);
        //exit();
        if(isset($_GET['q_purp'])){
            $query = DB::getQueryLog();
            $query = end($query);
            dd($query);
        }
        return $res;
    }
    function special()
    {
        //      echo $purp;exit();
        DB::enableQueryLog();
        $res=  DB::table('units')->
        orderBy('unit_id', 'desc')->
        paginate(10);
        //print_r($res);
        //exit();
        if(isset($_GET['q_special'])){
            $query = DB::getQueryLog();
            $query = end($query);
            dd($query);
        }
        return $res;
    }
}
