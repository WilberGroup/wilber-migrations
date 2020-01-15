<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegionColumnToClaimsTable extends Migration
{
    public function up()
    {
        Schema::table('claims', function ($table) {
            $table->text('region')->after('debtorType')->nullable();
        });
    }

    public function down()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropColumn(['region']);
        });
    }
}
