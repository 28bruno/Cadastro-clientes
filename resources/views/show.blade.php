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
<<<<<<< HEAD
            <strong>CNPJ/CPF: </strong> {{ $cliente->cnpjCpf }}<br>
=======
            <strong>CNPJ: </strong> {{ $cliente->cnpj }}<br>
            <strong>CPF: </strong> {{ $cliente->cpf }}<br>
>>>>>>> be4e695ca7e20a9e7001984cd7514c716c385f60
            <strong>Criado em: </strong> {{ $cliente->created_at }}<br>
            <strong>Modificado em: </strong> {{ $cliente->updated_at }}<br>
            <br>
            <a class="btn btn-success" href="{{ route('home') }}">Voltar</a>
        </div>
    </div>
@endsection