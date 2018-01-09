<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

    @include('partials._head')

    </head>
    <body class="landing-page sidebar-collapse">
               
        @include('partials._navigation')
        <div class="wrapper">
        @include('partials._header2')
            
            @yield('content')

        </div>

        @include('partials._prefooter')
        @include('partials._footer')
        
<!-- Scripts -->
@include('partials._scripts')
<!-- End Scripts -->

    </body>
</html>
