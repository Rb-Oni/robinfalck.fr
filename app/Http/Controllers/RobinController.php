<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RobinController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function mailreq(Request $request)
    {
        $content = $this->validate($request, [
            'object' => 'required',
            'mail' => 'email',
            'msg' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMail($content['object'], $content['mail'], $content['msg']));

        return redirect(route('contact'));
    }
}
