@extends('admin.layout.app')

@section('section') <span class="fs-4 opacity-50"> Responsável/Aluno</span> @endsection

@section('content')

<h1>Responsável</h1>

<div class="container-fluid">
    <div class="col-12">
        <a class="btn btn-laranaja" href="{{ route('responsavel.create') }}">Novo Responsável</a>
    </div>
</div>

<table class="table table-light table-striped table-hover table-responsive mt-3">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>6
    </tbody>
</table>

@endsection