<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PersonalityController;

class ProfileController extends Controller
{
    //

    private $personalities;

    public function __construct(PersonalityController $personalities)
    {
        $this->middleware('auth');
        $this->personalities = $personalities;
    }

     public function getProfile(){
        $personalities = $this->personalities->get();
        return view('specificPages.profile', compact('personalities'));
    }

    public function editProfile(){
        $personalities = $this->personalities->get();
        return view('specificPages.profileEdit', compact('personalities'));
    }



    public function updateProfile(ProfileUpdateRequest $data){
        $id = Auth::user()->id;
        $this->update($data, $id);
        Session::flash('updated', 'Profile Successfully Updated');
        return redirect('/profile');
    }

    private function update(ProfileUpdateRequest $data, $id){
        $user = User::find($id);
        $user -> update([
            'surname' => $data['surname'],
            'firstname' => $data['firstname'],
            'username' => $data['username'],
            'telephone' => $data['telephone'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
