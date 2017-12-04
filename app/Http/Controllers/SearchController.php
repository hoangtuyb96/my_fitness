<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SearchController extends Controller
{
    function postSearch(Request $request){
      $key = $request->search;
      $user = User::where('fullname','=',$key)->first();
      $programs = $user->program;
      return view('pages.search',[
        'programs' => $programs,
        'key' => $key 
      ]);
    }
}
