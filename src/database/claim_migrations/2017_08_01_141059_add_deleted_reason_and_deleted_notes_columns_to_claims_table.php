<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedReasonAndDeletedNotesColumnsToClaimsTable extends Migration
{
    public function up()
    {
        Schema::table('claims', function ($table) {
            $table->text('deleted_notes')->after('updated_at')->nullable();
            $table->text('deleted_reason')->after('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropColumn(['deleted_reason', 'deleted_notes']);
        });
    }
}
