<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    @include('partials._admin_head')
  </head>

  <body class="">
    <!-- Side Navbar -->
        @include('partials._admin_sidebar')
    
        <div class="page home-page">
            @include('partials._admin_header')
                           
            <div class="main">
            @yield('content')
            </div>
            
            @include('partials._admin_footer')
            
        </div>
    <!-- Scripts -->
    @include('partials._admin_scripts')
    <!-- End Scripts -->

    </body>
</html>
