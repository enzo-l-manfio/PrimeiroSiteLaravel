<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function PaginaInicial(){
        return view("login");
    }

    public function authenticate(Request $request): RedirectResponse
    {

        $credentials = $request->validate([

            'email' => ['required', 'email'],

            'password' => ['required'],

        ]);


        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

 

            return redirect("/Agenda");

        }


        return back()->withErrors([

            'email' => 'The provided credentials do not match our records.',

        ])->onlyInput('email');

    }
    public function Logout() {
        Auth::guard('web') -> Logout();
        Session::invalidate();
        Session::regenerateToken();
        return redirect("/");
    }

}

