<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $req)
    {
        $message = $req->session()->get('message');

        return view('admin.login', compact('message'));
    }

    public function auth(Request $req)
    {
        $credential = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credential, $req->remember))
        {
            $req->session()->regenerate();
            $user = Auth::user();
            return redirect()->route('admin.profile', compact('user'));
        }
        else
        {
            return redirect()->back()->with('message', 'Usuário ou senha inválido');
        }
    }

    public function destroy(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('index');
    }
}
