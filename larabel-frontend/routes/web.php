<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TblClienteController;
use App\Http\Controllers\VentafacturaController;

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



//route de tabla Ventafactura

Route::get('/Ventafactura', [VentafacturaController::class, 'index'])->name('Ventafactura.index');

Route::get('/Ventafactura/create', [VentafacturaController::class, 'create'])->name('Ventafactura.create');

Route::get('/Ventafactura/store', [VentafacturaController::class, 'store'])->name('Ventafactura.store');

Route::get('/Ventafactura/edit/{id}', [VentafacturaController::class, 'edit'])->name('Ventafactura.edit');

Route::get('/Ventafactura/update/{id}', [VentafacturaController::class, 'update'])->name('Ventafactura.update');

Route::get('/Ventafactura/show/{id}', [VentafacturaController::class, 'show'])->name('Ventafactura.show');

Route::get('/Ventafactura/destroy/{id}', [VentafacturaController::class, 'destroy'])->name('Ventafactura.destroy');
