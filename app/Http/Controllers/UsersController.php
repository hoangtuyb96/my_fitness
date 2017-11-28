<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    function getLogin(){
      return view('users.login');
    }

    function postLogin(Request $request){
      $this->validate($request,[
        'username'=>'required',
        'password'=>'required']);

      if(Auth::attempt(['username'=>$request->username,
        'password'=>$request->password]))
      {
        return redirect('/');
      }
      else
      {
        return redirect('login')->with('alert','Login fail. Please try again');
      }
    }
}
