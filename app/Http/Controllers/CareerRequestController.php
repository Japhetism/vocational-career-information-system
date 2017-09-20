<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestCareer;
use\App\Http\Controllers\PersonalityController;

class CareerRequestController extends Controller
{
    //

    protected $redirectTo = '/home';
    private $personalities;

    
    public function __construct(PersonalityController $personalities)
    {
        $this->middleware('auth');
        $this->personalities = $personalities;
    }

    
    public function index(){
        $personalities = $this->personalities->get();
        return view('specificPages.request', compact('personalities'));
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'description' => 'required|text|max:1000',
        ]);
    }

    protected function create(){
        //check if its our form
        if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create setting'
            ) );
        }
 
        $name = Input::get( 'name' );
        $description = Input::get( 'description' );
 
        //.....
        //validate data
        //and then store it in DB
        //.....
 
        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
 
        return Response::json( $response );
    }

    public function store(Request $request){
       
    }

}
