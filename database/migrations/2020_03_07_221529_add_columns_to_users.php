<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            //$table->string('UUID')->primary();
            /*$table->string('user_role')->nullable();
            $table->integer('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('ethnicity')->nullable();
            $table->char('birth_date')->nullable();
            $table->string('profile_complete_status')->nullable();
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
