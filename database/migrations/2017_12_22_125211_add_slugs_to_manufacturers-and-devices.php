<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugsToManufacturersAndDevices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('devices', function ($table) {
            $table->string('slug');
            $table->index('slug');
        });

        Schema::table('manufacturers', function ($table) {
            $table->string('slug');
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('devices', function ($table) {
            $table->dropColumn('slug');
        });

        Schema::table('manufacturers', function ($table) {
            $table->dropColumn('slug');
        });
    }
}
