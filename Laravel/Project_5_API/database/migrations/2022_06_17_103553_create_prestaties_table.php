<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestatiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestaties', function (Blueprint $table) {
            $table->id();
            $table->date('datum',)->nullable();;
            $table->time('time_start',)->nullable();;
            $table->time('time_stop',)->nullable();;
            $table->integer('user_id')->nullable();
            $table->integer('oefening_id')->nullable();
            $table->integer('aantal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestaties');
    }
}
