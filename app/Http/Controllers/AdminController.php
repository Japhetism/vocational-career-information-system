<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personality;

class AdminController extends Controller
{
    //
    public function index(){
        $personalities = Personality::latest('updated_at')->simplePaginate(2);
        return view('admin.index', compact('personalities'));
    }
}
