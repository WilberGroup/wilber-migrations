<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLegalNamesClientcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_name_clientcode', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legal_name_id')->unsigned();
            $table->integer('clientcode_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('legal_name_clientcode');
    }
}
