<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckedinAndCheckedoutColumnsForClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->date('rental_checkout')->after('claimantVehLicensePlateState')->nullable();
            $table->date('rental_checkin')->after('claimantVehLicensePlateState')->nullable();
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
            $table->dropColumn(['rental_checkin', 'rental_checkout']);
        });
    }
}
