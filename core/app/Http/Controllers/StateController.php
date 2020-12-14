<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\State;

class StateController extends Controller
{
    public function readState(){
        $state = State::where('id',1)->first();
        return response()->json(['status' => $state->state]);
    }
}
