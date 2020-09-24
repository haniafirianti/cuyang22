<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $contacts = Contact::join('users', 'contacts.user_id', '=', 'users.id')->select(
            'users.*',
            'contacts.*'
        )->get();
        return view('contacts.index', compact('contacts'));
    }
    public function create($id)
    {
        $users = User::get();
        return view('contacts.create', compact('users'));
    }
    public function store(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required|min:4',
            'description'   => 'required|min:10'
        ]);
        $users = User::whereId($id)->first();

        $contact = new Contact;
        $contact->user_id   = $users->id;
        $contact->title = $request->title;
        $contact->description = $request->description;
        $contact->save();
        Alert::success('Report', 'Berhasil di Simpan');
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:4',
            'description' => 'required|min:10'
        ]);

        $contacts = Contact::whereId($id)->first();
        $contacts->title = $request->title;
        $contacts->description = $request->description;
        $contacts->update();
        Alert::success('Contact Data', 'Berhasil di Updated');
        return redirect('/show-contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $contacts = Contact::find($id);
        $contacts->delete();
        Alert::success('Contacts Data', 'Berhasil Di Hapus');
        return redirect()->back();
    }
}
