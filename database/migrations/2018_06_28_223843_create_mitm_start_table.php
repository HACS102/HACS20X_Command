<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitmStartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitm_start', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_name');
            $table->string('group_id');
            $table->text('host_interfaces');
            $table->ipAddress('mitm_listen_ip');
            $table->string('mitm_port');
            $table->boolean('auto_access');
            $table->text('auto_access_details');
            $table->string('container_id');
            $table->string('container_ip');
            $table->string('container_mount');
            $table->dateTime('started_at', 3);
            $table->timestamp('created_at', 3)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitm_start');
    }
}
