<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  public function programStudy()
  {
    return $this->belongsTo('App\ProgramStudy');
  }

  public function faculty()
  {
    return $this->belongsTo('App\Faculty', 'faculty_code', 'faculty_code');
  }

  public function study()
  {
    return $this->belongsTo('App\Study');
  }
}
