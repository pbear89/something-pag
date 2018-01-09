<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

    @include('partials._head')

    </head>
    <body class="index-page sidebar-collapse">
        
        @include('partials._navigation')
    
        @include('partials._header')
       
        @yield('images')
        
@include('partials._portfolio')

        @yield('instagram')

        @include('partials._prefooter')
        @include('partials._footer')
        
<!-- Scripts -->
@include('partials._scripts')
<!-- End Scripts -->

    </body>
</html>
