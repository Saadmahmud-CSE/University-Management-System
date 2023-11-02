<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('session');
            $table->string('semester');
            $table->string('course_name');
            $table->string('course_code');
            $table->string('section_name');
            $table->string('course_teacher');
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
        Schema::dropIfExists('sections');
    }
};
// $table->unsignedBigInteger('session_id');
            // $table->foreign('session_id')->references('id')->on('sessions');
            // $table->integer('semester');
            // $table->unsignedBigInteger('course_id');
            // $table->foreign('course_id')->references('id')->on('courses');
