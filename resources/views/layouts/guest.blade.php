<!doctype html>
<html lang="en">

@include('components.guest.head')

@yield('css')
<body>

    @include('components.guest.header')


<div class="container_wrapper">
    @yield('content')
</div>


    @include('components.guest.footer')


    @include('components.guest.script')

    @yield('script')
</body>

</html>
