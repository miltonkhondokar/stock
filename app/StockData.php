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

    public static function open_price()
    {
        $data = DB::select('select DATE_FORMAT(date, "%Y%m%d") as date,open_price from StockDatas limit 50');

        $jdata = [];
        foreach ($data as $user) {
            $jdata[] = [$user->date, $user->open_price];
        }

        return str_replace('"','',json_encode($jdata));

    }


    public static function high_price()
    {
        $data = DB::select('select DATE_FORMAT(date, "%Y%m%d") as date,high_price from StockDatas limit 50');

        $jdata = [];
        foreach ($data as $user) {
            $jdata[] = [$user->date, $user->high_price];
        }

        return str_replace('"','',json_encode($jdata));
    }


    public static function low_price()
    {
        $data = DB::select('select DATE_FORMAT(date, "%Y%m%d") as date,low_price from StockDatas limit 50');
        $jdata = [];
        foreach ($data as $user) {
            $jdata[] = [$user->date, $user->low_price];
        }

        return str_replace('"','',json_encode($jdata));
    }


    public static function close_price()
    {
        $data = DB::select('select DATE_FORMAT(date, "%Y%m%d") as date,close_price from StockDatas limit 50');
        $jdata = [];
        foreach ($data as $user) {
            $jdata[] = [$user->date, $user->close_price];
        }

        return str_replace('"','',json_encode($jdata));
    }

}
