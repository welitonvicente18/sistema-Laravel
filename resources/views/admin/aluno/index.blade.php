@extends('admin.layout.app')

@section('content')

<h1>Alunos</h1>

<div class="container-fluid">
    <div class="col-12">
        <a class="btn btn-primary" href="{{ route('aluno.create') }}">Novo Aluno</a>
    </div>
</div>

<div class="container-fluid">
    <div class="col-12">
        <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Responsável</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $aluno)
                <tr>
                    <td>{{$aluno->nome}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection