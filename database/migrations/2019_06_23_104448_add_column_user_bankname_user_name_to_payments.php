<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUserBanknameUserNameToPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->string('user_bankname');
            $table->string('user_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('user_bankname');
            $table->dropColumn('user_name');
        });
    }
}
