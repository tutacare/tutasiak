<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('academic_year_id', 6);
            $table->integer('program_study_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('study_id')->unsigned();
            $table->string('class_room', 10);
            $table->integer('lecturer_id')->unsigned();
            $table->integer('day_id')->unsigned();
            $table->time('start_time');
            $table->time('finish_time');
            $table->date('date_midterm_exam');
            $table->time('start_midterm_exam_time');
            $table->time('finish_midterm_exam_time');
            $table->string('midterm_exam_room', 10);
            $table->date('date_final_exam');
            $table->time('start_final_exam_time');
            $table->time('finish_final_exam_time');
            $table->string('final_exam_room', 10);
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
        Schema::drop('schedules');
    }
}
