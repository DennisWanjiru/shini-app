<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials._styles')       
    </head>
    <body>
        <header>
            @include('partials._navbar')
        </header>

        @yield('content')

        @include('partials._scripts')
    </body>
</html>
