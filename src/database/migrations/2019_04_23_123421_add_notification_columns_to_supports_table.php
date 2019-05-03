<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotificationColumnsToSupportsTable extends Migration
{
    public function up()
    {
        Schema::table('supports', function (Blueprint $table) {
            $table->boolean('suppress_default_notifications')->default(0)->after('balance_increase');
        });
    }

    public function down()
    {
        Schema::table('supports', function (Blueprint $table) {
            $table->dropColumn('suppress_default_notifications');
        });
    }
}
