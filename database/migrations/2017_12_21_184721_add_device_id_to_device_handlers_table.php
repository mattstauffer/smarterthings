<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeviceIdToDeviceHandlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('device_handlers', function (Blueprint $table) {
            $table->integer('device_id')->unsigned();
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('device_handlers', function (Blueprint $table) {
            $table->dropForeign('device_handlers_device_id_foreign');
            $table->dropColumn('device_id');
        });
    }
}
