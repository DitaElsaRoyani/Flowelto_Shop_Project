<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_trans_history', function (Blueprint $table) {
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
        Schema::dropIfExists('_trans_history');
    }
}
