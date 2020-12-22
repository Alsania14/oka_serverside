<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\State;

class StateController extends Controller
{
    public function readState(){
        $state = State::where('id',1)->first();
        return response($state->state);
    }

    public function offState(){
        $state = State::where('id',1)->first();
        $state->state = 0;
        return response(200);
    }

    public function onState(){
        $state = State::where('id',1)->first();
        $state->state = 1;
        return response(200);
    }
}
