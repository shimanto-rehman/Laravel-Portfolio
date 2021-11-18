<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
use Session;
class MailController extends Controller
{
    public function home( ){
        return view("pages.contact");
    }

    public function sendemail(Request $get){
        $this->validate($get ,[
           "email"=>"required",
           "subject"=>"required",
           "message"=>"required",
        ]);
        $email=$get->email;
        $subject=$get->subject;
        $message=$get->message;

        Mail::to($email)-> send(new SendEmail($subject, $message));
        Session::flash("success");
        return back();

    }
}
