<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recado;
use Illuminate\Support\Carbon;

class RecadosController extends Controller
{
    public function MostrarMural()
    {
        return view('mural');
    }
    public function EscreverRecado()
    {
        return view('escrever_recado');
    }
    public function PostarRecado(Request $request)
    {
        $recado = new Recado;
        $recado -> autor = $request-> autor;
        $recado -> mensagem = $request -> mensagem;
        $recado -> data_publicacao = Carbon::now();
        
        $recado -> save();
        return redirect('/');
    }
}
