<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  public function faculty()
  {
    return $this->belongsTo('App\Faculty', 'faculty_code', 'faculty_code');
  }

  public function study()
  {
    return $this->belongsTo('App\Study');
  }

  public function programStudy()
  {
    return $this->belongsTo('App\ProgramStudy', 'program_study_id', 'id');
  }

  public function academicRegistration()
  {
    return $this->belongsTo('App\AcademicRegistration', 'academic_registration_id', 'id');
  }

  public function religion()
  {
    return $this->belongsTo('App\Religion');
  }
}
