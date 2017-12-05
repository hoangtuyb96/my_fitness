<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramsController extends Controller
{
    function index(){
      $programs = Program::all()->take(20);
      return view('programs.index')->with('programs', $programs);
    }
}
