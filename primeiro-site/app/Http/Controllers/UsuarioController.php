<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UsuarioController extends Controller
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

 

            return redirect()->route('agenda');

        }


        return back()->withErrors([

            'email' => 'The provided credentials do not match our records.',

        ])->onlyInput('email');

    }

    public function EscreverRegistro()
    {
        return view('registro');
    }

    public function SalvarRegistro(Request $request){

        $dadosUsuario = $request->validate([

            'name' => ['required'],

            'email' => ['required', 'email'],

            'password' => ['required'],

        ]);

        $dadosUsuario['password'] = bcrypt($dadosUsuario['password']);

        $usuario = User::create($dadosUsuario);

        Auth::login($usuario);

        return redirect()->route('agenda');

    }

    public function Logout() {
        Auth::guard('web') -> Logout();
        Session::invalidate();
        Session::regenerateToken();
        return redirect("/");
    }

}

