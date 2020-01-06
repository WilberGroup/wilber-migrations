<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVagueDenialAndClearLiabilityColumnsToClaimsTable extends Migration
{
    public function up()
    {
        Schema::table('claims', function ($table) {
            $table->boolean('vague_denial')->after('legal')->default(0);
            $table->boolean('clear_liability')->after('vague_denial')->default(0);
        });
    }

    public function down()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropColumn(['vague_denial', 'clear_liability']);
        });
    }
}
