<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitmLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitm_logins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mitm_start_id');
            $table->ipAddress('attacker_ip');
            $table->string('session_id');
            $table->string('method');
            $table->string('username', 1024);
            $table->string('password', 1024)->nullable();
            $table->text('public_key')->nullable();
            $table->integer('number_of_attempts');
            $table->timestamp('login_at', 3);
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
        Schema::dropIfExists('mitm_logins');
    }
}
