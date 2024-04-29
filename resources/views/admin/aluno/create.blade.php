@extends('admin.layout.app')

@section('content')

<h1>Novo Aluno(a)</h1>

<div class="container-fluid">
    <div class="row  mycard shadow-sm">

        <div class="row">
            <div class="col-12">
                <h5>Cadastro do aluno</h5>
                <span class="opacity-75">Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor.</span>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('aluno.store') }}" method="POST" class="row mt-4">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" />
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">CPF</label>
                        <input type="text" name="cpf" class="form-control" />
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Data de Nascimento</label>
                        <input type="date" name="dt_nascimento" class="form-control" />
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Sexo</label>
                        <select class="form-select" name="sexo" aria-label="Default select example">
                            <option value="">Escolha...</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>

                        </select>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row">
                    <div class="col-3">
                        <label for="" class="form-label">Matrícula</label>
                        <input type="text" name="matricula" class="form-control" />
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Turma</label>
                        <input type="text" name="turma" class="form-control" />
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Turno</label>
                        <input type="text" name="turno" class="form-control" />
                    </div>
                </div>

                <hr class="my-4">

                <div class="row">
                    <div class="col-3">
                        <label for="" class="form-label">Responsável</label>
                        <input type="text" name="responsavel" class="form-control" />
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control" />
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection