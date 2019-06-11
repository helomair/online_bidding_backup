<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTableWinner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('winner');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { 
        Schema::create('winner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('uid'); 
            $table->integer('pid');
            $table->string('address');
            $table->string('message'); 
            $table->timestamps();
        });
    }
}
