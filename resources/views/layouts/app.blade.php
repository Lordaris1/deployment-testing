<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hinulawanlab</title>
    <!-- <link rel="icon" href="/img/tinda-logo-green.png" type="image/x-icon"> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    



</head>

<body>
    <div id="app">
        <!-- Navbar Component -->
        <navbar-component></navbar-component>
         <!-- Carousel Component -->
         <carousel-component></carousel-component>
        <div class="container-fluid">

            <!-- Header Component -->
            <header-component></header-component>

            <!-- App Banner Component -->
            <app-banner-component></app-banner-component>

            <!-- Services Component -->
            <services-component></services-component>

            <!-- A-T Component -->
            <article-testimonies-component></article-testimonies-component>

          
        
        </div>
          <!-- Footer Component -->
            <footer-component></footer-component>
        
    </div>
    <main>
        @yield('content')
    </main>

    
</body>

</html>
