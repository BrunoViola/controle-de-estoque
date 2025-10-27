<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'listar']);

Route::get('/produtos', [ProdutoController::class, 'listar']);
Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra']);
Route::get('/produtos/novo', [ProdutoController::class, 'novo']);
Route::get('/produtos/json', [ProdutoController::class, 'listarEmJSON']);
Route::get('/produtos/excluir/{id}', [ProdutoController::class, 'excluir'])
   ->name('produtos.excluir');
Route::post('/produtos/cadastrar', [ProdutoController::class, 'cadastrar']);