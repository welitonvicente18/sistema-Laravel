@extends('admin.layout.app')

@section('content')

<h1>Usuário</h1>

<div class="container-fluid">
    <div class="col-12">
        <a class="btn btn-primary" href="{{ route('responsavel.create') }}">Novo Usuário</a>
    </div>
</div>

@if (session('msg'))
<div class="alert alert-success">
    {{ session('msg') }}
</div>
@endif

<table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm mt-5">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user )
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td></td>
            <td>
                <a class="btn btn-primary" href="{{ route('profile.edit', $user->id) }}">
                    <button type="submit" class="btn btn-sm btn-primary ">
                        <i class="bi bi-pencil-square fa-x"></i>
                        Editar
                    </button>
                </a>
                <form action="{{ route('profile.destroy', $user->id) }}" method="post">
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

@endsection