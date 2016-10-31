<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['pending', 'payed', 'confirmed', 'completed', 'cancelled']);
            $table->string('name');
            // $table->integer('category_id')->default(0)->unsigned()->index();
            $table->integer('item_id')->unsigned()->index();
            $table->integer('buyer_user_id')->unsigned()->index();
            $table->integer('seller_user_id')->unsigned()->index();
            // $table->boolean('is_rated')->default(0);
            // $table->string('address_name');
            // $table->string('address_phone');
            // $table->string('address_district');
            // $table->string('address_address');
            $table->string('note');
            $table->decimal('price', 8, 2)->unsigned()->default(0);
            $table->timestamps();
            $table->timestamp('payed_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            // $table->timestamp('executed_at');
            $table->timestamp('completed_at')->nullable();
            // $table->timestamp('refunded_at');
            $table->timestamp('cancelled_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
