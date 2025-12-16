<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recado;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function MostrarAgenda()
    {
        $user = Auth::user();
        $userName = $user->name;
        $recados = Recado::where('autor', $userName)
                     ->select('mensagem', 'data')
                     ->orderBy('data', 'desc')
                     ->get();
        
        return view('agenda', ['recados' => $recados]);
    }
    public function EscreverRecado()
    {
        return view('escrever_recado');
    }
    public function PostarRecado(Request $request)
    {
        $user = Auth::user();
        $userName = $user->name;

        $recado = new Recado;
        $recado -> autor = $userName;
        $recado -> mensagem = $request -> mensagem;
        $recado -> data = $request -> data;
        
        $recado -> save();
        return redirect('/Agenda');
    }
}
