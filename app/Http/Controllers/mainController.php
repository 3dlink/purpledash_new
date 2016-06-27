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

    	$contact = [];
    	$contact['name'] = $request -> name;
    	$contact['email'] = $request -> email;
    	$contact['message'] = $request -> message;

    	Mail::send('mail.contact', ['contact' => $contact], function ($m){
            $m->from('hello@purpledash.com', 'PurpleDash');

            $m->to('o0serras0o@gmail.com', 'Daniel')->subject("It's alive!");
            // hello@bepurpledash.com
        });

        return response()->json(['message' => 'Request completed']);
    }
}