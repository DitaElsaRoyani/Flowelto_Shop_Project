<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowerProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_flower_produk', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Category');
            $table->string('flower_name');
            $table->string('flower_price');
            $table->string('description');
            $table->string('flower_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_flower_produk');
    }
}
