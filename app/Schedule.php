<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  public function academicRegistration()
  {
    return $this->belongsTo('App\AcademicRegistration', 'id');
  }

  public function programStudy()
  {
    return $this->belongsTo('App\ProgramStudy', 'id');
  }

  public function course()
  {
    return $this->belongsTo('App\Course', 'id');
  }

  public function study()
  {
    return $this->belongsTo('App\Study', 'id');
  }

  public function lecturer()
  {
    return $this->belongsTo('App\Lecturer', 'id');
  }

  public function day()
  {
    return $this->belongsTo('App\Day', 'id');
  }
}
