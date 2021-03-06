<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /*protected $redirectTo = '/home';*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function redirectPathAdmin()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/admin';
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);
        $user = Auth::user();
        $isAdmin = $user->isAdmin;
        Session::flash('registerSuccess', 'Welcome, We are glad to have you here!');
        if(!$isAdmin){
             return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
        }else{
            return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPathAdmin());
        }
       
    }
}
