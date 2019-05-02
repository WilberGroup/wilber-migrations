<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatorIdColumnToFastloadsTable extends Migration
{
    public function up()
    {
        Schema::table('fastloads', function (Blueprint $table) {
            $table->integer('creator_id')->after('client_contacted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('fastloads', function (Blueprint $table) {
            $table->dropColumn(['creator_id']);
        });
    }
}
