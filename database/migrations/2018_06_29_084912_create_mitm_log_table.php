<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitmLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitm_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mitm_start_id');
            $table->string('type');
            $table->text('message');
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
        Schema::dropIfExists('mitm_log');
    }
}
