@extends('app')

@section('titulo', 'Home')

@section('conteudo')
    <h2 class="text-center">Clientes Cadastrados</h2><br>
    <table class="table table-striped">
        <thead>
            <tr class="text-center">
                <th scope="col"></th>
                <th scope="col">Código</th>
                <th scope="col">Razão Social</th>
                <th scope="col">CNPJ</th>
                <th scope="col">CPF</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr class="text-center">
                <th scope="row">{{ $cliente->id }}</th>
                <td><a href="{{ route('clientes.show', $cliente) }}" style="text-decoration: none; color: inherit;">{{ $cliente->codBomControle }}</a></td>
                <td><a href="{{ route('clientes.show', $cliente) }}" style="text-decoration: none; color: inherit;">{{ $cliente->razaoSocial }}</a></td>
                <td><a href="{{ route('clientes.show', $cliente) }}" style="text-decoration: none; color: inherit;">{{ $cliente->cnpj }}</a></td>
                <td><a href="{{ route('clientes.show', $cliente) }}" style="text-decoration: none; color: inherit;">{{ $cliente->cpf }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection