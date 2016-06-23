<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Work;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderBy('created_at', 'desc')->paginate(6);

        return view('admin.works.index')->with('works', $works);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.works.create');
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
            'title'  =>         'required|unique:works',
            'category'   =>     'required',
            'frontImg'   =>    'required',
            'mainImg'   =>     'required',
            'description'   =>  'required'
        ]);

        $work = new Work();
        $work -> title = $request -> title;
        $work -> category = $request -> category;
        $work -> frontImg = $request -> frontImg;
        $work -> mainImg = $request -> mainImg;
        $work -> description = $request -> description;

        $work -> save();

        return redirect() -> route('admin.works.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = Work::find($id);
        return view('admin.works.show')->with('work',$work);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Work::find($id);

        return view('admin.works.edit')->with('work', $work);
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
            'title'  =>         'required',
            'category'   =>     'required',
            'frontImg'   =>    'required',
            'mainImg'   =>     'required',
            'description'   =>  'required'
        ]);
        $work = Work::find($id);
        $work -> title = $request -> title;
        $work -> category = $request -> category;
        $work -> frontImg = $request -> frontImg;
        $work -> description = $request -> description;
        $work -> mainImg = $request -> mainImg;

        $work -> save();

        return redirect() -> route('admin.works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);

        $work -> delete();

        return redirect() -> route('admin.works.index');
    }
}
