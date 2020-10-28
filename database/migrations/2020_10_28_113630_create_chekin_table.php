<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChekinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chekins', function (Blueprint $table) {
            $table->increments('id_chekin');
            $table->dateTime('dateEntry');
            $table->dateTime('dateOutput')->default(null);
            $table->decimal('value', 8,2);
            $table->boolean('additionalVehicle');
            $table->unsignedInteger('id_guest');
            $table->timestamps();
        });

        Schema::table('chekins', function(Blueprint $table){
            $table->foreign('id_guest')->references('id')->on('guests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chekins');
    }
}
