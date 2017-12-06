<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Program;

class ProgramsController extends Controller
{
  function index(){
    $programs = Program::paginate(6);
    return view('programs.index')->with('programs', $programs);
  }

  function show($id){
    if (Auth::check()) {
      $program = Program::find($id);
      $pcheck = Program::find($id);
      $user = $program->user;
      return view('programs.show')->with([
        'program' => $program,
        'user' => $user,
        'pcheck' => $pcheck
      ]);
    }
    else
      return redirect()->back()->with('alert', 'You need to login first');
  }
}
