<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopingcartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopingcart', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('flower_image');
            $table->string('flower_name');
            $table->string('subtotal');
            $table->string('Qty');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopingcart');
    }
}
