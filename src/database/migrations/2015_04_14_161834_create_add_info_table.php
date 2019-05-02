<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 15)->default('info');
            $table->string('creator', 60)->nullable();
            $table->string('last_name', 60)->nullable();
            $table->string('claim_number', 60)->nullable();
            $table->string('additional_ref_number')->nullable();
            $table->text('description');
            $table->boolean('has_docs')->default(0);
            $table->timestamp('approved_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('add_info');
    }
}
