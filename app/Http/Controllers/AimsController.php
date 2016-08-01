<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Aim;

class AimsController extends Controller
{
        public function index()
    {
        $aim = Aim::orderBy('created_at', 'desc')->paginate(1);

        return view('admin.aim.index')->with('aims', $aim);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aim.create');
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

        $aim = new Aim();
        $aim -> text = $request -> text;

        $aim -> save();

        return redirect() -> route('admin.aims.index');
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
        $aim = Aim::find($id);

        return view('admin.aim.edit')->with('aim', $aim);
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

        $aim = Aim::find($id);
        $aim -> text = $request -> text;

        $aim -> save();

        return redirect() -> route('admin.aims.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aim = Aim::find($id);

        $aim -> delete();

        return redirect() -> route('admin.aims.index');
    }
}
