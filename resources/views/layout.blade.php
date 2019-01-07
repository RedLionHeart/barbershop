<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Barbershop / catalog</title>
    @include('layouts.link')
</head>
<body>

@include("layouts.nav")

@yield('content')

<!-- Футер -->
@include("layouts.footer")

  <!--[if gte IE 7]><script src="js/classlistIE.js"></script><![endif]-->
<script src="js/main.js"></script>

</body>
</html>
