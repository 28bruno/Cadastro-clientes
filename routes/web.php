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
Route::get( '/{id}', [ SiteController::class, 'show' ] )->name( 'clientes.show' );
Route::get( '/clientes/create', [ ClienteController::class, 'create' ] )->name( 'clientes.create' );

Route::post( '/clientes', [ClienteController::class, 'store'])->name('clientes.store');