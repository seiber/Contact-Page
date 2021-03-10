<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PagesController;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index()
    {
        return view ('pages.index');
    }

    public function contact()
    {
        $title = 'Reliable Support + Proven Value';
        return view ('pages.contact')->with('title',$title);
    }
    public function store()
    {
        //dd(request()->all());

        $data = request()->validate([
      
            'name' => 'required',
            'number' => '',
            'email' => 'required|email',
            'message' => 'required',
        ]);
       //send email message
       Mail::to('test3@test.com')->send(new ContactFormMail($data));
       return redirect('contact')->with('message','Thank you for filling out the contact form!');
       
    }
}
