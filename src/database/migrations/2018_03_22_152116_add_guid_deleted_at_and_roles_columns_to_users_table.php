<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGuidDeletedAtAndRolesColumnsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('guid')->nullable()->after('id');

            $table->text('roles')->nullable()->after('guid');

            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['guid', 'deleted_at', 'roles']);
        });
    }
}
