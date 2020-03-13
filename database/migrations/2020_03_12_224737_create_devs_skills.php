<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevsSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devs_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dev_id');
            $table->foreign('dev_id')->references('id')->on('devs');
            $table->foreignId('skill_id');
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devs_skills');
    }
}
