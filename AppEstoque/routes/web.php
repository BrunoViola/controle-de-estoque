<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'lista']);

Route::get('/produtos', [ProdutoController::class, 'lista']);
Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra']);
Route::get('/produtos/novo', [ProdutoController::class, 'novo']);
Route::post('/produtos/cadastrar', [ProdutoController::class, 'cadastrar']);