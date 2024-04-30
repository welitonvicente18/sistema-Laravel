@extends('admin.layout.app')

@section('content')

<h1>@if(isset($uses))Editar @else Novo Usuário(a) @endif</h1>

<div class="container-fluid">
    <div class="row  mycard shadow-sm">

        <div class="row">
            <div class="col-12">
                <h5>@if(isset($uses)) Editar do Usuário @else Cadastro do Usuário @endif</h5>
                <span class="opacity-75">Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor.</span>
            </div>
        </div>
        <div class="row">

            @if(isset($uses))
            <form action="{{ route('profile.update', $uses->id) }}" method="POST" class="row mt-4">
                @method('PUT')
                @else
                <form action="{{ route('register') }}" method="POST" class="row mt-4">
                    @method('POST')
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Nome</label>
                            <input type="text" name="name" value="{{$uses->name ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">CPF</label>
                            <input type="text" name="cpf" value="{{$uses->cpf ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Data de Nascimento</label>
                            <input type="date" name="dt_nascimento" value="{{$uses->dt_nascimento ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Sexo</label>
                            <select class="form-select" name="sexo" aria-label="Default select example">
                                <option value="" @if(isset($uses) && $uses->sexo == '' )selected @endif>Escolha...</option>
                                <option value="M" @if(isset($uses) && $uses->sexo == 'M')selected @endif >Masculino</option>
                                <option value="F" @if(isset($uses) && $uses->sexo == 'F')selected @endif>Feminino</option>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" value="{{$uses->email ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Telefone</label>
                            <input type="text" name="telefone" value="{{$uses->telefone ?? ''}}" class="form-control" />
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Usuário</label>
                            <input type="text" name="user" value="{{$uses->user ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Senha</label>
                            <input type="password" name="password" value="{{$uses->password ?? ''}}" class="form-control" />
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">

                        <div class="col-12">
                            <h5>Adicionar Responsável</h5>
                            <span class="opacity-75">Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor.</span>
                        </div>

                        <div class="col-3 mt-3">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalResponsavel">
                                <i class="bi bi-person-plus-fill fa-2x"></i>
                                Adicionar
                            </button>

                            <div class="modal fade" id="modalResponsavel" tabindex="-1" aria-labelledby="modalResponsavelLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="modalResponsavelLabel">
                                                <i class="bi bi-person-plus-fill fa-2x"></i>
                                                Adicionar Responsável
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="{{ route('responsavel.create') }}"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                            <button type="button" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">@if(isset($uses)) Atualizar @else Cadastrar @endif</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection