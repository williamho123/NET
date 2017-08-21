<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_id_code')->unique();
            $table->string('password');
            $table->integer('registration_id')->unsigned();
            $table->boolean('accepted')->default(false);
            $table->boolean('paid')->default(false);
            $table->boolean('forms')->default(false);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('registration_id')->references('id')->on('registrations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::dropIfExists('teams');
    }
}
