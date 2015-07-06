<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('program_study_id')->unsigned();
            $table->string('course_code', 10)->unique();
            $table->string('course_name', 100);
            $table->string('semester', 1);
            $table->string('credits', 2);
            $table->string('faculty_code', 10);
            $table->integer('study_id')->unsigned();
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
        Schema::drop('courses');
    }
}
