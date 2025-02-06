<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="No Index">
    <meta name="keywords" content="">
    <meta name="theme-color" content="#cca05a">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- preload assets -->
    <link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/rubik-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/rubik-v9-latin-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/rubik-v9-latin-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="css/style.css" as="style">
    <link rel="preload" href="js/vendors/uikit.min.js" as="script">
    {{-- <link rel="preload" href="js/utilities.min.js" as="script"> --}}
    <link rel="preload" href="js/config-theme.js" as="script">
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- uikit -->
    <script src="js/vendors/uikit.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="img/logo/favicon3.ico" type="image/x-icon">
    <!-- touch icon -->
    <link rel="apple-touch-icon-precomposed" href="img/logo/apple-touch-icon.png">
    <title>Volta Asia | @yield('title') </title>
</head>

<body>
    <!-- page loader begin -->
    <div class="page-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- page loader end -->

    <header>
        @yield('header')
    </header>

    @yield('contents')

    <footer>
        @include('Layouts.footer')
    </footer>

    <!-- to top begin -->
    <a href="#" class="to-top uk-visible@m" data-uk-scroll>
        Top<i class="fas fa-chevron-up" ></i>
    </a>
    <!-- to top end -->
    <!-- javascript -->
    <script src="js/utilities.min.js"></script>
    <script src="js/config-theme.js"></script>
    @yield('scripts')
</body>

</html>