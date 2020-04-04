<?php

use App\StockData;

$data = StockData::get_date();

echo json_encode($data);
