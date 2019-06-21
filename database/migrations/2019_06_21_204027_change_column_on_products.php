<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnOnProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function ($table){
            $table->string('detail', 1000)->change();
            $table->string('message', 1000)->change();
            $table->string('address', 1000)->change(); 
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function ($table){
            $table->string('detail')->change();
            $table->string('message')->change();
            $table->string('address')->change(); 
        }); 
    }
}
