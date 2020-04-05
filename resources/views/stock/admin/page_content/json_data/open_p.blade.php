<?php
/**
 * Created by PhpStorm.
 * User: khondokar
 * Date: 4/4/20
 * Time: 10:08 PM
 */


use App\StockData;

$data = StockData::open_price();


echo $data;
