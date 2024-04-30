@extends('admin.layout.app')

@section('content')

<h1>@if(isset($resp))Editar @else Novo Responsavel(a) @endif</h1>

<div class="container-fluid">
    <div class="row  mycard shadow-sm">
        <div class="row">
            <div class="col-12">
                <h5>@if(isset($resp)) Editar do Responsável @else Cadastro do Responsável @endif</h5>
                <span class="opacity-75">Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor.</span>
            </div>
        </div>
        <div class="row">
            @yield('formulario')
        </div>
    </div>
</div>
@endsection