@extends('app')

@section('titulo', 'Cadastrar Cliente')

@section('conteudo')
    <h2 class="text-center">Novo Cliente</h2>
    <form method="POST" action="../database/criarCliente.php">
        <div class="row p-2">
            <div class="col-3">
                <legend>Dados do Cliente</legend>
                <hr>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-2 d-flex flex-column">
                <label class="form-label">Bom Controle <font color="#FF0000">*</font></label>
                <input class="form-control" type="text" id="codigo" name="codBomControle" required>
            </div>
            <div class="col-2 d-flex flex-column">
                <label class="form-label">Data do Cadastro</label>
                <input class="form-control" type="text" value="" id="dataCadastro" name="dataCadastro" maxlength="14" disabled>
            </div>
            <div class="col-3 d-flex flex-column">
                <label class="form-label">CNPJ / CPF <font color="#FF0000">*</font></label>
                <input class="form-control" type="text" id="documento" name="documento" maxlength="18" required>
            </div>
        </div>
        <div class="row p-2">
            <div class="col d-flex flex-column">
                <label class="form-label">Razão Social <font color="#FF0000">*</font></label>
                <input class="form-control" type="text" id="razao_social" name="razaoSocial" maxlength="70" required>
            </div>
            <div class="col d-flex flex-column">
                <label class="form-label">Nome Fantasia</label>
                <input class="form-control" type="text" id="nome_fantasia" name="nomeFantasia" maxlength="70">
            </div>
        </div>
        <div class="row p-2">
            <div class="col-3 d-flex flex-column">
                <label class="form-label">Nome Responsável</label>
                <input class="form-control" type="text" id="contato" name="contato" maxlength="70">
            </div>
            <div class="col-3 d-flex flex-column">
                <label class="form-label" for="phoneNumberInput">Telefone / Celular</label>
                <input class="form-control" type="text" id="telefone" name="telefone" maxlength="15">
            </div>
            <div class="col-6 d-flex flex-column">
                <label class="form-label">E-mail</label>
                <input class="form-control" placeholder="email@email.com" type="text" id="email" name="email" maxlength="70">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr>
            </div>
        </div>
    </form>
@endsection