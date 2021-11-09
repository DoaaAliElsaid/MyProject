<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Realestate extends Model
{
    function real($id)
    {
        return DB::table('units')->where('unit_id',$id)->
        get();
        //print_r($value);
    }
}
