<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Program;

class UsersController extends Controller {

    function getLogin() {
        return view('users.login');
    }

    function postLogin(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required']);
        if (Auth::attempt(['username' => $request->username,
                    'password' => $request->password])) {
            return redirect("/{$request->username}/my_page");
        } else {
            return redirect('login')->with('alert', 'Login fail. Please try again');
        }
    }

    function getSignup() {
        return view('users.signup');
    }

    function postSignup(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'fullname' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password']);
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->fullname = $request->fullname;
        $user->password = bcrypt($request->password);
        $user->purpose = $request->purpose;
        $user->save();
        Auth::login($user);
        return redirect('')->with('alert', 'Signup successfully.');
    }

    function logout() {
        Auth::logout();
        return redirect('');
    }

    function profile($username) {
        if (Auth::check()) {
            $user = User::where('username', $username)->first();
            return view('users.profile')->with('user', $user);
        }
        return redirect('');
    }

    function postUpdate(Request $request, $username) {
        if (Auth::check()) {
            $user = User::where('username', $username)->first();
            $user->fullname = $request->fullname;
            $user->birthday = $request->birthday;
            $user->weight = $request->weight;
            $user->height = $request->height;
            $user->job = $request->job;
            $user->address = $request->address;
            $user->purpose = $request->purpose;
            $user->save();
            return redirect()->back()->with('alert', 'Update profile successfully.');
        }
        return redirect('');
    }

    function getMyPage($username) {
        if (Auth::check()) {
            $user = User::where('username', $username)->first();
            $following_program = $user->following_program;
            return view('users.my_page')->with([
                        'following_program' => $following_program,
                        'user' => $user
            ]);
        }
        return redirect('');
    }

    function getListProgram() {
        if (Auth::check()) {
            return view('users.my_list_program');
        }
        return redirect('');
    }

    function postListProgram(Request $request) {
        if (Auth::check()) {
            $height = $request->height;
            $weigh = $request->weigh;
            $age = $request->age;
            if ($age <= 40 && ($weigh >= ($height - 90))) {
                $programs = Program::where('level', 3)->paginate(12);
            } else {
                if ($age > 50) {
                    $programs = Program::where('level', 1)->paginate(12);
                } else {
                    $programs = Program::where('level', 2)->paginate(12);
                }
            }
            return view('users.my_list_program')->with('programs', $programs);
        }
        return redirect('');
    }

}
