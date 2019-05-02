<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionalfieldClientcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionalfield_clientcode', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('additionalfield_id')->unsigned()->index();
            $table->foreign('additionalfield_id')->references('id')->on('additionalfields')->onDelete('cascade');
            $table->integer('clientcode_id')->unsigned()->index();
            $table->foreign('clientcode_id')->references('id')->on('clientcodes')->onDelete('cascade');
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
        Schema::drop('additionalfield_clientcode');
    }
}
