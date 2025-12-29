<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>@yield('title', 'Мой сайт')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Подключение CSS -->

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/png">


    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="/assets/css/vendor/jquery-ui.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="/assets/css/plugins/venobox.min.css">


    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/modalForm.css">

</head>
<body>

<!-- Шапка -->


<!-- Основной контент -->

    @yield('content')


<!-- Подвал -->
<!-- ::::::::::::::All JS Files here :::::::::::::: -->
<!-- Global Vendor, plugins JS -->
<script src="/assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="/assets/js/vendor/jquery-ui.min.js"></script>

<!--Plugins JS-->
<script src="/assets/js/plugins/slick.min.js"></script>
<script src="/assets/js/plugins/material-scrolltop.js"></script>
<script src="/assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="/assets/js/plugins/jquery.zoom.min.js"></script>
<script src="/assets/js/plugins/venobox.min.js"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <script src="assets/js/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script> -->

<!-- Main JS -->
<script src="/assets/js/main.js"></script>
<script src="/assets/js/modalForm.js"></script>


</body>
</html>
