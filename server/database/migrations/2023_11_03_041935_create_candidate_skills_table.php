<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('del_flag')->default(false);
            $table->unsignedInteger('candidate_id');
            $table->unsignedInteger('skill_id');
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('modified_by')->nullable();
            $table->foreign('candidate_id')->references('id')->on('candidate')->onUpdate('cascade');
            $table->foreign('skill_id')->references('id')->on('configuration')->onUpdate('cascade');
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
        Schema::dropIfExists('candidate_skill');
    }
}
