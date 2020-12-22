<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\State;

class StateController extends Controller
{
    public function readState(){
        $state = State::where('id',1)->first();
        return response()->json(['status' => 200,'state_right_now' => $state->state,'message' => 'everythings good']);
    }

    public function offState(){
        $state = State::where('id',1)->first();
        $state->state = 0;
        $state->save();
        return response()->json("0");
    }

    public function onState(){
        $state = State::where('id',1)->first();
        $state->state = 1;
        $state->save();
        return response()->json("1");
    }
}
