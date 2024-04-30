@extends('admin.layout.app')

@section('content')

<h1>Responsável</h1>

<div class="container-fluid">
    <div class="col-12">
        <a class="btn btn-primary" href="{{ route('responsavel.create') }}">Novo Responsável</a>
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
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

@endsection