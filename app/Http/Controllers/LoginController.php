<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->level_id === 4){
                return redirect()->intended('/obat/pengambilan');
            }

            if(Auth::user()->level_id === 3){
                return redirect()->intended('/data-pasien');
            }

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError','Login gagal!');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');

    }
}
