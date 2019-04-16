@extends("layout")
@section('title')
    Оформление заказа
@endsection
@section('content')
    @include('layouts.login_form')

<main>
<div class="container">

    <h1 class="page-title">Barbershop Borodinski - Оформление заказа</h1>
    <ul class="breadcrumbs">
        <li><a href="{{route('main')}}">Главная</a></li>
        <li>Оформление заказа</li>
    </ul>
</div>
<div class="checkout-box">
@if(Session::has('cart'))
    <!-- https://megakassa.ru -->
        <h2>Вы заказали на сумму: {{ $cart->totalPrice }} Руб.</h2>

        <form action="{{ route('checkout.form') }}" method="POST" class="decor">
            {{ csrf_field() }}
            <div class="form-left-decoration"></div>
            <div class="form-right-decoration"></div>
            <div class="circle"></div>
            <div class="form-inner">
                <h3>Оформление заказа</h3>
                <input type="text" placeholder="Имя" name="name">
                <input type="text" placeholder="Телефон" name="phone">
                <input type="email" placeholder="Email" name="email">
                <p><input type="radio" id="1" name="cash" value="nal"><label for="1">Наличными курьеру</label></p>
                <p><input type="radio" id="2" name="cash" value="beznal"><label for="2 ">Безналичными</label></p>
                <textarea placeholder="Комментарий к заказу" rows="3" name="comment"></textarea>
                <input type="submit" value="Заказать">
            </div>
        </form>

    @else

        <p>Продуктов нет в корзине</p>

    @endif

</div>

</main>
@endsection