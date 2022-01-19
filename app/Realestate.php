<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Realestate extends Model
{
    function real($id)
    {
       // echo "id 22: ".$id;
        $value = DB::table('units')->where('unit_id',$id)->get();
        if(isset($value)){
           // echo "ooo".$value;exit();
            return $value;
        }else{
            //echo 'jjk';exit();
            $value ="لا يوجد اعلان " ;
            return $value;
        }
//        print_r($value);
//        exit();
    }
    function units($type)
    {
        //echo 'jjk';exit();
        return DB::table('units')->where('type',$type)->
        orderBy('date','desc')->limit(3)->get();
        //print_r($value);
    }
}
