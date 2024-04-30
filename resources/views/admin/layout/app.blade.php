<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">

        <nav id="navBar" class="shadow-sm">
            <!-- @extends('admin.layout.navbar') -->
            <ul class="nav">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('profile.edit')}}">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                </li>
            </ul>
        </nav>

        <aside id="aside" class="shadow-sm">
            <ul class="">
                <li class="">
                    <a class="" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="">
                    <a class="" href="{{route('register.index')}}">Usuários</a>
                </li>
                <li class="">
                    <a class="" href="{{route('aluno.index')}}">Alunos</a>
                </li>
                <li class="">
                    <a class=" disabled" href="{{ route('responsavel.index')}}">Responsável</a>
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