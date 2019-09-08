<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class MaiLController extends Controller
{
    public function sendgMail(){

   return view('admin.mail.mail');
}
public function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );
//dd($data);
     Mail::to('web-tutorial@programmer.net')->send(new SendMail($data));
	 
     return back()->with('success', 'Thanks for contacting us!');

    }

}
?>