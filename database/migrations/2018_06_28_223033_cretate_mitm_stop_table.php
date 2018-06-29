<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretateMitmStopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitm_stop', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mitm_start_id');
            $table->string('exit_type');
            $table->string('exit_details')->nullable();
            $table->dateTime('stopped_at', 3);
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
        Schema::dropIfExists('mitm_stop');
    }
}
