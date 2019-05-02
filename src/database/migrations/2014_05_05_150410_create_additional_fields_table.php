<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionalFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionalfields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('displayName');
            $table->string('name');
            $table->string('type');
            $table->string('required')->default('true');
            $table->string('after');
            $table->string('visibilityToClient')->default('true');
            $table->string('cubsAttribute');
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
        Schema::drop('additionalfields');
    }
}
