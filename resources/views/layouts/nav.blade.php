
<header>
    <div class="container"> <!-- Обертка-центровщик -->
        <nav>
            <ul class="menu">
                <li {{(Request::is('/*')) ? 'class=active' : ''}}><a href="/">Главная</a></li>
                <li><a href="{{url('/')}}#info">Информация</a></li>
                <li {{(Request::is('news*')) ? 'class=active' : ''}}><a href="{{url('/news')}}">Новости</a></li>
                <li {{(Request::is('price*')) ? 'class=active' : ''}}><a href="/price">Прайс-лист</a></li>
                <li {{(Request::is('shop*')) ? 'class=active' : ''}}><a href="/shop">Магазин</a></li>
                <li><a href="{{url('/')}}#contacts">Контакты</a></li>
                <li><a href="{{route('show.cart')}}">Корзина:{{ Session::has('cart') ? Session::get('cart')->totalQty : '0'}}</a></li>
            </ul>
        </nav>

        <div class="menu-enter">
            @if (Auth::check() && Auth::user()->isAdmin())
                <a href="/admin">Админка</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Выйти
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @elseif (Auth::check())
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Выйти
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @else
                <a class="enter" href="#">Вход</a>
                <a class="" href="{{route('register')}}">Регистрация</a>
            @endif
        </div>
    </div>
</header>