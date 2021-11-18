<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Models extends Model
{
    function globals()
    {
        $res['moh'] = DB::table('mohafazat')->
        orderBy('code')
            ->get();

        $res['hay']= DB::table('ahyaa')->
        orderBy('sec_code')
            ->get();

        $res['reg']= DB::table('regions')->
        orderBy('region_code')
            ->get();
        $res['type'] = DB::table('type')->
        orderBy('id')
            ->get();
        $res['purp'] = DB::table('purp')->
        orderBy('id')
            ->get();
        return $res;
    }
}
