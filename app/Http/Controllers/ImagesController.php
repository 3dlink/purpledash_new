<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Image;
use App\Work;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        session()->put('work',$id);

        $work = Work::find($id);
        $images = $work->images;

        return view('admin.image.index')->with('work',$work)->with('images', $images);
    }

    public function get($id)
    {
        $images = Work::find($id)->images()->orderBy('order', 'asc')->get();
        
        return $images->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        session()->put('work',$id);

        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = strtotime("now");
        $files= [];
        $files = $request->file('originalImgName');
        $order = 0;

        $work = session()->get('work');

        foreach ($files as $file) {
            $order+=1;
            $image = new Image();

            $filename="img".$time.$this->__randomStr ( 3 ).'.'.$file->getClientOriginalExtension();

            $file->move(base_path().'/public/img/', $filename);

            $image -> image = $filename;
            $image -> originalName = $file->getClientOriginalName();
            $image -> origOrder = $order;
            $image -> order = $order;
            $image -> work_id = $work;

            $image -> save();
        }

        $work = Work::find($work);

        $work->hasImages = true;

        $work->save();

        return response()->json(['success', 200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::find($id);

        return view('admin.image.edit')->with('image', $image);
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
            'originalImgName'  =>   'required|image'
            ]);
        $image = Image::find($id);

        $file = $request->file('originalImgName');
        $time = strtotime("now");

        if ($file->getClientOriginalName() != $image -> originalName) {
            $filename="img".$time.$this->__randomStr ( 3 ).'.'.$file->getClientOriginalExtension();
            $file->move(
                base_path().'/public/img/', $filename
                );
            $image -> image = $filename;
            $image -> originalName = $request->file('originalImgName')->getClientOriginalName();

            $image->save();
        }

        return redirect()->route('admin.image.index', session()->get('work'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = session()->get('work');
        $image = Image::find($id);

        $image -> delete();

        $qty = count(Work::find($work)->images);

        if ($qty == 0) {
            $work = Work::find($work);

            $work -> hasImages = false;

            $work -> save();

            return redirect() -> route('admin.works.index');
        }

        return redirect() -> route('admin.image.index', session()->get('work'));
    }

    public function order(Request $request){
        $work = session()->get('work');

        $image = Image::find($request->id1);

        if(count($image) > 0){
            $image->order = $request->order1;
            $image->save();
        }

        $image = Image::find($request->id2);

        if(count($image) > 0){
            $image->order = $request->order2;
            $image->save();
        }

        $image = Image::find($request->id3);
        if (count($image) > 0) {
            $image->order = $request->order3;
            $image->save();
        }

        return redirect()->route('admin.image.index', $work);
    }

    public  function __randomStr($length) {
        $str = '';
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        $size = strlen ( $chars );
        for($i = 0; $i < $length; $i ++) {
            $str .= $chars [rand ( 0, $size - 1 )];
        }

        return $str;
    }
}
