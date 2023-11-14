<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $clientes = (Clientes::get());

        return view('home', [
            'clientes' => $clientes
        ]);
    }

    public function show(int $id)
    {
        $clientes = Clientes::find($id);

        return view('show', [
            'cliente' => $clientes
        ]);
    }
<<<<<<< HEAD
    
=======

    public function create()
    {
        return view('create');
    }
>>>>>>> be4e695ca7e20a9e7001984cd7514c716c385f60
}
