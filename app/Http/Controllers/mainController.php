<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Service;
use App\Phrase;
use App\Work;

class mainController extends Controller
{
    public function index(){

    	$services = Service::all();
    	$phrases = Phrase::all();
    	$works = Work::orderBy('created_at', 'desc')->paginate(6);


    	return view('index')->with('services',$services)->with('phrases',$phrases)->with('works', $works);
    }

    public function contact (Request $request){

    	$this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'message' => 'required'
        ]);

    	$contact = [];
    	$contact['name'] = $request -> name;
    	$contact['email'] = $request -> email;
    	$contact['message'] = $request -> message;

	    	$sent= Mail::send('mail.contact', array('contact' => $contact), function ($m){
	            $m->from('hello@purpledash.com');
	            $m->to("CORREO_AQUI");
	            $m->subject("It's alive!");
	        });

        return redirect() -> route('index');
    }
}