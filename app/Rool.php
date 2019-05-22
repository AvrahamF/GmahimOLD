<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rool extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User', 'user_by', 'id');
  }
}
