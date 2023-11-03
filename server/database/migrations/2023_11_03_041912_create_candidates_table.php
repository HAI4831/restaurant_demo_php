<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('del_flag')->default(false);
            $table->string('name', 100);
            $table->boolean('is_male');
            $table->date('birthday')->nullable();
            $table->string('cv')->nullable()->default(null);
            $table->boolean('is_passed');
            $table->unsignedInteger('university_id');
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('modified_by')->nullable();
            $table->foreign('university_id')->references('id')->on('configuration')->onUpdate('cascade');
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
        Schema::dropIfExists('candidate');
    }
}
