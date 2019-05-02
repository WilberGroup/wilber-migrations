<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cs_id')->nullable();
            $table->string('creator');
            $table->string('type'); // unknown file, file in cubs, file in cs
            $table->string('client_code')->nullable();
            $table->string('claim_number')->nullable();
            $table->string('cubs_number')->nullable();
            $table->boolean('balance_increase')->default(0);
            $table->text('additional_notes')->nullable();
            $table->integer('num_of_docs')->default(0);
            $table->string('desk', 5)->nullable();
            $table->timestamp('captured')->nullable();
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
        Schema::drop('supports');
    }
}
