<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('del_flag')->default(false);
            $table->string('username');
            $table->string('password');
            $table->string('fullname', 100);
            $table->boolean('is_male');
            $table->date('birthday')->nullable();
            $table->string('email', 100);
            $table->string('phone', 12)->nullable();
            $table->string('picture')->nullable()->default('avatar_default.jpg');
            $table->unsignedInteger('access_level');
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('modified_by')->nullable();
            $table->foreign('access_level')->references('id')->on('configuration')->onUpdate('cascade');
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
        Schema::dropIfExists('member');
    }
}
