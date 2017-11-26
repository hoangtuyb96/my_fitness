<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = "actions";

    public function schedule(){
      return $this->belongsTo('App\Schedule', 'schedule_id', 'id');
    }
}
