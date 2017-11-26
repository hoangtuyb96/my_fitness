<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedules";

    public function program(){
      return $this->belongsTo('App\Program', 'program_id', 'id');
    }

    public function action(){
      return $this->hasMany('App\Action', 'schedule_id', 'id');
    }
}
