<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\About;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::orderBy('created_at', 'desc')->paginate(1);

        return view('admin.about.index')->with('abouts', $about);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'p1'  =>  'required',
            'p2'  =>  'required',
            'p3'  =>  'required'
        ]);

        $about = new About();
        $about -> p1 = $request -> p1;
        $about -> p2 = $request -> p2;
        $about -> p3 = $request -> p3;

        $about -> save();

        return redirect() -> route('admin.abouts.index');
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
        $about = About::find($id);

        return view('admin.about.edit')->with('about', $about);
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
            'p1'  =>  'required',
            'p2'  =>  'required',
            'p3'  =>  'required'
        ]);

        $about = About::find($id);
        $about -> p1 = $request -> p1;
        $about -> p2 = $request -> p2;
        $about -> p3 = $request -> p3;

        $about -> save();

        return redirect() -> route('admin.abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);

        $about -> delete();

        return redirect() -> route('admin.abouts.index');
    }
}
