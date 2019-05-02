<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFastloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fastloads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('reportingParty')->nullable();
            $table->string('reportingPartyPhone')->nullable();

            $table->string('clientId')->nullable();
            $table->string('companyName')->nullable();
            $table->string('clientContact')->nullable();
            $table->string('claimNumber')->nullable();

            $table->string('lossCity', 100)->nullable();
            $table->string('lossState', 2)->nullable();
            $table->date('lossDate')->nullable();

            $table->decimal('subroAmount', 12, 2)->default(0);

            $table->string('insuredName', 100)->nullable();

            $table->string('c1Name', 100)->nullable();
            $table->string('c1HomePhone')->nullable();
            $table->string('c1Address1', 100)->nullable();
            $table->string('c1City', 100)->nullable();
            $table->string('c1State', 2)->nullable();
            $table->string('c1Zip', 12)->nullable();

            $table->string('c2Name')->nullable();
            $table->string('c2HomePhone')->nullable();
            $table->string('c2Address1', 100)->nullable();
            $table->string('c2City', 100)->nullable();
            $table->string('c2State', 2)->nullable();
            $table->string('c2Zip', 12)->nullable();

            $table->boolean('clientConfirmed')->default(0);
            $table->text('notes')->nullable();

            $table->timestamp('claimed_at')->nullable();
            $table->timestamp('client_contacted_at')->nullable();
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
        Schema::drop('fastloads');
    }
}
