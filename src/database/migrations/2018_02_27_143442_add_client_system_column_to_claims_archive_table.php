<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientSystemColumnToClaimsArchiveTable extends Migration
{
    public function up()
    {
        Schema::table('claims_archive', function ($table) {
            $table->text('clientSystem')->after('creator')->nullable();
        });
    }

    public function down()
    {
        Schema::table('claims_archive', function (Blueprint $table) {
            $table->dropColumn(['clientSystem']);
        });
    }
}
