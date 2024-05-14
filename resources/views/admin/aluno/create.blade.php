@extends('admin.layout.app')

@section('section') <span class="fs-4 opacity-50"> Aluno</span> / <span class="text-laranja-2">@if(isset($uses))Editar{{$uses->name}} @else Novo @endif</span> @endsection

@section('content')

<div class="container-fluid">
    <div class="row  mycard shadow-sm">

        <div class="row">
            <div class="col-12">
                <h5 class="text-laranja">@if(isset($aluno)) Editar do aluno @else Cadastro do aluno @endif</h5>
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
                            <label for="" class="form-label">Responsável</label>
                            <select name="id_responsavel" value="{{$aluno->id_responsavel ?? ''}}" class="form-control @error('id_responsavel') is-invalid @enderror">
                                <option @if(isset($aluno->id_responsavel) &&$aluno->id_responsavel == '') selected @endif >Escolha...</option>
                                <option value="1" @if(isset($aluno->id_responsavel) && $aluno->id_responsavel == '1') selected @endif >111</option>
                            </select>
                            @error('id_responsavel')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="clear"></div>
                        <div class="col-3">
                            <label for="" class="form-label">Nome</label>
                            <input type="text" name="nome" value="{{$aluno->nome ?? ''}}" class="form-control @error('nome') is-invalid @enderror" />
                            @error('nome')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">CPF</label>
                            <input type="text" name="cpf" value="{{$aluno->cpf ?? ''}}" class="form-control @error('cpf') is-invalid @enderror" />
                            @error('cpf')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Data de Nascimento</label>
                            <input type="date" name="dt_nascimento" value="{{$aluno->dt_nascimento ?? ''}}" class="form-control @error('dt_nascimento') is-invalid @enderror " />
                            @error('dt_nascimento')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Sexo</label>
                            <select class="form-select" name="sexo" aria-label="select @error('sexo') is-invalid @enderror>
                                <option value="" @if(isset($aluno) && $aluno->sexo == '' )selected @endif>Escolha...</option>
                                <option value=" M" @if(isset($aluno) && $aluno->sexo == 'M')selected @endif >Masculino</option>
                                <option value="F" @if(isset($aluno) && $aluno->sexo == 'F')selected @endif>Feminino</option>
                            </select>
                            @error('sexo')
                            <span class="text-danfer">{{$$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Matrícula</label>
                            <input type="text" name="matricula" value="{{$aluno->matricula ?? ''}}" class="form-control @error('matricula') is-invalid @enderror" />
                            @error('matricula')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Turma</label>
                            <input type="text" name="turma" value="{{$aluno->turma ?? ''}}" class="form-control @error('turma') is-invalid @enderror" />
                            @error('turma')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Turno</label>
                            <input type="text" name="turno" value="{{$aluno->turno ?? ''}}" class="form-control @error('turno') is-invalid @enderror" />
                            @error('turno')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Parentesco</label>
                            <select name="parentesco" class="form-select @error('parentesco') is-invalid @enderror">
                                <option value="">Escolha...</option>
                                <option value="pai" @if(isset($aluno) && $aluno->parentesco == 'pai')selected @endif>Pai</option>
                                <option value="mae" @if(isset($aluno) && $aluno->parentesco == 'mae')selected @endif>Mãe</option>
                                <option value="Avó/Avô" @if(isset($aluno) && $aluno->parentesco == 'Avó/Avô') selected @endif>Avó/Avô</option>
                                <option value="Tia/Tio" @if(isset($aluno) && $aluno->parentesco == 'Tia/Tio') selected @endif>Tia/Tio</option>
                            </select>
                            @error('parentesco')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" value="{{$aluno->email ?? ''}}" class="form-control @error('email') is-invalid @enderror" />
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="" class="form-label">Telefone</label>
                            <input type="text" name="telefone" value="{{$aluno->telefone ?? ''}}" class="form-control @error('telefone') is-invalid @enderror" />
                            @error('telefone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-laranja">@if(isset($aluno)) Atualizar @else Cadastrar @endif</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection