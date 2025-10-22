<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/produtos', [ProdutoController::class, 'lista']);
Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra'])->where('id', '[0-9]+');
Route::get('/produtos/novo', [ProdutoController::class, 'cadastrar']);