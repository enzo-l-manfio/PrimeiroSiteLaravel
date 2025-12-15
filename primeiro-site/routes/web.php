<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecadosController;

Route::get("/", [RecadosController::class, 'MostrarMural']);

Route::get("/escreverRecado", [RecadosController::class, 'EscreverRecado']);

Route::post('postarRecado', [RecadosController::class, 'PostarRecado']);
