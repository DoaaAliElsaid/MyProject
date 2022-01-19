<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CompaniesModel extends Model
{
    function company($com)
    {
        DB::enableQueryLog();
        $akari = DB::table('sponsors_users')->where('page',$com)->get();

        //print_r($akari);
        //echo $akari->banner;
        //exit();

        if($akari = '3kari'){
            $res = DB::table('units')->where('private',1)->where('ahyaacode',1133)->paginate(10);
            if(isset($_GET['q_companies'])){
                $query = DB::getQueryLog();
                $query = end($query);
                dd($query);
            }
            return $res;
        }
        //print_r($res);
       // exit();
    }
    function sponser($com){
        return DB::table('sponsors_users')->where('page',$com)->get();
    }

}
