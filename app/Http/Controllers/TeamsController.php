<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Team;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::orderBy('created_at', 'desc')->paginate(1);

        return view('admin.team.index')->with('teams', $team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'title'  =>  'required'
        ]);

        $team = new Team();
        $team -> p1 = $request -> p1;
        $team -> p2 = $request -> p2;
        $team -> title = $request -> title;

        $team -> save();

        return redirect() -> route('admin.teams.index');
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
        $team = Team::find($id);

        return view('admin.team.edit')->with('team', $team);
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
            'title'  =>  'required'
        ]);

        $team = Team::find($id);
        $team -> p1 = $request -> p1;
        $team -> p2 = $request -> p2;
        $team -> title = $request -> title;

        $team -> save();

        return redirect() -> route('admin.teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = eam::find($id);

        $team -> delete();

        return redirect() -> route('admin.teams.index');
    }
}
