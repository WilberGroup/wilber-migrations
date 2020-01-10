<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientNameColumnToAddInfoTable extends Migration
{
    public function up()
    {
        Schema::table('add_info', function (Blueprint $table) {
            $table->string('client_name')->after('has_docs')->nullable();
            $table->longText('notes')->after('client_name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('add_info', function (Blueprint $table) {
            $table->dropColumn(['client_name', 'notes']);
        });
    }
}
