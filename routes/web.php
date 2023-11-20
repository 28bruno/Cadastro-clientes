<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

Route::get( '/', [ SiteController::class, 'home' ] )->name( 'home' );

Route::get('/{id}', [ SiteController::class, 'show' ] )->name( 'clientes.show' );
Route::get('/c/create', [ ClienteController::class, 'create' ] )->name( 'clientes.create' );
Route::post('/c', [ ClienteController::class, 'store' ] )->name( 'clientes.store' );
Route::get('/c/{id}', [ ClienteController::class, 'edit' ] )->name( 'clientes.edit' );
Route::put('/c/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/c/{id}', [ClienteController::class, 'delete'])->name('clientes.delete');
