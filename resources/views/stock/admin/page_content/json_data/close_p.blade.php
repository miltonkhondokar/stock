<?php
/**
 * Created by PhpStorm.
 * User: khondokar
 * Date: 4/4/20
 * Time: 10:09 PM
 */
use App\StockData;

$data = StockData::close_price();

echo $data;
