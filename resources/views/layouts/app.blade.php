<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CoreUI CSS -->
 <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
 <title>Embeltore Lina</title>

 </head>
 <body class="c-app">
    @include('partials.menu')
    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            {{-- <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li> --}}
        
        </header>
            <div class="c-body">
                <main class="c-main">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>
            </div>
        <footer class="c-footer"></footer>
        </div>

 <!-- Optional JavaScript -->
 <!-- Popper.js first, then CoreUI JS -->
 <script src="https://unpkg.com/@popperjs/core@2"></script>
 <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
 </body>
</html> 
