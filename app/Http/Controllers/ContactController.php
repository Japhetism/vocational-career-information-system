<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\SendMail;

class ContactController extends Controller
{
    //

    /*public function sendMail(Request $request){
       Mail::send(['text'=>'mail'],['name', 'VCIS'],function($message) use($request){
            $message->to($request->email, $request->name)->subject('Re:'.$request->subject);
            $message->from('admin@vcis.com', 'Vocational Career Information System');
        });
        Session::flash('contactResponse', 'Successfully submitted');
        return redirect('/contact');
    }*/

    public function sendMail(Request $request){
        Mail::send(new sendMail());
        Session::flash('contactResponse', 'Successfully submitted');
        return redirect('/contact');
    }
}
