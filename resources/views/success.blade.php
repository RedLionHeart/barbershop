@extends('layout')
@section('title')
    Оформление заказа
@endsection
@section('content')
    @include('layouts.login_form')
    <div class="container">
        <main>
            <h1 class="page-title">Barbershop Borodinski - Корзина</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Главная</a></li>
                <li>Корзина</li>
            </ul>
        </main>

    <div class="classics">Заказ успешно принят</div>
    </div>
@endsection