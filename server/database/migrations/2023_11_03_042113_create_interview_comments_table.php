<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewer_comment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('del_flag')->default(false);
            $table->unsignedInteger('interviewer_id')->unsigned();
            $table->text('comment');
            $table->tinyInteger('rating')->nullable()->default(1);
            $table->foreign('interviewer_id')->references('id')->on('interviewer')->onUpdate('cascade');
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
        Schema::dropIfExists('interview_comment');
    }
}
