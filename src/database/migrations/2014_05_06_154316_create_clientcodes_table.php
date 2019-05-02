<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clientcode')->unique();
            $table->string('description', 150)->nullable();
            $table->integer('sla_days')->nullable();
            $table->text('load_notes')->nullable();
            $table->text('flags')->nullable();
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
        Schema::drop('clientcodes');
    }
}
