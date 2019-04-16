@extends('admin.content')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <!-- Main content -->
    <section class="content container-fluid">
    <div><h2 class="text-center">Главная</h2></div>
    </section>
    <article class="container">

        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{route('admin.category.index')}}">Категории</a>
            </li>
            <li class="list-group-item">
                <a href="{{route('admin.products.index')}}">Товары</a>
            </li>
            <li class="list-group-item">
                <a href="">Пользователи</a>
            </li>
            <li class="list-group-item">
                <a href="{{route('admin.orders.index')}}">Заказы</a>
            </li>
        </ul>
    </article>
</div>
    @endsection