<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../favicon.ico">

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons|Material+Icons+Outlined"
        rel="stylesheet" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

</head>

<body class="{{ $body_class ?? '' }} sidebar-collapse">
    <!-- NAVBAR -->
    {{-- <nav class="navbar navbar-cba fixed-top navbar-expand-lg"> --}}
    <nav class="navbar navbar-color-on-scroll navbar-transparent navbar-cba fixed-top navbar-expand-lg"
        color-on-scroll="100" id="sectionsNav">
        {{-- <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav"> --}}
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/">
                    {{ config('app.name', 'Laravel') }} </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    
                    
                    @guest
                      <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="material-icons">lock</i> Iniciar sesión</a>
                        </li>
                    @else
                        @if(Auth::user()->role == 'ADMIN')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin') }}"><i class="material-icons">settings</i> Admin</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons">lock</i>  Cerrar sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cancelar') }}"><i class="material-icons">highlight_off</i> Anular mi reserva</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-white btn-raised btn-round " style="color:grey"
                            href="agendar">
                            <i class="material-icons">timer</i> Agendar</a>
                    </li> 
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    @yield('page')

    <footer class="footer" data-background-color="black">
        <div class="container">
            <nav class="">
                <ul>
                    <li>
                        <a href="https://cba.usach.cl">
                            CBA Usach
                        </a>
                    </li>
                </ul>
            </nav>
    </footer>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/material-kit/core/bootstrap-material-design.min.js') }}" defer></script>
    <script src="{{ asset('js/material-kit/plugins/bootstrap-datetimepicker.js') }}" defer> </script>
    <script src="{{ asset('js/material-kit/plugins/nouislider.min.js') }}" defer></script>
    <script src="{{ asset('js/material-kit.js') }}" defer></script>

    @yield('custom_footer')

</body>

</html>