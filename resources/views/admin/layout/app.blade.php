<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema - WCode</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">

        @include('admin.layout.aside')

        <div id="main">

            @include('admin.layout.navbar')

            <main id="conteudo" class="py-3">

                <section class="row">
                    <h2>@yield('section')</h2>
                </section>

                <hr class="mt-1">

                <div class="row mt-4">
                    <div class="col-12">
                        @yield('button')
                    </div>
                </div>

                @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
                @endif

                @yield('content')
            </main>
        </div>

        <footer id="footer">
        </footer>
    </div>
</body>

</html>