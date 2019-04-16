<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Barbershop / Новости</title>
    @include('layouts.link')
</head>
<body>

<!-- Хедер, он же верхнее навигационное меню -->
@include("layouts.nav")

<!-- Форма входа -->
@include('layouts.login_form')

<!-- Контентная часть -->
<div class="container">
    <main class="price-main">

        <div class="page-title">Barbershop Borodinski - Новости</div>
        <ul class="breadcrumbs price">
            <li><a href="{{url('/')}}">Главная</a></li>
            <li>Новости</li>
        </ul>

    </main>
</div>

<!-- Футер -->
@include("layouts.footer")

  <!--[if gte IE 7]><script src="js/classlistIE.js"></script><![endif]-->
<script src="js/main.js"></script>

</body>
</html>
