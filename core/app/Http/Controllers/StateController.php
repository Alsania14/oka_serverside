<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\State;

class StateController extends Controller
{
    public function readState(){
        $state = State::where('id',1)->first();
        return response()->json($state->state);
    }

    public function offState(){
        $state = State::where('id',1)->first();
        $state->state = 0;
        $state->save();
        return response()->json(['status' => 200,'change_state_to' => 0,'message' => 'everythings good']);
    }

    public function onState(){
        $state = State::where('id',1)->first();
        $state->state = 1;
        $state->save();
        return response()->json(['status' => 200,'change_state_to' => 1,'message' => 'everythings good']);
    }
}
