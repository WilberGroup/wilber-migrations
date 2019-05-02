<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddInsuranceAddress2Fields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->string('c1InsuranceAddress2', 100)->after('c1InsuranceAddress')->nullable();
            $table->string('c2InsuranceAddress2', 100)->after('c2InsuranceAddress')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropColumn(['c1InsuranceAddress2', 'c2InsuranceAddress2']);
        });
    }
}
