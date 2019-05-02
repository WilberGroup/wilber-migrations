<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClaimsavailableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claimsavailable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cs_id')->nullable();
            $table->string('cubs_number')->nullable();
            $table->string('client_code')->nullable();
            $table->string('client_claim_number')->nullable();
            $table->string('lr_number')->nullable();
            $table->string('secondary_ref_number')->nullable();
            $table->string('loss_location')->nullable();
            $table->date('date_of_loss')->nullable();
            $table->string('claimant_1')->nullable();
            $table->string('claimant_2')->nullable();
            $table->string('insured_name')->nullable();
            $table->string('type');
            $table->string('desk', 5)->nullable();
            $table->string('packet_number', 10)->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('cubs_number');
            $table->index('client_code');
            $table->index('client_claim_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('claimsavailable');
    }
}
