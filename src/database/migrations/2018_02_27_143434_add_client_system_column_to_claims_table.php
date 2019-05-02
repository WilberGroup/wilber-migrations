<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientSystemColumnToClaimsTable extends Migration
{
    public function up()
    {
        Schema::table('claims', function ($table) {
            $table->text('clientSystem')->after('creator')->nullable();
        });
    }

    public function down()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropColumn(['clientSystem']);
        });
    }
}
