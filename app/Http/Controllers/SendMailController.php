<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Redirect;
session_start();
use Mail;

class SendMailController extends Controller
{
    public function send_mail(Request $request)
    {
        $to_name = "SHTP Training";
        $to_email = "kingkun007k@gmail.com" ;

        $data = array("name"=>"Mail cảm ơn","body"=>"Leu leu leu");

        FacadesMail::send('adminpages.sendmail',$data, function ($message) use($to_name,$to_email) {
            $message->from($to_email, $to_name);
            $message->to($to_email)->subject('Cảm ơn Học viên đã đăng ký khoá học này');

        });
        return redirect('/admin')->with('message','');
    }
}
