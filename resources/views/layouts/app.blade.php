<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>@yield('title', 'CATALOG')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Подключение CSS -->

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <!-- fontello css -->
    <link rel="stylesheet" href="/assets/css/fontello.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="/assets/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="/assets/css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/css/modalForm.css">

    <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>

</head>
<body>

<!--Loader-->



<!-- Основной контент -->

    @yield('content')

<!-- jquery 3.2.1 -->
<script src="/assets/js/vendor/jquery-3.2.1.min.js"></script>
<!-- Countdown js -->
<script src="/assets/js/jquery.countdown.min.js"></script>
<!-- Mobile menu js -->
<script src="/assets/js/jquery.meanmenu.min.js"></script>
<!-- ScrollUp js -->
<script src="/assets/js/jquery.scrollUp.js"></script>
<!-- Fancybox js -->
<script src="/assets/js/jquery.fancybox.min.js"></script>
<!-- Jquery nice select js -->
<script src="/assets/js/jquery.nice-select.min.js"></script>
<!-- Jquery ui price slider js -->
<script src="/assets/js/jquery-ui.min.js"></script>
<!-- Owl carousel -->
<script src="/assets/js/owl.carousel.min.js"></script>
<!-- Bootstrap popper js -->
<script src="/assets/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- Plugin js -->
<script src="/assets/js/plugins.js"></script>
<!-- Main activaion js -->
<script src="/assets/js/main.js"></script>

<script src="/js/modalForm.js"></script>
</body>
</html>
