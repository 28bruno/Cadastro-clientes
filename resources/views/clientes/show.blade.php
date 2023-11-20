@extends('app')

@section('titulo', 'Cliente')

@section('conteudo')
    <div class="card">
        <div class="card-header">
            Detalhes do cliente
        </div>
        <div class="card-body">
            <strong>Cód Bom Controle: </strong> {{ $cliente->codBomControle }}<br>
            <strong>Razão Social: </strong> {{ $cliente->razaoSocial }}<br>
            <strong>Nome Fantasia: </strong> {{ $cliente->nomeFantasia }}<br>
            <strong>CNPJ/CPF: </strong> {{ $cliente->cnpjCpf }}<br>
            <strong>Criado em: </strong> {{ $cliente->created_at }}<br>
            <strong>Modificado em: </strong> {{ $cliente->updated_at }}<br>
            <br>
            <a class="btn btn-success" href="{{ route('home') }}">Voltar</a>
        </div>
    </div>
@endsection