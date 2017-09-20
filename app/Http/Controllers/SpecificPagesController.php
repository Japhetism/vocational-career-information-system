<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PersonalityController;

class SpecificPagesController extends Controller
{
    //

    private $personalities;

    public function __construct(PersonalityController $personalities)
    {
        $this->middleware('auth');
        $this->personalities = $personalities;
    }
    
    public function getSuggestion(){
        $personalities = $this->personalities->get();
        return view('specificPages.suggestion', compact('personalities'));
    }

    public function getFeedback(){
        $personalities = $this->personalities->get();
        return view('specificPages.feedback', compact('personalities'));
    }

    public function getSearch(){
        $personalities = $this->personalities->get();
        return view('specificPages.search', compact('personalities'));
    }

    public function getPersonality($id){
        $personality = $this->personalities->getPersonality($id);
        $personalities = $this->personalities->get();
        if(empty($personality)){
            return redirect('/home');
        }
        return view('specificPages.personality', compact('personality', 'personalities'));
    }
    
}
