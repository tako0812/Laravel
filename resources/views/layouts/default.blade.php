<!DOCTYPE html>
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
</head>
<body>
</body>
    <header class="fixed-top p-3 mb-2 bg-dark text-white">
        <div class="container d-flex justify-content-between">
            <div>
                <h1 class="h3 font-weight">ワンストップマーケット</h1>
            </div>
            <div>
            @auth
                <ul class="nav align-items-center">
                    <li class="nav-item mr-3">
                        {{ Auth::user()->name }}としてログイン中
                    </li>
                    {{--  <li class="nav-item mr-3">
                    (
                    @foreach (Auth::user()->roles as $role)
                        {{ $role->name }}
                        @if ($loop->remaining > 0)
                         / 
                        @endif
                    @endforeach
                    )
                    </li>  --}}
                    <li class="nav-item mr-3">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <input class="btn btn-sm" type="submit" name="" value="ログアウト">
                        </form>
                    </li>
                </ul>
            @endauth
            </div>
        </div>
    </header>
    <main style="margin-top: 6rem">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer class="fixed-bottom p-3 bg-dark text-white">
        <div class="container text-center">
            <small>(c) 2020 TODO APPS.</small>
        </div>
    </footer>
</html>