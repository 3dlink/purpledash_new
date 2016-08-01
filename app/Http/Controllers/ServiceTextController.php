<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ServiceText;

class ServiceTextController extends Controller
{
    public function create()
    {
        return view('admin.services.createText');
    }

    public function store(Request $request)
    {
         $this -> validate($request,[
            'text'  =>  'required'
        ]);

        $text = new ServiceText();
        $text -> text = $request -> text;

        $text -> save();

        return redirect() -> route('admin.services.index');
    }

    public function edit($id)
    {
        $text = ServiceText::find($id);

        return view('admin.services.editText')->with('text', $text);
    }

    public function update(Request $request, $id)
    {

        $this -> validate($request,[
            'text'  =>  'required'
        ]);

        $text = ServiceText::find($id);
        $text -> text = $request -> text;

        $text -> save();

        return redirect() -> route('admin.services.index');
    }

    public function destroy($id)
    {
        $text = ServiceText::find($id);

        $text -> delete();

        return redirect() -> route('admin.services.index');
    }
}
