<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramsController extends Controller
{
    function index(){
      $programs = Program::paginate(5);
      return view('programs.index')->with('programs', $programs);
    }

    function show($id){
      $program = Program::find($id);
      $pcheck = Program::find($id);
      $user = $program->user;
      return view('programs.show')->with([
        'program' => $program,
        'user' => $user,
        'pcheck' => $pcheck
      ]);
    }
}
