<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGoogleIdColumnInUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('google_id')->nullable();
        });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('google_id');
         });
    }
}
