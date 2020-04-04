<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StockDatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name',100);
            $table->date('date');
            $table->decimal('open_price',20,6)->default(0.000000);
            $table->decimal('high_price',20,6)->default(0.000000);
            $table->decimal('low_price',20,6)->default(0.000000);
            $table->decimal('close_price',20,6)->default(0.000000);
            $table->integer('volume');
            $table->timestamps();
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('StockDatas');
    }
}
