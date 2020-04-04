<?php

namespace App\Http\Controllers;

use App\StockData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{

    public function index()
    {
//        $all_data = StockData::get_date();
        $all_data = StockData::get_date();
        return view('stock.admin.page_content.pages.dashboard',['stockData'=>$all_data]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(StockData $stockData)
    {
        //
    }


    public function edit(StockData $stockData)
    {
        //
    }


    public function update(Request $request, StockData $stockData)
    {
        //
    }


    public function destroy(StockData $stockData)
    {
        //
    }
}
