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
                <th scope="col">CNPJ/CPF</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr class="text-center">
                <th scope="row">{{ $cliente->id }}</th>
                <td><a href="{{ route('clientes.show', $cliente) }}" style="text-decoration: none; color: inherit;">{{ $cliente->codBomControle }}</a></td>
                <td><a href="{{ route('clientes.show', $cliente) }}" style="text-decoration: none; color: inherit;">{{ $cliente->razaoSocial }}</a></td>
                <td><a href="{{ route('clientes.show', $cliente) }}" style="text-decoration: none; color: inherit;">{{ $cliente->cnpjCpf }}</a></td>
                <td>
                    <a class="btn btn-primary" href="{{ route('clientes.edit', $cliente) }}">Editar</a>
                    <form action="{{ route('clientes.delete', $cliente) }}" method="POST" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection