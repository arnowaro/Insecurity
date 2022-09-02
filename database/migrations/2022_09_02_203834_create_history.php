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
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user');
            $table->string('titre');
            $table->string('description');
            $table->date('date');
            $table->string('image');
            $table->string('latitude');
            $table->string('longitude');
            // victime data
            $table->string('victime_name')->nullable();
            $table->string('victime_firstname')->nullable();
            $table->string('victime_age')->nullable();
            $table->boolean('victime_gender')->nullable();
            $table->string('victime_birth_place')->nullable();
            // criminal data
            $table->string('criminal_name')->nullable();
            $table->string('criminal_firstname')->nullable();
            $table->string('criminal_age')->nullable();
            $table->string('criminal_birth_place')->nullable();
            $table->string('criminal_description')->nullable();
            $table->string('criminal_image')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('history');
    }
};
