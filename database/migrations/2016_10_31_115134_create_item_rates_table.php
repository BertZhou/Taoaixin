<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned()->index();
            $table->integer('item_id')->unsigned()->index();
            $table->integer('buyer_user_id')->unsigned()->index();
            $table->integer('seller_user_id')->unsigned()->index();
            $table->tinyInteger('stars')->unsigned()->default(5);
            $table->text('content');
            $table->boolean('remark')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_rates');
    }
}
