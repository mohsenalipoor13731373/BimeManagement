<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_bimes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->bigInteger('number')->unique();
            $table->bigInteger('codemeli')->unique();
            $table->unsignedBigInteger('bime_id');
            $table->bigInteger('tel');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('bime_id')
                ->references('id')
                ->on('bimes')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_bimes');
    }
}
