<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Models extends Model
{
    function globals()
    {

        $moh = DB::table('mohafazat')->
        select('code', 'moh_en', 'moh_en as name')->
        orderBy('code')
            ->get();
        $hay = DB::table('ahyaa')->
        select('sec_code', 'hay_en', 'hay_en as name')->
        orderBy('sec_code')
            ->get();
        $reg = DB::table('regions')->
        select('region_code', 'reg_en', 'reg_en as region_name')->
        orderBy('region_code')
            ->get();
        $type = DB::table('type')->
        orderBy('id')
            ->get();
        $purp = DB::table('purp')->
        orderBy('id')
            ->get();
    }
}
