<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddInfoMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_info_matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('claim_id')->unsigned();
            $table->integer('add_info_id')->unsigned();
            $table->string('matched_on');
            $table->boolean('is_deferred')->default(0);
            $table->timestamp('completed_at')->nullable()->default(null);

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
        Schema::drop('add_info_matches');
    }
}
