@extends('admin.layout.app')

@section('section') <span class="fs-4 opacity-50"> Responsável/Aluno</span> / @if(isset($uses))<span class="text-laranja-2">Editar</span> {{$uses->name}} @else Novo @endif @endsection

@section('content')

<div class="container-fluid">
    <div class="row  mycard shadow-sm">

        <div class="row">
            <div class="col-12">
                <h5 class="text-laranja">@if(isset($uses)) Editar o Responsável @else Responsável @endif</h5>
            </div>
        </div>

        @if(isset($uses))
        <form action="{{ route('user.update', $uses->id) }}" method="POST" class="mt-1">
            @method('PUT')
            @else
            <form action="{{ route('user.store') }}" method="POST" class="mt-1">
                @method('POST')
                @endif
                @csrf
                <div id="form-responsavel">
                    <div class="row">
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Parentesco</label>
                            <select name="parentesco" class="form-select @error('parenteco') is-valid @enderror">
                                <option value="" @if(isset($resp->parentesco) && $resp->parentesco =='' ) selected @endif>Escolha...</option>
                                <option value="Pai" @if(isset($resp->parentesco) && $resp->parentesco =='Pai/Mãe' ) selected @endif>Pai/Mãe</option>
                                <option value="Tio/Tia" @if(isset($resp->parentesco) && $resp->parentesco =='Tio/Tia' ) selected @endif>Tio/Tia</option>
                                <option value="Avó/Avô" @if(isset($resp->parentesco) && $resp->parentesco =='Avô/Avó' ) selected @endif>Avô/Avó</option>
                                <option value="Avó/Avô" @if(isset($resp->parentesco) && $resp->parentesco =='Primo/Prima' ) selected @endif>Primo/Prima</option>
                            </select>
                            @error('parentesco')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Nome</label>
                            <input type="text" name="name" value="{{$uses->name ?? ''}}" class="form-control @error('name') is-invalid @enderror" />
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">CPF</label>
                            <input type="text" name="cpf" value="{{$uses->cpf ?? ''}}" x-mask="999.999.999-99" placeholder="999.999.999-99" class="form-control @error('cpf') is-invalid @enderror" />
                            @error('cpf')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">RG</label>
                            <input type="date" name="rg" value="{{$uses->rg ?? ''}}" class="form-control @error('rg') is-invalid @enderror" />
                            @error('rg')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Data de Nascimento</label>
                            <input type="date" name="dt_nascimento" value="{{$uses->dt_nascimento ?? ''}}" class="form-control @error('dt_nascimento') is-invalid @enderror" />
                            @error('dt_nascimento')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Sexo</label>
                            <select class="form-select @error('sexo') is-invalid @enderror" name="sexo">
                                <option value="" @if(isset($uses) && $uses->sexo == '' )selected @endif>Escolha...</option>
                                <option value="M" @if(isset($uses) && $uses->sexo == 'M')selected @endif >Masculino</option>
                                <option value="F" @if(isset($uses) && $uses->sexo == 'F')selected @endif>Feminino</option>
                            </select>
                            @error('sexo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Telefone</label>
                            <input type="text" name="telefone" value="{{$uses->telefone ?? ''}}" class="form-control @error('telefone') is-invalid @enderror" />
                            @error('telefone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="row">
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Estado</label>
                            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Cidade</label>
                            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">CEP</label>
                            <input type="text" name="cep" value="{{$resp->cep ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Rua</label>
                            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Complemento</label>
                            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3">
                            <label for="">Bairro</label>
                            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3 col-sm-6 col-lg-3 text-start align-content-center mt-3" id="exluir">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 mt-4">
                        <!-- <span type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalResponsavel"> -->
                        <span type="button" class="btn btn-success" id="inserir">
                            <i class="bi bi-person-plus-fill fa-2x"></i>
                            Adicionar Novo Responsável
                        </span>
                    </div>
                </div>

                <hr class="my-3">

                <div class="row">

                    <div class="col-12">
                        <h5 class="text-laranja">Adicionar Aluno</h5>
                    </div>

                    <div class="col-3 mt-3">
                        <span type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalResponsavel">
                            <i class="bi bi-person-plus-fill fa-2x"></i>
                            Adicionar
                        </span>

                        <div class="modal fade" id="modalResponsavel" tabindex="-1" aria-labelledby="modalResponsavelLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modalResponsavelLabel">
                                            <i class="bi bi-person-plus-fill fa-2x"></i>
                                            Adicionar Aluno
                                        </h4>
                                        <span type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                                    </div>
                                    <div class="modal-body">
                                        <!-- @include('admin.responsavel.form') -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-3">

                <div class="col-12">
                    <h5 class="text-laranja">Dados de acesso</h5>
                </div>

                <div class="row mt-2">
                    <div class="col-4">
                        <label for="" class="form-label">Tipo de Usuário</label>
                        <select class="form-select @error('perfil') is-invalid @enderror" name="perfil">
                            <option value="1" @if(isset($uses) && $uses->perfil == '1')selected @endif >Usuário</option>
                            <option value="2" @if(isset($uses) && $uses->perfil == '2')selected @endif>Administrador</option>
                        </select>
                        @error('perfil')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" value="{{$uses->email ?? ''}}" class="form-control  @error('email') is-invalid @enderror" />
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label">Senha</label>
                        <input type="password" name="password" value="{{$uses->password ?? ''}}" class="form-control @error('password') is-invalid @enderror" />
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
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

<script src="{{ asset('js/responsavel.js') }}"></script>

@endsection