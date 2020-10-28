<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_claims', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned()->index();
            $table->string('dataSource', 100)->nullable();
            $table->string('clientId');
            $table->string('claimNumber')->nullable();
            $table->string('clientContact')->nullable();
            $table->string('clientEmail', 100)->nullable();
            $table->string('clientPhone')->nullable();
            $table->string('clientFax')->nullable();
            $table->string('clientLegalName')->nullable();
            $table->string('creator')->nullable();
            $table->text('clientSystem')->nullable();
            $table->date('lossDate')->nullable();
            $table->string('lossCity', 100)->nullable();
            $table->string('lossState', 2)->nullable();
            $table->string('usaaLRNumber')->nullable();
            $table->string('additionalReferenceNumber')->nullable();
            $table->decimal('materialDamageAmount', 12, 2)->default(0);
            $table->decimal('materialDamageTrailerAmount', 12, 2)->default(0);
            $table->decimal('comprehensiveAmount', 12, 2)->default(0);
            $table->decimal('comprehensiveTrailerAmount', 12, 2)->default(0);
            $table->decimal('rentalAmount', 12, 2)->default(0);
            $table->decimal('towingAmount', 12, 2)->default(0);
            $table->decimal('medPipAmount', 12, 2)->default(0);
            $table->decimal('injuryAmount', 12, 2)->default(0);
            $table->decimal('physicalDamageAmount', 12, 2)->default(0);
            $table->decimal('unused1Amount', 12, 2)->default(0);
            $table->decimal('unused2Amount', 12, 2)->default(0);
            $table->decimal('otherAmount', 12, 2)->default(0);
            $table->decimal('deductibleAmount', 12, 2)->default(0);
            $table->decimal('subroAmount', 12, 2)->default(0);
            $table->decimal('biReserveAmount', 12, 2)->default(0);
            $table->decimal('pdReserveAmount', 12, 2)->default(0);
            $table->string('defaultRef')->nullable();
            $table->string('materialDamageAmountRef')->nullable();
            $table->string('materialDamageTrailerAmountRef')->nullable();
            $table->string('comprehensiveAmountRef')->nullable();
            $table->string('comprehensiveTrailerAmountRef')->nullable();
            $table->string('rentalAmountRef')->nullable();
            $table->string('towingAmountRef')->nullable();
            $table->string('medPipAmountRef')->nullable();
            $table->string('injuryAmountRef')->nullable();
            $table->string('physicalDamageAmountRef')->nullable();
            $table->string('unused1AmountRef')->nullable();
            $table->string('unused2AmountRef')->nullable();
            $table->string('otherAmountRef')->nullable();
            $table->boolean('deductibleWaived')->default(0);
            $table->boolean('balanceFinal')->default(0);
            $table->boolean('Auto')->default(0);
            $table->boolean('Property')->default(0);
            $table->boolean('AttorneyRep')->default(0);
            $table->boolean('Government')->default(0);
            $table->boolean('CommercialEntity')->default(0);
            $table->boolean('Criminal')->default(0);
            $table->boolean('BondClaim')->default(0);
            $table->boolean('Contract')->default(0);
            $table->boolean('clearlyNotCertFlag')->default(0);
            $table->boolean('restitutionFlag')->default(0);
            $table->boolean('IceFlag')->default(0);
            $table->boolean('spanishFlag')->default(0);
            $table->boolean('arbitrationFlag')->default(0);
            $table->boolean('personalInjury')->default(0);
            $table->boolean('fdcpa')->default(0);
            $table->boolean('fastload')->default(0);
            $table->boolean('cover_page')->default(0);
            $table->boolean('insured_letter')->default(0);
            $table->boolean('priority')->default(0);
            $table->boolean('Renter')->default(0);
            $table->boolean('assets')->default(0);
            $table->boolean('legal')->default(0);
            $table->boolean('vague_denial')->default(0);
            $table->boolean('clear_liability')->default(0);
            $table->boolean('is_packet')->nullable();
            $table->text('lossDescription')->nullable();
            $table->text('macros')->nullable();
            $table->string('insuredName', 100)->nullable();
            $table->string('insuredAttention', 100)->nullable();
            $table->string('insuredAddress')->nullable();
            $table->string('insuredCity', 100)->nullable();
            $table->string('insuredState', 2)->nullable();
            $table->string('insuredZip', 12)->nullable();
            $table->string('insuredPhone')->nullable();
            $table->string('insuredEmail', 100)->nullable();
            $table->string('insuredPolicyType', 100)->nullable(); // is this correct? is it insured policy type or just policy type
            $table->string('insuredPolicyNumber', 100)->nullable();
            $table->string('insuredPolicyState', 100)->nullable();
            $table->string('insuredAttorneyName', 100)->nullable();
            $table->string('insuredAttorneyAttn', 100)->nullable();
            $table->string('insuredAttorneyAddress1', 100)->nullable();
            $table->string('insuredAttorneyAddress2', 100)->nullable();
            $table->string('insuredAttorneyCity', 100)->nullable();
            $table->string('insuredAttorneyState', 2)->nullable();
            $table->string('insuredAttorneyZip', 12)->nullable();
            $table->string('insuredAttorneyPhone', 25)->nullable();
            $table->string('insuredAttorneyFax', 25)->nullable();
            $table->string('insuredVehYear')->nullable();
            $table->string('insuredVehMake')->nullable();
            $table->string('insuredVehModel')->nullable();
            $table->string('insuredVehVIN')->nullable();
            $table->string('claimantVehYear')->nullable();
            $table->string('claimantVehMake')->nullable();
            $table->string('claimantVehModel')->nullable();
            $table->string('claimantVehVIN')->nullable();
            $table->string('claimantVehLicensePlateNumber')->nullable();
            $table->string('claimantVehLicensePlateState', 2)->nullable();
            $table->date('rental_checkout')->nullable();
            $table->date('rental_checkin')->nullable();
            $table->string('c1Name', 100)->nullable();
            $table->string('c1Address1', 100)->nullable();
            $table->string('c1Address2', 100)->nullable();
            $table->string('c1City', 100)->nullable();
            $table->string('c1State', 2)->nullable();
            $table->string('c1Zip', 12)->nullable();
            $table->date('c1DOB')->nullable();
            $table->string('c1SSN', 11)->nullable();
            $table->string('c1DriversLicenseNumber', 50)->nullable();
            $table->string('c1DriversLicenseState', 2)->nullable();
            $table->string('c1HomePhone')->nullable();
            $table->string('c1CellPhone')->nullable();
            $table->string('c1Alt1', 20)->nullable();
            $table->string('c1Alt2', 20)->nullable();
            $table->string('c1Email', 100)->nullable();
            $table->boolean('c1LicenseRevoked')->default(0);
            $table->string('c1EmployerName', 100)->nullable();
            $table->string('c1EmployerAddress1', 100)->nullable();
            $table->string('c1EmployerAddress2', 100)->nullable();
            $table->string('c1EmployerCity', 100)->nullable();
            $table->string('c1EmployerState', 2)->nullable();
            $table->string('c1EmployerZip', 12)->nullable();
            $table->string('c1EmployerPhone')->nullable();
            $table->string('c1InsuranceName', 100)->nullable();
            $table->string('c1PolicyNumber', 100)->nullable();
            $table->string('c1InsuranceAdjuster')->nullable();
            $table->string('c1InsuranceEmail', 100)->nullable();
            $table->string('c1InsuranceClaimNumber')->nullable();
            $table->string('c1InsuranceAddress')->nullable();
            $table->string('c1InsuranceAddress2', 100)->nullable();
            $table->string('c1InsuranceCity', 100)->nullable();
            $table->string('c1InsuranceState', 2)->nullable();
            $table->string('c1InsuranceZip', 12)->nullable();
            $table->string('c1InsurancePhone')->nullable();
            $table->string('c1InsuranceFax', 30)->nullable();
            $table->string('c1AttorneyName', 100)->nullable();
            $table->string('c1AttorneyAddress1', 100)->nullable();
            $table->string('c1AttorneyAddress2', 100)->nullable();
            $table->string('c1AttorneyCity', 100)->nullable();
            $table->string('c1AttorneyState', 2)->nullable();
            $table->string('c1AttorneyZip', 12)->nullable();
            $table->string('c1AttorneyPhone')->nullable();
            $table->string('c1AttorneyFax', 30)->nullable();
            $table->string('c2Name', 100)->nullable();
            $table->string('c2Address1', 100)->nullable();
            $table->string('c2Address2', 100)->nullable();
            $table->string('c2City', 100)->nullable();
            $table->string('c2State', 2)->nullable();
            $table->string('c2Zip', 12)->nullable();
            $table->date('c2DOB')->nullable();
            $table->string('c2SSN', 11)->nullable();
            $table->string('c2DriversLicenseNumber', 50)->nullable();
            $table->string('c2DriversLicenseState', 2)->nullable();
            $table->string('c2HomePhone')->nullable();
            $table->string('c2CellPhone')->nullable();
            $table->string('c2Alt1', 20)->nullable();
            $table->string('c2Alt2', 20)->nullable();
            $table->string('c2Email', 100)->nullable();
            $table->boolean('c2LicenseRevoked')->default(0);
            $table->string('c2EmployerName', 100)->nullable();
            $table->string('c2EmployerAddress1', 100)->nullable();
            $table->string('c2EmployerAddress2', 100)->nullable();
            $table->string('c2EmployerCity', 100)->nullable();
            $table->string('c2EmployerState', 2)->nullable();
            $table->string('c2EmployerZip', 12)->nullable();
            $table->string('c2EmployerPhone')->nullable();
            $table->string('c2InsuranceName', 100)->nullable();
            $table->string('c2PolicyNumber', 100)->nullable();
            $table->string('c2InsuranceAdjuster')->nullable();
            $table->string('c2InsuranceEmail', 100)->nullable();
            $table->string('c2InsuranceClaimNumber')->nullable();
            $table->string('c2InsuranceAddress')->nullable();
            $table->string('c2InsuranceAddress2', 100)->nullable();
            $table->string('c2InsuranceCity', 100)->nullable();
            $table->string('c2InsuranceState', 2)->nullable();
            $table->string('c2InsuranceZip', 12)->nullable();
            $table->string('c2InsurancePhone')->nullable();
            $table->string('c2InsuranceFax', 30)->nullable();
            $table->string('c2AttorneyName', 100)->nullable();
            $table->string('c2AttorneyAddress1', 100)->nullable();
            $table->string('c2AttorneyAddress2', 100)->nullable();
            $table->string('c2AttorneyCity', 100)->nullable();
            $table->string('c2AttorneyState', 2)->nullable();
            $table->string('c2AttorneyZip', 12)->nullable();
            $table->string('c2AttorneyPhone')->nullable();
            $table->string('c2AttorneyFax', 30)->nullable();
            // Prosecuting Attorney
            $table->string('prosAttorneyName', 100)->nullable();
            $table->string('prosAttorneyPhone', 25)->nullable();
            // DA Office
            $table->string('daOffice', 100)->nullable();
            $table->string('daAttention', 100)->nullable();
            $table->string('daAddress1', 100)->nullable();
            $table->string('daAddress2', 100)->nullable();
            $table->string('daCity', 40)->nullable();
            $table->string('daState', 35)->nullable();
            $table->string('daZip', 16)->nullable();
            $table->string('caseNumber')->nullable();
            $table->string('daPhone', 25)->nullable();
            // Defense Attorney
            $table->string('defAttorneyName', 100)->nullable();
            $table->string('defAttorneyPhone', 25)->nullable();
            // Police Department
            $table->string('pdName', 100)->nullable();
            $table->string('pdAttention')->nullable();
            $table->string('pdAddress1', 100)->nullable();
            $table->string('pdAddress2', 100)->nullable();
            $table->string('pdCity', 40)->nullable();
            $table->string('pdState', 35)->nullable();
            $table->string('pdZip', 16)->nullable();
            $table->string('crashNumber')->nullable();
            $table->string('pdPhone', 25)->nullable();
            $table->string('pdFax', 25)->nullable();
            // Court
            $table->string('courtName', 100)->nullable();
            $table->string('courtAddress1', 100)->nullable();
            $table->string('courtAddress2', 100)->nullable();
            $table->string('courtCity', 40)->nullable();
            $table->string('courtState', 35)->nullable();
            $table->string('courtZip', 16)->nullable();
            $table->string('courtContact')->nullable();
            $table->string('courtPhone', 25)->nullable();
            $table->string('respondentArbDocketNumber', 100)->nullable();
            $table->date('respondentArbMaterialDueDate')->nullable();
            $table->date('respondentArbHearingDate')->nullable();
            $table->decimal('respondentArbAmount', 12, 2)->nullable();
            $table->string('clientLineOfBusiness', 100)->nullable();
            $table->string('lossType', 100)->nullable();
            $table->string('damageType', 100)->nullable();
            $table->string('debtorType', 100)->nullable();
            $table->text('region')->nullable();
            $table->boolean('docsUploaded')->default(0);
            $table->string('docs_location')->nullable();
            $table->string('IPAddress', 100)->nullable();
            $table->integer('time_in_claim')->default(0);
            $table->date('lastPaymentDate')->nullable();
            $table->dateTime('completed_at')->nullable();
            $table->dateTime('exportDate')->nullable();

            $table->date('flip_placement_at')->nullable();
            $table->dateTime('redacted_at')->nullable();
            $table->text('deleted_notes')->nullable();
            $table->text('deleted_reason')->nullable();
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
        Schema::dropIfExists('training_claims');
    }
}
