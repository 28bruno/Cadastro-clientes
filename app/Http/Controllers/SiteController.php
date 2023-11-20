<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class SiteController extends Controller 
{
    public function home() 
    {
        $clientes = ( Clientes::get() );

        return view( 'home', [
            'clientes' => $clientes
        ] );
    }

    public function show( int $id ) 
    {
        $clientes = Clientes::find( $id );

        return view( 'clientes.show', [
            'cliente' => $clientes
        ] );
    }
}
