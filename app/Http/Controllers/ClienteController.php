<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create()
    {
        return view( 'clientes.create' );
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Clientes::create($dados);

        return redirect('/');
    }
}
