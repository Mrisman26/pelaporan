<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function postlogin (Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            pnotify()->addSuccess('Selamat Anda Berhasil Login');
            return redirect('/beranda');

        }
        pnotify()->addError('Username dan Password Tidak Terdaftar');
        return redirect('login');
    }

    public function logout (Request $request){
        Auth::logout();
        pnotify()->addSuccess('Anda Telah Keluar Dari Sesi');
        return redirect('login');
    }
    public function beranda()
    {
        return view('HalamanDepan.Beranda');
    }
}
