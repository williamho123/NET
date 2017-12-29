<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('internals', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('registration_status');
            $table->boolean('registration_ended');
            $table->date('registration_open_date');
            $table->date('tournament_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::dropIfExists('internals');
    }
}
