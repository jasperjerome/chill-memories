<!doctype html>
<html lang="en">

<head>
    @include('components.app.head')
    @yield('css')
</head>

<body class="tt-magic-cursor style-2">

    {{-- @include('components.app.preloader') --}}

    @auth
    @include('components.app.header')
    @endauth


    <div class="dashboard-wrapper">
        @auth
        @include('components.app.sidebar')
        @endauth

        @yield('content')

        @include('components.app.footer')
    </div>


    @include('components.app.script')

    @yield('script')
</body>

</html>
