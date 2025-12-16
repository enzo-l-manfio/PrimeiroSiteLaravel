<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\LoginController;

Route::get("/", [LoginController:: class, 'PaginaInicial']);

Route::post("/login", [LoginController::class, "authenticate"]);

Route::middleware(['auth'])->group(function () {

    Route::get("/Agenda", [AgendaController::class, 'MostrarAgenda']);

    Route::post("/Agenda/logout", [LoginController::class, "Logout"])->name('logout');;

    Route::get("/Agenda/escreverRecado", [AgendaController::class, 'EscreverRecado'])->name('escrever.recado');;

    Route::post('/Agenda/escreverRecado/postarRecado', [AgendaController::class, 'PostarRecado'])->name('postar.recado');;
});
