<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHealthCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthchecks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order')->nullable();
            $table->string('name')->unique();
            $table->string('type');
            $table->string('status');
            $table->string('description')->nullable();
            $table->longText('payload')->nullable();
            $table->integer('timeout')->nullable();
            $table->timestamp('last_run_at')->nullable();
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
        Schema::drop('healthchecks');
    }
}
