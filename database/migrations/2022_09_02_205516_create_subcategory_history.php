<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcategory_id')->unsigned();
            $table->unsignedBigInteger('history_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategory');
            $table->foreign('history_id')->references('id')->on('history');

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
        Schema::dropIfExists('subcategory_history');
    }
};
