<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TblClienteController;

Route::get('/', function () {
    return view('welcome');
});



//route de tabla productos

Route::get('/products', [ProductosController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductosController::class, 'create'])->name('products.create');

Route::get('/products/store', [ProductosController::class, 'store'])->name('products.store');

Route::get('/products/edit/{id}', [ProductosController::class, 'edit'])->name('products.edit');

Route::get('/products/update/{id}', [ProductosController::class, 'update'])->name('products.update');

Route::get('/products/show/{id}', [ProductosController::class, 'show'])->name('products.show');

Route::get('/products/destroy/{id}', [ProductosController::class, 'destroy'])->name('products.destroy');

// controlador clientes
Route::get('/clientes', [TblClienteController::class, 'index'])->name('clientes.index');

Route::get('/clientes/create', [TblClienteController::class, 'create'])->name('clientes.create');

Route::post('/clientes/store', [TblClienteController::class, 'store'])->name('clientes.store');

