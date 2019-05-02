<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClaimsArchiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims_archive', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('dataSource', 100)->nullable();
            $table->string('clientId')->nullable();
            $table->string('claimNumber')->nullable();
            $table->string('clientContact')->nullable();
            $table->string('clientEmail', 100)->nullable();
            $table->string('creator')->nullable();
            $table->string('usaaLRNumber')->nullable();
            $table->string('additionalReferenceNumber')->nullable();
            $table->boolean('docsUploaded')->default(0);
            $table->integer('time_in_claim')->nullable();
            $table->date('flip_placement_at')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->dateTime('completed_at')->nullable();
            $table->dateTime('exportDate');
            $table->dateTime('redacted_at');
            $table->timestamp('archived_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('claims_archive');
    }
}
