<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../favicon.png">

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
        rel="stylesheet" />
    
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet" />
</head>

<body class="{{ $body_class ?? '' }} sidebar-collapse">
    <!-- NAVBAR -->
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg bg-primary" color-on-scroll="100"
        id="sectionsNav">
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
                            <a class="nav-link" href="{{ route('login') }}">Revisar mis reservas</a>
                        </li>
                        @if(Route::has('register'))
                        
                        <li class="nav-item">
                            <a class="nav-link btn btn-white btn-raised btn-round " style="color:grey" href="#">
                            <i class="material-icons">timer</i> Agendar</a>
                        </li>
                        {{--
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">
                                <i class="material-icons">account_circle</i>Registrarme</a>
                            </li>
                        --}}
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i
                                class="material-icons">user</i> {{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons">key</i> Cerrar sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>

                    @endguest
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
            <a href="https://www.creative-tim.com/presentation">
              CBA Usach
            </a>
          </li>
        </ul>
      </nav>
  </footer>

    <!--span>Photo by Jeremy Bishop on <a href="https://unsplash.com/s/photos/abstract?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span-->
    
    <script src="{{ asset('js/material-kit/core/jquery.min.js') }}"  defer></script>
    <script src="{{ asset('js/material-kit/core/popper.min.js') }}"  defer></script>
    <script src="{{ asset('js/material-kit/core/bootstrap-material-design.min.js') }}"  defer></script>
    <script src="{{ asset('js/material-kit/plugins/moment.min.js') }}" defer></script>
    <script src="{{ asset('js/material-kit/plugins/bootstrap-datetimepicker.js') }}"  defer></script>
    <script src="{{ asset('js/material-kit/plugins/nouislider.min.js') }}"  defer></script>
    <script src="{{ asset('js/material-kit.js') }}" defer></script>

    @yield('custom_footer')

</body>

</html>