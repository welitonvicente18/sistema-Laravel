@extends('admin.layout.app')

@section('content')

<h1>@if(isset($aluno))Editar @else Novo Aluno(a) @endif</h1>

<div class="container-fluid">
    <div class="row  mycard shadow-sm">

        <div class="row">
            <div class="col-12">
                <h5>@if(isset($aluno)) Editar do aluno @else Cadastro do aluno @endif</h5>
                <span class="opacity-75">Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor.</span>
            </div>
        </div>
        <div class="row">
            @if(isset($aluno))
            <form action="{{ route('aluno.update', $aluno->id) }}" method="POST" class="row mt-4">
                @method('PUT')
                @else
                <form action="{{ route('aluno.store') }}" method="POST" class="row mt-4">
                    @method('POST')
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Nome</label>
                            <input type="text" name="nome" value="{{$aluno->nome ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">CPF</label>
                            <input type="text" name="cpf" value="{{$aluno->cpf ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Data de Nascimento</label>
                            <input type="date" name="dt_nascimento" value="{{$aluno->dt_nascimento ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Sexo</label>
                            <select class="form-select" name="sexo" aria-label="Default select example">
                                <option value="" @if(isset($aluno) && $aluno->sexo == '' )selected @endif>Escolha...</option>
                                <option value="M" @if(isset($aluno) && $aluno->sexo == 'M')selected @endif >Masculino</option>
                                <option value="F" @if(isset($aluno) && $aluno->sexo == 'F')selected @endif>Feminino</option>

                            </select>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Matrícula</label>
                            <input type="text" name="matricula" value="{{$aluno->matricula ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Turma</label>
                            <input type="text" name="turma" value="{{$aluno->turma ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Turno</label>
                            <input type="text" name="turno" value="{{$aluno->turno ?? ''}}" class="form-control" />
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Responsável</label>
                            <input type="text" name="responsavel" value="{{$aluno->responsavel ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Parentesco</label>
                            <select name="parentesco" class="form-select">
                                <option value="">Escolha...</option>
                                <option value="pai" @if(isset($aluno) && $aluno->parentesco == 'pai'){selected}@endif>Pai</option>
                                <option value="mae" @if(isset($aluno) && $aluno->parentesco == 'mae'){selected} @endif>Mãe</option>
                                <option value="Avó/Avô" @if(isset($aluno) && $aluno->parentesco == 'Avó/Avô'){selected} @endif>Avó/Avô</option>
                                <option value="Tia/Tio" @if(isset($aluno) && $aluno->parentesco == 'Tia/Tio'){selected} @endif>Tia/Tio</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" value="{{$aluno->email ?? ''}}" class="form-control" />
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Telefone</label>
                            <input type="text" name="telefone" value="{{$aluno->telefone ?? ''}}" class="form-control" />
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">@if(isset($aluno)) Atualizar @else Cadastrar @endif</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection