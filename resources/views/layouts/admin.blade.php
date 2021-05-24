<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<style>
    *{
        box-sizing: border-box;
    }
    body{
        display: flex;
        flex-wrap: nowrap;
        height: 100vh;
        max-height: 100vh;
        overflow-x: auto;
        overflow-y: hidden;
    }

    main{
        overflow-x: hidden;
        overflow-y: auto;
    }

    .sidebar{
        flex-grow: 1;
    }
    .konten{
        flex-grow: 80;
    }
    .nav-flush .nav-link {
        border-radius: 0;
    }

    .btn-toggle-nav a {
        display: inline-flex;
        padding: .1875rem .5rem;
        margin-top: .125rem;
        margin-left: 1.25rem;
        text-decoration: none;
    }
    .btn-toggle-nav a:hover,
    .btn-toggle-nav a:focus {
        background-color: gray;
    }

</style>

<body>
    <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="/admin" class="nav-link text-white">
            <span class="fs-4">{{ Auth::user()->name }}</span>
        </a>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="btn-toggle-nav">
                <a href="/admin/users" class="nav-link text-white" aria-current="page">
                Users
                </a>
            </li>
            <li class="btn-toggle-nav">
                <a href="/admin/customers" class="nav-link text-white">
                Customers
                </a>
            </li>
            <li class="btn-toggle-nav">
                <a href="#" class="nav-link text-white">
                Orders
                </a>
            </li>
            <li class="btn-toggle-nav">
                <a href="#" class="nav-link text-white">
                Products
                </a>
            </li>
        </ul>
        <hr>
        <a href="{{ route('logout') }}" class="nav-link text-white" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    <main class="konten d-flex flex-column flex-shrink-0 p-3">
        @yield('konten')
    </main>
</body>
