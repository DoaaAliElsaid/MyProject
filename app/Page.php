<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    function units()
    {
        return DB::table('units')->orderBy('date','desc')->limit(3)->get();
        //print_r($value);
    }
}
