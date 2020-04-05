<?php

use App\StockData;

$data = StockData::open_price();

echo json_encode($data);
