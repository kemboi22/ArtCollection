<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/js/bootstrap.bundle.min.js"])
        @vite([
            "resources/css/about.css",
            "resources/css/blog.css",
            "resources/css/bootstrap.min.css",
            "resources/css/cart.css",
            "resources/css/checkout.css",
            "resources/css/font-awesome.min.css",
            "resources/css/global.css",
            "resources/css/index.css",
            "resources/css/product.css",
        ])

        @vite([
            "resources/css/Admin/argon-dashboard-tailwind.min.css",
            "resources/css/Admin/nucleo-icons.css",
            "resources/css/Admin/nucleo-svg.css",
            "resources/css/Admin/perfect-scrollbar.css",
            "resources/css/Admin/tooltips.css",
        ])

        @vite([
            "resources/js/js/Admin/argon-dashboard-tailwind.min.js",
            "resources/js/js/Admin/carousel.js",
            "resources/js/js/Admin/charts.js",
            "resources/js/js/Admin/dropdown.js",
            "resources/js/js/Admin/fixed-plugin.js",
            "resources/js/js/Admin/nav-pills.js",
            "resources/js/js/Admin/navbar-sticky.js",
            "resources/js/js/Admin/perfect-scrollbar.js",
            "resources/js/js/Admin/sidenav-burger.js",
            "resources/js/js/Admin/tooltips.js",
            "resources/js/js/Admin/plugins/Chart.extension.js",
            "resources/js/js/Admin/chart.min.js",
            "resources/js/js/Admin/perfect-scrollbar.min.js",


        ])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    <script>
        window.onscroll = function() {myFunction()};

        var navbar_sticky = document.getElementById("navbar_sticky");
        var sticky = navbar_sticky.offsetTop;
        var navbar_height = document.querySelector('.navbar').offsetHeight;

        function myFunction() {
            if (window.pageYOffset >= sticky + navbar_height) {
                navbar_sticky.classList.add("sticky")
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                navbar_sticky.classList.remove("sticky");
                document.body.style.paddingTop = '0'
            }
        }
    </script>
    </body>
</html>
