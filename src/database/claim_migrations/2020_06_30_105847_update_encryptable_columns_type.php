<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEncryptableColumnsType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->text('insuredName')->change();
            $table->text('insuredPolicyNumber')->change();
            $table->text('insuredVehVIN')->change();
            $table->text('claimantVehVIN')->change();
            $table->text('claimantVehLicensePlateNumber')->change();
            $table->text('c1DOB')->change();
            $table->text('c1SSN')->change();
            $table->text('c1DriversLicenseNumber')->change();
            $table->text('c1PolicyNumber')->change();
            $table->text('c2DOB')->change();
            $table->text('c2SSN')->change();
            $table->text('c2DriversLicenseNumber')->change();
            $table->text('c2PolicyNumber')->change();
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
            $table->string('insuredName', 100)->change();
            $table->string('insuredPolicyNumber', 100)->change();
            $table->string('insuredVehVIN', 191)->change();
            $table->string('claimantVehVIN', 191)->change();
            $table->string('claimantVehLicensePlateNumber', 191)->change();
            $table->date('c1DOB')->change();
            $table->string('c1SSN', 11)->change();
            $table->string('c1DriversLicenseNumber', 50)->change();
            $table->string('c1PolicyNumber', 100)->change();
            $table->date('c2DOB')->change();
            $table->string('c2SSN', 11)->change();
            $table->string('c2DriversLicenseNumber', 50)->change();
            $table->string('c2PolicyNumber', 100)->change();
        });
    }
}
