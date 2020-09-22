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
        $users = User::all();
        return view('users.kelola-user',compact('users'));
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $file = $request->file('avatar');
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->get('password'));

        $users->avatar  = $file->getClientOriginalName();
        $tujuan_upload = 'asset_user';
        $file->move($tujuan_upload, $file->getClientOriginalName());
        
        $users->assignRole('user');
        $users->save();


        Alert::success('User', 'Berhasil Di Tambahkan');
        return redirect('/kelola-users');      
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
         $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $users = User::whereId($id)->first();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->update();
        Alert::success('User','Berhasil di Updated');
        return redirect('/kelola-users');
        
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
        $users = User::find($id);
        if ($users->hasRole('admin')) {
            Alert::error('Gagal', 'Sesama Admin Tidak bisa Menghapus');
            return redirect()->back();
        } else {
           $users->delete();
            Alert::success('User', 'Berhasil Di Hapus');
            return redirect()->back();
        }
    }
}
