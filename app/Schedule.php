<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  public function academicRegistration()
  {
    return $this->belongsTo('App\AcademicRegistration', 'academic_year_id', 'id');
  }

  public function programStudy()
  {
    return $this->belongsTo('App\ProgramStudy', 'program_study_id', 'id');
  }

  public function course()
  {
    return $this->belongsTo('App\Course');
  }

  public function study()
  {
    return $this->belongsTo('App\Study');
  }

  public function lecturer()
  {
    return $this->belongsTo('App\Lecturer');
  }

  public function day()
  {
    return $this->belongsTo('App\Day');
  }
}
