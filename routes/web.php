<?php

<<<<<<< HEAD
use App\Http\Controllers\ClienteController;
=======
>>>>>>> be4e695ca7e20a9e7001984cd7514c716c385f60
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
<<<<<<< HEAD
| be assigned to the 'web' middleware group. Make something great!
|
*/

Route::get( '/', [ SiteController::class, 'home' ] )->name( 'home' );
Route::get( '/{id}', [ SiteController::class, 'show' ] )->name( 'clientes.show' );
Route::get( '/clientes/create', [ ClienteController::class, 'create' ] )->name( 'clientes.create' );

Route::post( '/clientes', [ClienteController::class, 'store'])->name('clientes.store');
=======
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/create', [SiteController::class, 'create'])->name('clientes.create');
Route::get('/{id}', [SiteController::class, 'show'])->name('clientes.show');
>>>>>>> be4e695ca7e20a9e7001984cd7514c716c385f60
