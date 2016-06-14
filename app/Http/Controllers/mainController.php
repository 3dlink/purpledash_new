<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Service;

class mainController extends Controller
{
    public function index(){

    	$services = Service::all();


    	return view('index')->with('services',$services);
    }
}