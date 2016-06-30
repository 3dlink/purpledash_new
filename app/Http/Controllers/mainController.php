<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
use Validator;
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

		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
			]);

		if ($validator->fails()) {
			return redirect("/#contact-section")
			->withErrors($validator);
		}

		$contact = [];
		$contact['name'] = $request -> name;
		$contact['email'] = $request -> email;
		$contact['message'] = $request -> message;

		$sent= Mail::send('mail.contact', array('contact' => $contact), function ($m){
			$m->from('hello@purpledash.com');
			$m->to("o0serras0o@gmail.com");
			$m->subject("It's alive!");
		});

		if (!$sent) {
			$request->session()->flash('mail','Email could not be delivered. Please try again later!');
			return redirect('/#contact-section');
		}

		$request->session()->flash('mail','Email has been sent!');
		return redirect('/#contact-section');
	}
}