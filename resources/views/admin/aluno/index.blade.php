@extends('admin.layout.app')

@section('content')

<h1>Alunos</h1>

<div class="container-fluid">
    <div class="col-12">
        <a class="btn btn-primary" href="{{ route('aluno.create') }}">Novo Aluno</a>
    </div>
</div>

@if (session('msg'))
<div class="alert alert-success">
    {{ session('msg') }}
</div>
@endif

<div class="container-fluid">
    <div class="col-12">
        <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Responsável</th>
                    <th scope="col">Tuma</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $aluno)
                <tr>
                    <td>
                        {{$aluno->matricula}} - {{$aluno->nome}}
                    </td>
                    <td>{{$aluno->turma}} - {{$aluno->turno}}</td>
                    <td>{{$aluno->responsavel}}</td>
                    <td>
                        <a href="{{ route('aluno.edit', $aluno->id) }}">
                            <button type="button" class="btn  btn-sm btn-primary">
                                <i class="bi bi-pencil-square fa-x"></i>
                                Editar
                            </button>
                        </a>

                        <form action="{{ route('aluno.destroy', $aluno->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-x-square"></i>
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection