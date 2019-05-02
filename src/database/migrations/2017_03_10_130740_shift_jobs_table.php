<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShiftJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            //            $table->dropIndex('queue');
//            $table->dropIndex('reserved');
//            $table->dropIndex('reserved_at');
//            $table->dropColumn('reserved');
//            $table->index(['queue', 'reserved_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            //            $table->dropIndex(['queue', 'reserved_at']);
//            $table->tinyInteger('reserved')->unsigned()->nullable();
//            $table->index(['queue', 'reserved', 'reserved_at']);
        });
    }
}
