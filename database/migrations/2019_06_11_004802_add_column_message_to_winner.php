<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnMessageToWinner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('winner', function (Blueprint $table) {
            if (!Schema::hasColumn('winner', 'message'))
                $table->string('message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('winner', function (Blueprint $table) {
            $table->dropColumn('message'); 
        });
    }
}
