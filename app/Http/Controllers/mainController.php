<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
use Validator;
use App\Http\Requests;
use App\Service;
use App\Phrase;
use App\Work;
use App\Contact;
use App\About;
use App\Philosophy;
use App\Team;
use App\Aim;
use App\Connect;
use App\ServiceText;
use DB;

class mainController extends Controller
{
	public function index(){

		$about = About::first();
		$philosophy = Philosophy::first();
		$team = Team::first();
		$services = Service::all();
		$phrases = Phrase::all();
		$works = DB::table('works')->where('isActive', '=', 1)->orderBy('created_at', 'desc')->paginate(6);
		$contact = Contact::orderBy('created_at', 'desc')->first();
		$connect = Connect::orderBy('created_at', 'desc')->first();
		$aim = Aim::orderBy('created_at', 'desc')->first();
		$stext = ServiceText::orderBy('created_at', 'desc')->first();

		return view('index')->with('services',$services)->with('phrases',$phrases)->with('works', $works)->with('contact', $contact)->with('about', $about)->with('philosophy', $philosophy)->with('team', $team)->with('aim', $aim)->with('connect', $connect)->with('text', $stext);
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
			$m->to("");
			$m->subject("It's alive!");
		});

		if (!$sent) {
			$request->session()->flash('mail','Email could not be delivered. Please try again later!');
			return redirect('/#contact-section');
		}

		$request->session()->flash('mail','Email has been sent!');
		return redirect('/#contact-section');
	}

	public function workModal($id){
		$work = Work::find($id);
		$images = $work->images()->orderBy('order', 'asc')->get();

		return view('work')->with('work', $work)->with('images', $images);
	}
}