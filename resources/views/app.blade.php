<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

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
