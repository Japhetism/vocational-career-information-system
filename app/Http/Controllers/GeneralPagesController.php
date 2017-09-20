<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PersonalityController;
use Personality;

class GeneralPagesController extends Controller
{
    //

    private $personalities;

    public function __construct(){
        
    }

    public function getAbout(){
        $personalities = Personality::get();
        return view('generalPages.about', compact('personalities'));
    }

    public function getContact(){
        $personalities = Personalit::get();
        return view('generalPages.contact', compact('personalities'));
    }

    public function getTestInfo(){
        $personalities = Personality::get();
        return view('generalPages.testInfo', compact('personalities'));
    }
}
