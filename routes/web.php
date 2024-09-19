<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_usuario', [UserController::class, "formCriarUsuario"]);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);

//cliente

Route::get('/cadastro_cliente', [ClienteController::class, "formCriarCliente"]);

Route::get('/listar_clientes', [ClienteController::class, 'listar']);

Route::post('/criar_cliente', [ClienteController::class, 'criar']);

//vendedor

Route::get('/cadastro_vendedor', [VendedorController::class, "formCriarVendedor"]);

Route::get('/listar_vendedor', [VendedorController::class, 'listar']);

Route::post('/criar_vendedor', [VendedorController::class, 'criar']);
