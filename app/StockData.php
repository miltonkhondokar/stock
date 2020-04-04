<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StockData extends Model
{
    public static function get_date()
    {
        $data = DB::select('select company_name,date,open_price,high_price,low_price,close_price,volume from StockDatas limit 50');
        return $data;
    }

}
