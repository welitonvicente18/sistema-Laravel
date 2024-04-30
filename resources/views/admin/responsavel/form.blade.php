@extends('admin.responsavel.create')

@section('formulario')

<form action="{{ route('aluno.store') }}" method="POST" class="row mt-4">
    @csrf
    @method('POST')
    <div class="row">
        <div class="col-3">
            <label for="">Parentesco</label>
            <input type="text" name="parentesco" value="{{$resp->parentesco ?? ''}}" class="form-control" />
        </div>
        <div class="clear"></div>
        <div class="col-3">
            <label for="">Nome</label>
            <input type="text" name="nome" value="{{$resp->nome ?? ''}}" class="form-control" />
        </div>
        <div class="col-3">
            <label for="">CPF</label>
            <input type="text" name="cpf" value="{{$resp->cpf ?? ''}}" class="form-control" />
        </div>
        <div class="col-3">
            <label for="">RG</label>
            <input type="text" name="rg" value="{{$resp->rg ?? ''}}" class="form-control" />
        </div>
        <div class="clear"></div>
        <div class="col-3">
            <label for="">Data nascimento</label>
            <input type="date" name="dt_nascimento" value="{{$resp->dt_nascimento ?? ''}}" class="form-control" />
        </div>
        <div class="col-3">
            <label for="">Sexo</label>
            <select name="sexo" class="form-select">
                <option value=""></option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
        </div>
        <div class="clear"></div>
        <div class="col-3">
            <label for="">E-mail</label>
            <input type="text" name="email" value="{{$resp->email ?? ''}}" class="form-control" />
        </div>
        <div class="col-3">
            <label for="">Telefone</label>
            <input type="text" name="telefone" value="{{$resp->telefone ?? ''}}" class="form-control" />
        </div>
    </div>

    <hr class="my-3">

    <div class="row">
        <div class="col-3">
            <label for="">Estado</label>
            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
        </div>
        <div class="col-3">
            <label for="">Cidade</label>
            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
        </div>
        <div class="col-3">
            <label for="">CEP</label>
            <input type="text" name="cep" value="{{$resp->cep ?? ''}}" class="form-control" />
        </div>
        <div class="col-3">
            <label for="">Rua</label>
            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
        </div>
        <div class="col-3">
            <label for="">Complemento</label>
            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
        </div>
        <div class="col-3">
            <label for="">Bairro</label>
            <input type="text" name="rua" value="{{$resp->rua ?? ''}}" class="form-control" />
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <h5>Aluno</h5>
        </div>
    </div>
    <hr class="my-3">

    <div class="row">
        <div class="col-3">
        </div>
    </div>
</form>
@endsection