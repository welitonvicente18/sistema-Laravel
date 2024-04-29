<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">

        <nav id="navBar" class="shadow-sm">
            <!-- @extends('admin.layout.navbar') -->
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </nav>

        <aside id="aside" class="shadow-sm">
            <ul class="">
                <li class="">
                    <a class="" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="">
                    <a class="" href="{{route('profile.edit')}}">Usuários</a>
                </li>
                <li class="">
                    <a class="" href="{{route('aluno.index')}}">Alunos</a>
                </li>
                <li class="">
                    <a class=" disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </aside>

        <main id="conteudo" class="p-3">
            @yield('content')
        </main>

        <footer id="footer">
            @yield('footer')
        </footer>
    </div>
</body>

</html>