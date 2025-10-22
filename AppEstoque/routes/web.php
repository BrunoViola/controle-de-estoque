<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return 'Primeira lógica com laravel';
});

Route::get('/produtos', [ProdutoController::class, 'lista']);
