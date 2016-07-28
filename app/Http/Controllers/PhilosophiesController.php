<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Philosophy;

class PhilosophiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $philosophy = Philosophy::orderBy('created_at', 'desc')->paginate(1);

        return view('admin.philosophy.index')->with('philosophies', $philosophy);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.philosophy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'text'  =>  'required'
        ]);

        $philosophy = new Philosophy();
        $philosophy -> text = $request -> text;

        $philosophy -> save();

        return redirect() -> route('admin.philosophies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $philosophy = Philosophy::find($id);

        return view('admin.philosophy.edit')->with('philosophy', $philosophy);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this -> validate($request,[
            'text'  =>  'required'
        ]);

        $philosophy = Philosophy::find($id);
        $philosophy -> text = $request -> text;

        $philosophy -> save();

        return redirect() -> route('admin.philosophies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $philosophy = Philosophy::find($id);

        $philosophy -> delete();

        return redirect() -> route('admin.philosophies.index');
    }
}
