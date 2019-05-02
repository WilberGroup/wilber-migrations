<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedReasonDeletedNotesAndDeletedAtColumnsToClaimsArchiveTable extends Migration
{
    public function up()
    {
        Schema::table('claims_archive', function ($table) {
            $table->timestamp('deleted_at')->after('archived_at')->nullable();
            $table->text('deleted_notes')->after('archived_at')->nullable();
            $table->text('deleted_reason')->after('archived_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('claims_archive', function (Blueprint $table) {
            $table->dropColumn(['deleted_reason', 'deleted_notes', 'deleted_at']);
        });
    }
}
