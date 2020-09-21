<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    public function createChangePassword()
    {
        $user = Auth::user();
        return view('auth.changepassword', compact('user'));
    }

    public function storeChangePassword(Request $request)
    {
        $request->validate([
            'new-password' => 'required|min:8',
        ]);

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            Alert::error('Gagal', 'Password lama anda Salah');
            return redirect()->back();
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            Alert::error('Gagal', 'Gunakan Password Baru !');
            return redirect()->back();
        }
        if (!(strcmp($request->get('new-password'), $request->get('new-password_confirmation'))) == 0) {
            //New password and confirm password are not same
            Alert::error('Gagal', 'Ulangi Password Tidak sesuai');
            return redirect()->back();
        }
        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->get('new-password'));
        $user->save();
        Alert::success('Berhasil', 'Password berhasil di Ubah');
        return redirect()->back();
    }

    public function update_avatar(Request $request)
    {

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $file = $request->file('avatar');
        $user->avatar  = $file->getClientOriginalName();
        $tujuan_upload = 'asset_user';
        $file->move($tujuan_upload, $file->getClientOriginalName());
        $user->save();

        // $avatarName = $user->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();

        // $request->avatar->storeAs('avatars', $avatarName);

        // $user->avatar = $avatarName;
        // $user->save();
        Alert::success('Profile', 'Berhasil Di Update');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
