<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Program;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function() {
    $user = User::find(1);
    foreach ($user->following_program as $key) {
      echo $key.'<br>';
    }
});

Route::get('test1', function() {
  $program = Program::find(1);
  foreach ($program->following_user as $key) {
    echo $key->fullname.'<br>';
  }
});
