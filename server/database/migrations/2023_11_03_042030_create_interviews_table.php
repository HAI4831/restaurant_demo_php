<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('del_flag')->default(false);
            $table->boolean('status')->default(true);
            $table->float('evaluation')->unsigned()->nullable()->default(0);
            $table->unsignedInteger('candidate_id');
            $table->unsignedInteger('position_id')->unsigned();
            $table->dateTime('date');
            $table->string('note')->nullable()->default(null);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('modified_by')->nullable();
            $table->foreign('candidate_id')->references('id')->on('candidate')->onUpdate('cascade');
            $table->foreign('position_id')->references('id')->on('configuration')->onUpdate('cascade');
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
        Schema::dropIfExists('interview');
    }
}
