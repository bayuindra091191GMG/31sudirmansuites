<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function editPassword(){
        return view('admin.adminuser.change-password');
    }

    public function updatePassword(Request $request){
        $validator = Validator::make($request->all(),[
            'password_current'      => 'required|max:100',
            'password_new'          => 'required',
            'password_confirmation' => 'required'
        ],[
            'password_current.required'         => 'Password Sekarang wajib diisi!',
            'password_new.required'             => 'Password Baru wajib diisii!',
            'password_confirmation.required'    => 'Konfirmasi Password wajib diisii!'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $admin = Auth::guard('admin')->user();
        $user = AdminUser::find($admin->id);

        $passNew = $request->input('password_new');
        $passConfirmation = $request->input('password_confirmation');

        if($passNew !== $passConfirmation){
            return redirect()->back()->withErrors('Password Baru anda berbeda dengan Passwrod Konfirmasi!', 'default')->withInput($request->all());
        }

        if (!Hash::check($request->input('password_current'), $user->password)) {
            return redirect()->back()->withErrors('Password Anda salah!', 'default')->withInput($request->all());
        }

        $user->password = Hash::make($request->input('password_new'));
        $user->save();

        Session::flash('message', 'Berhasil ganti password!');

        return redirect()->back();
    }
}
