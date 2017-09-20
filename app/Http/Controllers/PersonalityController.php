<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personality;

class PersonalityController extends Controller
{
    //

    protected function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'description' => 'required|text|max:1000',
        ]);
    }

    protected function create(Request $request){
       Personality::create($request->all());
    }

    public function get(){
        return Personality::get(['id', 'name', 'description']);
    }

    public function getPersonality($id){
        return Personality::find($id);
    }
}
