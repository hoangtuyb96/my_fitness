<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyProgram;

class MyProgramsController extends Controller {

    function create($program_id, $user_id) {
        if (Auth::check()) {
            $relation = Myprogram::where([
                            ['program_id', '=', $program_id],
                            ['user_id', '=', $user_id],
                    ])->first();

            if ($relation == null) {
                $relation = new MyProgram;
                $relation->program_id = $program_id;
                $relation->user_id = $user_id;
                $relation->save();

                return redirect()->back()->with('alert', 'Participate successfully');
            } else {
                $relation->delete();

                return redirect()->back()->with('alert', 'Cancel participating successfully');
            }
        }
        return redirect('');
    }

}
