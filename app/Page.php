<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    function units()
    {
        return DB::table('sp_unit')->orderBy('sp_date','desc')->limit(3)->get();
        //print_r($value);
    }
}
