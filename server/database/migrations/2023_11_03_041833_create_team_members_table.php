<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_member', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('del_flag')->default(false);
            $table->unsignedInteger('member_id');
            $table->unsignedInteger('team_id');
            $table->unsignedInteger('team_member_role');
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('modified_by')->nullable();
            $table->foreign('member_id')->references('id')->on('member')->onUpdate('cascade');
            $table->foreign('team_id')->references('id')->on('team')->onUpdate('cascade');
            $table->foreign('team_member_role')->references('id')->on('configuration')->onUpdate('cascade');
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
        Schema::dropIfExists('team_member');
    }
}
