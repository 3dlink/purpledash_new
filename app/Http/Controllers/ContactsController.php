<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->paginate(1);

        return view('admin.contact.index')->with('contacts', $contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
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
            'city'  =>  'required',
            'country'  =>  'required',
            'areaCode'  =>  'required|numeric',
            'phone'  =>  'required',
            'email'  =>  'required|email',
            'webpage'  =>  'required'
        ]);

        $contact = new Contact();
        $contact -> city = $request -> city;
        $contact -> country = $request -> country;
        $contact -> areaCode = $request -> areaCode;
        $contact -> phone = $request -> phone;
        $contact -> email = $request -> email;
        $contact -> webpage = $request -> webpage;

        $contact -> save();

        return redirect() -> route('admin.contacts.index');
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
        $contact = Contact::find($id);

        return view('admin.contact.edit')->with('contact', $contact);
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
            'city'  =>  'required',
            'country'  =>  'required',
            'areaCode'  =>  'required|numeric',
            'phone'  =>  'required',
            'email'  =>  'required|email',
            'webpage'  =>  'required'
        ]);

        $contact = Contact::find($id);
        $contact -> city = $request -> city;
        $contact -> country = $request -> country;
        $contact -> areaCode = $request -> areaCode;
        $contact -> phone = $request -> phone;
        $contact -> email = $request -> email;
        $contact -> webpage = $request -> webpage;

        $contact -> save();

        return redirect() -> route('admin.contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact -> delete();

        return redirect() -> route('admin.contacts.index');
    }
}
