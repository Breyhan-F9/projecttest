<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = Auth::user()->role;

            switch ($role) {
                case 'admin':
                    return redirect()->intended('/account');
                    break;
                case 'author':
                    return redirect()->intended('/post');
                    break;
                default:
                    return back()->with('error', 'Login Gagal, Pastikan Anda Sudah Memiliki Akun !');
                    break;
            }
        }

        return back()->with('error', 'Login Gagal, Cek Ulang Password Dan Username Anda');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
