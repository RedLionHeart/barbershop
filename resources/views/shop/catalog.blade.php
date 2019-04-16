@extends("layout")

@section('content')
  <!-- Форма входа -->
  @include('layouts.login_form')

  <!-- Контент -->
  <main>
    <div class="container">

      <h1 class="page-title">Barbershop Borodinski - Магазин</h1>
      <form action="{{route('search')}}" class="search-form" method="post">
        {{ csrf_field() }}
        <input type="search" name="search" placeholder="Введите значение">
        <input type="submit" value="Поиск" class="btn-search">
      </form>
      <ul class="breadcrumbs">
        <li><a href="{{route('main')}}">Главная</a></li>
        <li>Магазин</li>
      </ul>

      <div class="row">

        <!-- Сайдбар -->
        <div class="col col3">

          <!-- Фильтр формами -->
          <form id="catalog-form" action="{{route('search')}}" method="post">
            {{ csrf_field() }}
            <h2>Производители</h2>
            <p><input id="c1" type="checkbox" name="1[]" value="1"><label for="c1">Baxter of California</label></p>
            <p><input id="c2" type="checkbox" name="1[]" value="2"><label for="c2">Mr Natty</label></p>
            <p><input id="c3" type="checkbox" name="1[]" value="3"><label for="c3">Suavecito</label></p>
            <p><input id="c4" type="checkbox" name="1[]" value="4"><label for="c4">Malin+Goetz</label></p>
            <p><input id="c5" type="checkbox" name="1[]" value="5"><label for="c5">Murray’s</label></p>
            <p><input id="c6" type="checkbox" name="1[]" value="6"><label for="c6">American Crew</label></p>
            <p><input type="submit" value="Показать" class="btn-filter"></p>
          </form>

          {{--<form id="catalog-form">--}}
            {{--<h2 class="categories-title">Группы товаров:</h2>--}}
            {{--<p><input id="r1" type="radio" name="cat-radio"><label for="r1">Бритвенные принадлежности</label></p>--}}
            {{--<p><input id="r2" type="radio" name="cat-radio"><label for="r2">Средства для ухода</label></p>--}}
            {{--<p class="disabled"><input id="r3" type="radio" name="cat-radio" disabled><label for="r3">Аксессуары</label></p> <!-- Disabled example -->--}}
          {{--</form>--}}




        </div>

        <!-- Товары -->
        <div class="col col9">

          <div class="items">

            @foreach ($products as $product)
            <figure class="item-card">

              <a href="{{ url('/shop', $product->slug)}}"><div class="img-wrapper"><img src="{{$product->pict_way}}" height="165" width="220" alt="Набор для путешествий"></div></a>
              <div class="item-card-description">


                <h3>{{$product->small_title}}</h3>
                <p>{{$product->title}}</p>
                <div class="price">
                  <p class="price-text">{{$product->value}} руб.</p>
                  <a class="price-btn" href="{{ route('add.to.cart', ['id' => $product->id]) }}">купить</a>
                </div>
              </div>
            </figure>
            @endforeach

          </div>

          {{$products->links('layouts.paginate')}}

        </div>
      </div>
    </div>
  </main>
  @endsection