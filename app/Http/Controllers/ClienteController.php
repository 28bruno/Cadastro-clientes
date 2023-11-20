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
    
    public function edit(int $id)
    {
        $cliente = Clientes::find($id);

        return view('clientes.edit', [
            'clientes' => $cliente
        ]);
    }

    public function update(int $id, Request $request)
    {
        $cliente = Clientes::find($id);

        $cliente->update([
            'codBomControle' => $request->codBomControle,
            'cnpjCpf' => $request->cnpjCpf, 
            'razaoSocial' => $request->razaoSocial, 
            'nomeFantasia' => $request->nomeFantasia, 
            'nomeResponsavel' => $request->nomeResponsavel, 
            'telefone' => $request->telefone, 
            'email' => $request->email
        ]);

        return redirect('/');
    }

    public function delete(int $id)
    {
        $cliente = Clientes::find($id);

        $cliente->delete();

        return redirect('/');
    }
}
