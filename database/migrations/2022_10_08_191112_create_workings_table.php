<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workings', function (Blueprint $table) {
            $table->id();
            $table->string('Sat');
            $table->string('Sun');
            $table->string('Mon');
            $table->string('Tue');
            $table->string('Wed');
            $table->string('Thu');
            $table->string('Fri');
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
        Schema::dropIfExists('workings');
    }
}
