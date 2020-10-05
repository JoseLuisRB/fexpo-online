<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="{{ url('landing_page/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ url('landing_page/css/mdb.min.css') }}" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="{{ url('landing_page/css/style.min.css') }}" rel="stylesheet">
        <style type="text/css">
            /* Necessary for full page carousel*/
            html,
            body,
            header,
            .view {
                height: 100%;
                }

                /* Carousel*/
                .carousel,
                .carousel-item,
                .carousel-item.active {
                height: 100%;
                }
                .carousel-inner {
                height: 100%;
                }

                @media (min-width: 800px) and (max-width: 850px) {
                .navbar:not(.top-nav-collapse) {
                    background: #1C2331!important;
                }
            }

        </style>
    </head>
    <body>
        
        @include('landing_page.layouts.header')

        @yield('content')

        @include('landing_page.layouts.footer')

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="{{ url('landing_page/js/jquery-3.4.1.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ url('landing_page/js/popper.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ url('landing_page/js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ url('landing_page/js/mdb.min.js') }}"></script>
        <!-- Initializations -->
        <script type="text/javascript">
            // Animations initialization
            new WOW().init();
        </script>
    </body>
</html>