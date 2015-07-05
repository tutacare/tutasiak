<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nim', 20);
          $table->string('name');
          $table->string('classroom', 5);
          $table->string('faculty_code', 10);
          $table->string('study_code', 11);
          $table->integer('program_study_id')->unsigned();
          $table->integer('academic_registration_id')->unsigned();
          $table->string('email')->unique();
          $table->string('password', 60);
          $table->integer('religion_id')->unsigned();
          $table->string('address', 255);
          $table->string('phone', 100);
          $table->string('comments', 255);
          $table->enum('active', ['Y', 'N']);
          $table->rememberToken();
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
        Schema::drop('students');
    }
}
