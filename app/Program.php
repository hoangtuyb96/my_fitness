<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = "programs";

    public function user(){
      return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function schedule(){
      return $this->hasMany('App\Schedule', 'program_id', 'id');
    }

    public function my_program(){
      return $this->hasMany('App\MyProgram', 'program_id', 'id');
    }
}
