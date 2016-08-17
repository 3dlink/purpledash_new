<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Hash;

use Auth;

class PasswordChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        return view('auth.password')->with('wrongPwd', 'false');
    }

    public function setPassword(Request $request){

        $this -> validate($request,[
            'old_password'  =>  'required',
            'password'   =>  array('required','same:password_confirmation', 'min:6')
        ]);


        $user = User::findOrFail(Auth::user()->id);

        if (Hash::check($request->old_password, $user->password)) {
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            return redirect() -> route('admin.index');
        } else {
            return view('auth.password')->with('wrongPwd', 'true');
        }
    }
}