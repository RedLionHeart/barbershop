<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Barbershop / Корзина</title>
    @include('layouts.link')
</head>
<body>

<!-- Хедер, он же верхнее навигационное меню -->
@include("layouts.nav")

<div class="container">
    <main>
        <h1 class="page-title">Barbershop Borodinski - Корзина</h1>
        <ul class="breadcrumbs">
            <li><a href="{{url('/')}}">Главная</a></li>
            <li>Корзина</li>
        </ul>
    </main>

    @if(Session::has('cart'))

        <table class="cart">
            <tr>
                <td>№</td>
                <td>Наименование</td>
                <td>Цена</td>
                <td>Количество</td>
                <td>Сумма</td>
                <td></td>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$count++}}</td>
                    <td class="cart-item">
                        <a href="{{ url('/shop', $product['item']['slug'])}}"><div class="img-cart-item"><img src="{{$product['item']['pict_way']}}" height="80" width="100"  alt="Набор для путешествий"></div></a>
                        <a href="shop/{{$product["item"]["slug"]}}">{{ $product['item']['title'] }}</a>
                    </td>
                    <td>{{ $product['item']['value'] }} руб.</td>
                    <td> <a href="{{ route('reduce.by.one', $product['item']['id']) }}"><div class="add-delete">-</div></a> {{ $product['qty'] }} <a href="{{ route('increase.by.one', $product['item']['id']) }}"><div class="add-delete">+</div></a> </td>
                    <td>{{ $product['price'] }} руб.</td>
                    <td>
                        <a href="{{ route('delete.product', $product['item']['id']) }}"><div class="close-item"></div></a>

                    </td>
                </tr>
            @endforeach
        </table>
        <div class="cart-back-and-clear">
            <a href="{{ route('shop')}}" class="black-a">Продолжить покупки</a>
            <a href="{{ route('destroy') }}">Очистить корзину</a>
        </div>

        <div class="cart-checkout">

            <h2>Количество : {{ $totalQty }}</h2>
            <h2>Итого: {{ $totalPrice }} руб.</h2>

            <a href="{{ route('checkout') }}">Перейти к оформлению</a>

        </div>


    @else

        <div class="classics">Продуктов в корзине нет</div>

    @endif
</div>

@include("layouts.footer")

  <!--[if IE 9]><script src="js/classlistIE.js"></script><![endif]-->
<script src="js/main.js"></script>


</body>
</html>