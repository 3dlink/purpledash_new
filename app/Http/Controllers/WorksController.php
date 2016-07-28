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
			'subtitle'  =>         'required',
			'category'   =>     'required',
			'description'   =>  'required',
			'frontImg'   =>    'required|image',
			'mainImg'   =>     'required|image'
			]);

		$time = strtotime("now");

		$files =[];
		$names = [];

		if ($request->file('frontImg')) 
			$files[] = $request->file('frontImg');
		if ($request->file('mainImg')) 
			$files[] = $request->file('mainImg');

		foreach ($files as $file)
		{
			if(!empty($file)){
				$filename="img".$time.$this->__randomStr ( 3 ).'.'.$file->getClientOriginalExtension();
				$names[] = $filename;
				$file->move(
					base_path().'/public/img/', $filename
					);
			}
		}

		$work = new Work();
		$work -> title = $request -> title;
		$work -> subtitle = $request -> subtitle;
		$work -> category = $request -> category;
		$work -> description = $request -> description;
		$work -> frontImg = $names[0];
		$work -> originalFront = $request->file('frontImg')->getClientOriginalName();
		$work -> mainImg = $names[1];
		$work -> originalMain = $request->file('mainImg')->getClientOriginalName();

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
			'subtitle'  =>         'required',
			'category'   =>     'required',
			'description'   =>  'required',
			'frontImg'   =>    'image',
			'mainImg'   =>     'image'
		]);

		$work = Work::find($id);
		$time = strtotime("now");

		$files =[];

		if ($request->file('frontImg')) 
			$files[] = $request->file('frontImg');
		if ($request->file('mainImg')) 
			$files[] = $request->file('mainImg');

		if(!empty($files[0])){
			if ($files[0]->getClientOriginalName() != $work -> originalFront) {
				$filename="img".$time.$this->__randomStr ( 3 ).'.'.$files[0]->getClientOriginalExtension();
				$files[0]->move(
						base_path().'/public/img/', $filename
				);
				$work -> frontImg = $filename;
				$work -> originalFront = $request->file('frontImg')->getClientOriginalName();
			}
		}

		if(!empty($files[1])){
			if ($files[1]->getClientOriginalName() != $work -> originalMain) {
				$filename="img".$time.$this->__randomStr ( 3 ).'.'.$files[1]->getClientOriginalExtension();
				$files[1]->move(
						base_path().'/public/img/', $filename
				);
				$work -> mainImg = $filename;
				$work -> originalMain = $request->file('mainImg')->getClientOriginalName();
			}
		}

		$work -> title = $request -> title;
		$work -> subtitle = $request -> subtitle;
		$work -> category = $request -> category;
		$work -> description = $request -> description;
		
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

	public  function __randomStr($length) {
		$str = '';
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

		$size = strlen ( $chars );
		for($i = 0; $i < $length; $i ++) {
			$str .= $chars [rand ( 0, $size - 1 )];
		}

		return $str;
	}

	public function active($id){
		$work = Work::find($id);

		if ($work->isActive == 0) {
			$response = 1;
		} else {
			$response = 0;
		}

		$work->isActive = $response;

		$work->save();

		return $id;
	}
}