<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
  public function faculty()
  {
    return $this->belongsTo('App\Faculty', 'faculty_code', 'faculty_code');
  }

}
