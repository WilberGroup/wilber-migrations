<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddC1C2Alt1AndAlt2PhoneToClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->string('c1Alt2', 20)->after('c1CellPhone')->nullable();
            $table->string('c1Alt1', 20)->after('c1CellPhone')->nullable();
            $table->string('c2Alt2', 20)->after('c2CellPhone')->nullable();
            $table->string('c2Alt1', 20)->after('c2CellPhone')->nullable();
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
            $table->dropColumn(['c1Alt1', 'c1Alt2', 'c2Alt1', 'c2Alt2']);
        });
    }
}
