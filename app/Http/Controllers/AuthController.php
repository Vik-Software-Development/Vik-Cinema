<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard()
    {
        return view('Admin/Dashboard');
    }
    public function formLogin()
    {
        return view('Admin/Login');
    }
    public function login(Request $request)
    {

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->withErrors(["Email Inválido"]);
        }
        if (strlen($request->password) < 8) {
            return redirect()->back()->withInput()->withErrors(["Senha com menos de 8 caracteres"]);
        }
        $credentials = [
            'Email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials) ? Auth::user()->Admin : false) { // Tenta logar e verifica se é admin
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors(["Email ou Senha Incorretos para um Admin"]);
        }
    }

    public function logout()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        Auth::logout();
        return redirect()->route('/');
    }
}
