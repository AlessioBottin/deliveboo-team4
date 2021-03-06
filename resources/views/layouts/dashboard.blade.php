<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Deliveboo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('more_stylesheets')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark flex-md-nowrap p-0" style="background-color: #ffce08;" >
        <a class="navbar-brand col-sm-3 col-md-2 mr-0"href="{{ route('admin.home') }}" style="color:black; font-weight:bold; font-family:'American Purpose'; font-size: 35px; margin-left: 20px">Deliveboo</a>
        <ul class="navbar-nav px-3 ml-auto">
            <li class="nav-item">
                <a class="nav-link" style="color:black"  href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar py-4" style="background-color: #ffce08;">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">

                        {{-- Dashboard  --}}
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.home') }}">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> --}}
                                <i class="fas fa-home" style="color: #ffce08"></i>
                                Dashboard
                            </a>
                        </li>

                        {{-- All Plates  --}}
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.plates.index') }}">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> --}}
                                <i class="fas fa-utensils" style="color: #ffce08"></i>
                                Tutti i Piatti
                            </a>
                        </li>

                        {{-- Create Plate  --}}
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.plates.create') }}">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> --}}
                                <i class="fa-solid fa-circle-plus" style="color: #ffce08"></i>
                                Crea Piatto
                            </a>
                        </li>

                        {{-- Order List  --}}
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.orders') }}">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> --}}
                                <i class="fa-solid fa-list" style="color: #ffce08"></i>
                                Lista Ordini
                            </a>
                        </li>

                        {{-- Order Statistics  --}}
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.orders-statistics') }}">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> --}}
                                <i class="fa-solid fa-chart-bar" style="color: #ffce08"></i>
                                Statistiche degli Ordini
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 py-4">
                <div id="app">
                    @yield('content')
                </div>

                <script src="{{asset('js/back.js')}}"></script>
            </main>
        </div>
    </div>

    @yield('more_js')
</body>
</html>