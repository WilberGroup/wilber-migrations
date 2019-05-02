<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetricsArchiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metrics_archive', function (Blueprint $table) {
            $table->increments('id');
            $table->date('report_date')->unique();
            $table->float('baseline');
            $table->binary('client_claim_equiv_table');
            $table->integer('daily_hour_goal');
            $table->integer('daily_claim_equiv_goal');
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
        Schema::drop('metrics_archive');
    }
}
