@extends('admin.layout.app')

@section('section') <span class="fs-4 opacity-50"> Aluno</span> @endsection

@section('button')
<a class="btn btn-laranja" href="{{ route('aluno.create')}}"> <i class="bi bi-people-fill"></i> Novo Aluno</a>
@endsection

@section('content')

<table class="table table-light table-striped table-hover table-responsive mt-3">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col" class="col-2">Responsável</th>
            <th scope="col" class="col-2">Tuma</th>
            <th scope="col" class="col-2">Ações</th>
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
            <td class="justify-content-around d-flex text-center">
                <a href="{{ route('aluno.edit', $aluno->id) }}">
                    <button type="button" class="btn  btn-sm btn-laranja">
                        <i class="bi bi-pencil-square fa-x"></i>
                        Editar
                    </button>
                </a>

                <form action="{{ route('aluno.destroy', $aluno->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Deseja realmente excluir essa registro?')">
                        <i class="bi bi-x-square"></i>
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection