<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\UsuarioController;

Route::get("/", [UsuarioController:: class, 'PaginaInicial']);

Route::post("/autenticar", [UsuarioController::class, "authenticate"]) -> name('autenticar');

Route::get("/registrar", [UsuarioController::class, "EscreverRegistro"]) -> name('escrever.registro');

Route::post("/registrar/adicionar_usuario", [UsuarioController::class, "SalvarRegistro"]) -> name('salvar.registro');

Route::middleware(['auth'])->group(function () {

    Route::get("/agenda", [AgendaController::class, 'MostrarAgenda']) -> name('agenda');

    Route::post("/agenda/logout", [UsuarioController::class, "Logout"])->name('logout');;

    Route::get("/agenda/escrever_recado", [AgendaController::class, 'EscreverRecado'])->name('escrever.recado');;

    Route::post('/Agenda/escrever_recado/postar_recado', [AgendaController::class, 'PostarRecado'])->name('postar.recado');;
});
