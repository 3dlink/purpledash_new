<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Connect;

class ConnectsController extends Controller
{
    public function index()
    {
        $connect = Connect::orderBy('created_at', 'desc')->paginate(1);

        return view('admin.connect.index')->with('connects', $connect);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.connect.create');
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

        $connect = new Connect();
        $connect -> text = $request -> text;

        $connect -> save();

        return redirect() -> route('admin.connects.index');
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
        $connect = Connect::find($id);

        return view('admin.connect.edit')->with('connect', $connect);
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

        $connect = Connect::find($id);
        $connect -> text = $request -> text;

        $connect -> save();

        return redirect() -> route('admin.connects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $connect = Connect::find($id);

        $connect -> delete();

        return redirect() -> route('admin.connects.index');
    }
}
