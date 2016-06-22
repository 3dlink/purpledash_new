<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}