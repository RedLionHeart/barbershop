@extends("layout")

@section('content')
  <!-- Форма входа -->
  <form action="#" method="get" class="enter-form">
    <h2>Личный кабинет</h2>
    <p class="enter-form-text">Введите пожалуйста свой логин и пароль</p>
    <a class="enter-form-forgot" href="#">Если вы забыли пароль</a>
    <p class="login"><!--[if IE 9]>Логин<![endif]--><input type="text" id="enter-1" name="enter-login" placeholder="Логин"></p>
    <p class="pass"><!--[if IE 9]>Пароль<![endif]--><input type="password" id="enter-2" name="enter-pass" placeholder="Пароль"></p>
    <p class="remember"><input type="checkbox" id="enter-3" name="enter-remember" checked><label for="enter-3">Запомните меня</label>
      <a class="forgot-pass" href="#">Я забыл пароль!</a></p>
    <input type="submit" id="enter-4" name="enter-submit" class="btn" value="Войти">
    <!--[if IE 9]><p>*Обязательные для заполнения поля</p><![endif]-->
    <a class="close black" href="index.html"></a>
  </form>

  <!-- Контент -->
  <main>
    <div class="container">

      <h1 class="page-title">Barbershop Borodinski - магазин</h1>
      <ul class="breadcrumbs">
        <li><a href="index">Главная</a></li>
        <li><a href="shop">Магазин</a></li>
        <li>Средства для ухода</li>
      </ul>

      <div class="row">

        <!-- Сайдбар -->
        <div class="col col3">

          <!-- Фильтр формами -->
          <form id="catalog-form">
            <h2>Производители</h2>
            <p><input id="c1" type="checkbox" name="1st" checked><label for="c1">Baxter of California</label></p>
            <p><input id="c2" type="checkbox" name="2nd"><label for="c2">Mr Natty</label></p>
            <p><input id="c3" type="checkbox" name="3rd" checked><label for="c3">Suavecito</label></p>
            <p><input id="c4" type="checkbox" name="4th"><label for="c4">Malin+Goetz</label></p>
            <p><input id="c5" type="checkbox" name="5th"><label for="c5">Murray’s</label></p>
            <p><input id="c6" type="checkbox" name="6th" checked><label for="c6">American Crew</label></p>
          </form>

          <form id="catalog-form">
            <h2 class="categories-title">Группы товаров:</h2>
            <p><input id="r1" type="radio" name="cat-radio" checked><label for="r1">Бритвенные принадлежности</label></p>
            <p><input id="r2" type="radio" name="cat-radio"><label for="r2">Средства для ухода</label></p>
            <p class="disabled"><input id="r3" type="radio" name="cat-radio" disabled><label for="r3">Аксессуары</label></p> <!-- Disabled example -->
          </form>

          <!-- Фильтр ссылками
            <h2>Производители</h2>
            <ul class="producers">
              <li class="active"><a href="#">Baxter of California</a></li>
              <li><a href="#">Mr Natty</a></li>
              <li class="active"><a href="#">Suavecito</a></li>
              <li><a href="#">Malin+Goetz</a></li>
              <li><a href="#">Murray’s</a></li>
              <li class="active"><a href="#">American Crew</a></li>
            </ul>

            <h2>Группы товаров:</h2>
            <ul class="categories">
              <li class="active"><a href="#">Бритвенные принадлежности</a></li>
              <li><a href="#">Средства для ухода</a></li>
              <li><a href="#">Аксессуары</a></li>
            </ul> -->

        </div>

        <!-- Товары -->
        <div class="col col9">
          <div class="items">
            <figure class="item-card">
              <a href="shop/baxter"><div class="img-wrapper"><img src="img/catalog-content-1.jpg" height="165" width="220" alt="Набор для путешествий"></div></a>
              <div class="item-card-description">
                <h3>Baxter of California</h3>
                <p>Набор для путешествий</p>
                <div class="price">
                  <p class="price-text">2 900 руб.</p>
                  <a class="price-btn" href="#">купить</a>
                </div>
              </div>
            </figure>

            <figure class="item-card">
              <div class="img-wrapper"><img src="img/catalog-content-2.jpg" alt="Увлажняющий кондиционер"></div>
              <div class="item-card-description">
                <h3>Baxter of California</h3>
                <p>Увлажняющий кондиционер</p>
                <div class="price">
                  <p class="price-text">750 руб.</p>
                  <a class="price-btn" href="#">купить</a>
                </div>
              </div>
            </figure>

            <figure class="item-card">
              <div class="img-wrapper"><img src="img/catalog-content-3.jpg" alt="Гель для волос"></div>
              <div class="item-card-description">
                <h3>Suavecito</h3>
                <p>Гель для волос</p>
                <div class="price">
                  <p class="price-text">290 руб.</p>
                  <a class="price-btn" href="#">купить</a>
                </div>
              </div>
            </figure>

            <figure class="item-card">
              <div class="img-wrapper"><img src="img/catalog-content-4.jpg" alt="Глина для укладки волос"></div>
              <div class="item-card-description">
                <h3>American crew</h3>
                <p>Глина для укладки волос</p>
                <div class="price">
                  <p class="price-text">500 руб.</p>
                  <a class="price-btn" href="#">купить</a>
                </div>
              </div>
            </figure>

            <figure class="item-card">
              <div class="img-wrapper"><img src="img/catalog-content-5.jpg" alt="Гель для волос"></div>
              <div class="item-card-description">
                <h3>American crew</h3>
                <p>Гель для волос</p>
                <div class="price">
                  <p class="price-text">300 руб.</p>
                  <a class="price-btn" href="#">купить</a>
                </div>
              </div>
            </figure>

            <figure class="item-card">
              <div class="img-wrapper"><img src="img/catalog-content-6.jpg" alt="Набор для бритья"></div>
              <div class="item-card-description">
                <h3>Baxter of California</h3>
                <p>Набор для бритья</p>
                <div class="price">
                  <p class="price-text">3 900 руб.</p>
                  <a class="price-btn" href="#">купить</a>
                </div>
              </div>
            </figure>

          </div>

          <div class="paginator">
            <a href="#">1</a>
            <p class="active">2</p>
            <a href="#">3</a>
            <a href="#">4</a>
          </div>

        </div>
      </div>
    </div>
  </main>
  @endsection