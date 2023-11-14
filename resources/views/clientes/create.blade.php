@extends('app')

@section('titulo', 'Cadastrar Cliente')

@section('conteudo')
    <h2 class="text-center">Novo Cliente</h2>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
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
            <div class="col-3 d-flex flex-column">
                <label class="form-label">CNPJ / CPF <font color="#FF0000">*</font></label>
                <input class="form-control" type="text" id="documento" name="cnpjCpf" maxlength="18" required>
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
                <input class="form-control" type="text" id="contato" name="nomeResponsavel" maxlength="70">
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
        <!-- Dados do Sistema
        <div class="row p-2">
            <div class="col-3">
                <legend>Sistema(s)</legend>
                <hr>
            </div>
        </div>
        <nav class="p-2">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link tab1 active" id="nav-s1-tab" data-bs-toggle="tab" data-bs-target="#nav-s1" type="button" role="tab" aria-controls="nav-s1">1</button>
                <button class="nav-link tab1" id="nav-sadd-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-sadd">+</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent1">
            <div class="tab-pane content1 fade show active cloned-form" id="nav-s1" role="tabpanel" aria-labelledby="nav-s-tab1">
                <div class="row p-2">
                    <div class="col-2 d-flex flex-column">
                        <label class="form-label">Fabricante <font color="#FF0000">*</font></label>
                        <select class="form-select sfabricante" name="sfabricante" id="sfabricante" required>
                            <option value="0">Selecione...</option>
                        </select>
                    </div>
                    <div class="col-3 d-flex flex-column">
                        <label class="form-label">Versão <font color="#FF0000">*</font></label>
                        <select class="form-select versao" name="versao" id="versao" maxlength="10" disabled required>
                            <option value="0"></option>
                        </select>
                    </div>
                    <div class="col-3 d-flex flex-column">
                        <label class="form-label">Licença <font color="#FF0000">*</font></label>
                        <select class="form-select licenca" name="licenca" id="licenca" maxlength="10" disabled required>
                            <option value="0"></option>
                        </select>
                    </div>
                    <div class="col-2 d-flex flex-column">
                        <label class="form-label" title="Quantidade de CNPJs">Qtd CNPJs? <font color="#FF0000">*</font></label>
                        <input class="form-control" name="qtdCNPJ" id="qtdCnpj" type="text" maxlength="3" required>
                    </div>
                    <div class="col-2 d-flex flex-column">
                        <label class="form-label">Usa app? <font color="#FF0000">*</font></label>
                        <Select class="form-select" name="app" id="app" maxlength="3" required>
                            <option value="0">Selecione...</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                        </select>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2 d-flex flex-column">
                        <label class="form-label">Usa facial? <font color="#FF0000">*</font></label>
                        <Select class="form-select" name="facialApp" id="facialApp" maxlength="3" required>
                            <option value="0" selected>Selecione...</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                        </select>
                    </div>
                    <div class="col-4 d-flex flex-column">
                        <label class="form-label">Banco de dados <font color="#FF0000">*</font></label>
                        <select class="form-select tpbanco" name="tpbanco" id="tpbanco" disabled required>
                            <option value="0"></option>
                        </select>
                    </div>
                    <div class="col-2 d-flex flex-column">
                        <label class="form-label">Usuário Banco</label>
                        <input class="form-control" placeholder="admin" name="usuarioBanco" id="usuarioBanco" type="text" maxlength="15">
                    </div>
                    <div class="col-2 d-flex flex-column">
                        <label class="form-label">Senha Banco</label>
                        <input class="form-control" placeholder="admin" name="senhaBanco" id="senhaBanco" type="text" maxlength="15">
                    </div>
                    <div class="col-2 d-flex flex-column">
                        <label class="form-label">Backup Web? <font color="#FF0000">*</font></label>
                        <Select class="form-select" name="bkpWeb" id="bkpWeb" maxlength="3">
                            <option value="0" selected>Selecione...</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                        </select>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-3 d-flex flex-column">
                        <label class="form-label">Instância Banco</label>
                        <input class="form-control" name="instBanco" id="instBanco" type="text" maxlength="15">
                    </div>
                    <div class="col-3 d-flex flex-column">
                        <label class="form-label">IP Servidor</label>
                        <input class="form-control" name="ipServidor" id="ipServidor" type="text" maxlength="15">
                    </div>
                    <div class="col-3 d-flex flex-column">
                        <label class="form-label">Nome Servidor</label>
                        <input class="form-control" name="nomeServidor" id="nomeServidor" type="text" maxlength="15">
                    </div>
                    <div class="col d-flex flex-column">
                        <label class="form-label">Nome do banco <font color="#FF0000">*</font></label>
                        <input class="form-control" name="nomeBanco" id="nomeBanco" type="text" maxlength="20" required>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col d-flex flex-column">
                        <label class="form-label">Local do Banco de dados</label>
                        <input class="form-control" placeholder="C:\Program Files (x86)\Ponto4\Banco de dados" type="text" name="localBanco" id="localBanco" maxlength="30">
                    </div>
                    <div class="col d-flex flex-column">
                        <label class="form-label">Pasta de backups local</label>
                        <input class="form-control" placeholder="C:\Program Files (x86)\Ponto4\Backups" type="text" name="pastaBkpBanco" id="pastaBkpBanco" maxlength="20">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col d-flex flex-column">
                        <label class="form-label">Observações</label>
                        <textarea class="form-control" type="text" name="sObs" id="sObs"></textarea>
                    </div>
                </div>

                Dados do Equipamento
                <div class="row p-2">
                    <div class="col-3">
                        <legend>Equipamento(s)</legend>
                        <hr>
                    </div>
                </div>
                <nav class="p-2">
                    <div class="nav nav-tabs" id="nav-etab" role="tablist">
                        <button class="nav-link tab2 active" id="nav-e1-tab" data-bs-toggle="tab" data-bs-target="#nav-e1" type="button" role="tab" aria-controls="nav-e1">1</button>
                        <button class="nav-link tab2" id="nav-eadd-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-eadd">+</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent2">
                    <div class="tab-pane content2 fade show active cloned-formE" id="nav-e1" role="tabpanel" aria-labelledby="nav-e-tab1">
                        <div class="row p-2">
                            <div class="col-4 d-flex flex-column">
                                <label class="form-label" for="nome">Nome <font color="#FF0000">*</font></label>
                                <input class="form-control" type="text" id="nome" name="nome" required>
                            </div>
                            <div class="col-4 d-flex flex-column">
                                <label class="form-label">Fabricante <font color="#FF0000">*</font></label>
                                <select class="form-select fabricante" id="fabricante" name="fabricante" required>
                                    <option value="0">Selecione...</option>
                                </select>
                            </div>
                            <div class="col-4 d-flex flex-column">
                                <label class="form-label">Modelo <font color="#FF0000">*</font></label>
                                <select class="form-select modelo" name="modelo" id="modelo" maxlength="10" disabled required></select>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-3 d-flex flex-column">
                                <label class="form-label">IP Local</label>
                                <input class="form-control" name="ipLocal" id="iplocal" type="text">
                            </div>
                            <div class="col-3 d-flex flex-column">
                                <label class="form-label">IP Externo</label>
                                <input class="form-control" name="ipExterno" id="ipexterno" type="text">
                            </div>
                            <div class="col-2 d-flex flex-column">
                                <label class="form-label">Porta Interna</label>
                                <input class="form-control" name="portaInterna" id="portaInterna" type="text">
                            </div>
                            <div class="col-2 d-flex flex-column">
                                <label class="form-label">Porta Externa</label>
                                <input class="form-control" name="portaExterna" id="portaExterna" type="text">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-3 d-flex flex-column">
                                <label class="form-label">Serial <font color="#FF0000">*</font></label>
                                <input class="form-control" name="nSerie" id="nSerie" required></input>
                            </div>
                            <div class="col-4 d-flex flex-column">
                                <label class="form-label">DDNS</label>
                                <input class="form-control" name="ddns" id="ddns" type="text">
                            </div>
                            <div class="col-5 d-flex flex-column">
                                <label class="form-label">Código Hash</label>
                                <input class="form-control" name="codigoHash" id="codigoHash" type="text" maxlength="60">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-3 d-flex flex-column">
                                <label class="form-label">Usuário</label>
                                <input class="form-control" name="usuario" id="usuario" type="text">
                            </div>
                            <div class="col-3 d-flex flex-column">
                                <label class="form-label">Senha</label>
                                <input class="form-control" name="senha" id="senha" type="text">
                            </div>
                            <div class="col d-flex flex-column">
                                <label class="form-label">PC Comunicador</label>
                                <input class="form-control" name="pcComunicador" id="pcComunicador" type="text" maxlength="15">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col d-flex flex-column">
                                <label class="form-label">Observações</label>
                                <textarea class="form-control" type="text" name="eObs" id="eObs"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                 -->
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
                
                <div class="btn-form p-2">
                    <button class="btn btn-success" id="cadastrar">Cadastrar</button>
                    <a href="{{ route('home') }}" class="btn btn-primary" id="voltar">Voltar</a>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    <script src="../js/newSistema.js"></script>
    <script src="../js/newEquipamento.js"></script>
@endsection