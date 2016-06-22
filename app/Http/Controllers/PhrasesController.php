<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Phrase;

class PhrasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phrases = Phrase::paginate(5);

        return view('admin.phrases.index')->with('phrases', $phrases);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.phrases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phrase = new Phrase();
        $phrase -> author = $request -> author;
        $phrase -> quote = $request -> quote;

        $phrase -> save();

        return redirect() -> route('admin.phrases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phrase = Phrase::find($id);
        return view('admin.phrases.show')->with('phrase',$phrase);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phrase = Phrase::find($id);

        return view('admin.phrases.edit')->with('phrase', $phrase);
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
        $phrase = Phrase::find($id);
        $phrase -> author = $request -> author;
        $phrase -> quote = $request -> quote;

        $phrase -> save();

        return redirect() -> route('admin.phrases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phrase = Phrase::find($id);

        $phrase -> delete();

        return redirect() -> route('admin.phrases.index');
    }
}
