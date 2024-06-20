<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('layout.login');        
    }


    public function register(Request $request )
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verifed = $request->email;
        $user->password = $request->password;
        $user->role='user';
        $user->save();
        return redirect('/');        
    }


    public function authentivikasi(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user=Auth::user();
            if($user->role == 'admin'){
                return redirect('/admin/produk');
            }
            elseif($user->role == 'user') {
                return redirect('/user/produk');
            } 
//             if($user->role == 'admin') {
//                 return redirect('/admin/produk');
//             }
//             else if($user->role == 'user') {
//                 return redirect('/user/produk');
//             }

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');          
    }
    
    public function logout(Request $request) {
        
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    
}

