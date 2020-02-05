<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsPacketColumnToClaimsTable extends Migration
{
    public function up()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->boolean('is_packet')->after('clear_liability')->nullable();
        });
    }

    public function down()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropColumn(['is_packet']);
        });
    }
}
