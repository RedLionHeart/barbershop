@extends("layout")

@section('content')
  <form action="#" method="get" class="enter-form">
    <h2>Личный кабинет</h2>
    <p class="enter-form-text">Введите пожалуйста свой логин и пароль</p>
    <a class="enter-form-forgot" href="#">Если вы забыли пароль</a>
    <p class="login"><!--[if IE 9]>Логин*<![endif]--><input type="text" id="enter-1" name="enter-login" placeholder="Логин"></p>
    <p class="pass"><!--[if IE 9]>Пароль*<![endif]--><input type="password" id="enter-2" name="enter-pass" placeholder="Пароль"></p>
    <p class="remember"><input type="checkbox" id="enter-3" name="enter-remember" checked><label for="enter-3">Запомните меня</label>
      <a class="forgot-pass" href="#">Я забыл пароль!</a></p>
    <input type="submit" id="enter-4" name="enter-submit" class="btn" value="Войти">
    <!--[if IE 9]><p>*Обязательные для заполнения поля</p><![endif]-->
    <a class="close black" href="index.html"></a>
  </form>

  <!-- Контент -->
  <main class="item-main">
    <div class="container">

      <ul class="breadcrumbs item">
        <li><a href="/index">Главная</a></li>
        <li><a href="/shop">Магазин</a></li>
        <li><a href="/shop">Средства для ухода</a></li>
        <li>Baxter of California</li>
      </ul>

      <div class="row">

        <div class="col col6">
          <div class="item-imgs">
            <a href="#" class="item-img big"><img src="/img/item-img-3b.jpg" height="499" width="460" alt="Baxter of California-1"></a>
            <a class="item-img small" href="#"><img src="/img/item-img-1.jpg" alt="Baxter of California-2"></a>
            <a class="item-img small" href="#"><img src="/img/item-img-2.jpg" alt="Baxter of California-3"></a>
            <a class="item-img small" href="#"><img src="/img/item-img-3.jpg" alt="Baxter of California-4"></a>
          </div>
        </div>

        <div class="col col5 offset1 item-col">

          <h2 class="item-title">Набор для путешествий<br>
            <a href="#">Baxter of California</a>
          </h2>

          <div class="price item">
            <p class="price-text">2 900 руб.</p>
            <a class="price-btn" href="#">купить</a>
          </div>

          <div class="item-id">
            <p class="id-number">Артикул: Dexter-ae</p>
            <p>Есть в наличии</p>
          </div>

          <p>Travel Kit – необходимый аксессуар во время любого путешествия. В аккуратной кожаной сумке находится все, что нужно для бритья и ухода за кожей во время рабочей поездки или отдыха: средство для умывания, увлажняющий крем, крем для бритья, крем после бритья, шампунь. Набор также может стать отличным подарком.</p>

          <h3 class="contents-title">В набор входят:</h3>
          <ul class="list contents">
            <li>Средство для умывания (50 мл)</li>
            <li>Увлажняющий крем (50 мл)</li>
            <li>Крем для бритья (50 мл)</li>
            <li>Крем после бритья, шампунь (50 мл)</li>
            <li>Удобная кожаная косметичка</li>
          </ul>

        </div>
      </div>
    </div>
  </main>

  @endsection