<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Barbershop / Прайс-лист</title>
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

      <div class="page-title">Barbershop Borodinski - прайс-лист</div>
      <ul class="breadcrumbs price">
        <li><a href="{{url('/')}}">Главная</a></li>
        <li>Прайс-лист</li>
      </ul>
      <div class="classics">Истинно мужская классика </div>

      <div class="row">
        <div class="col col6">
          <h3 class="price-title">Мы используем только лучшие средства:</h3>
          <ul class="list ">
            <li>Baxter of California</li>
            <li>Mr Natty</li>
            <li>Suavecito</li>
            <li>Malin+Goetz</li>
          </ul>
        </div>

        <div class="col col6">
          <table>
          <h3 class="price-title price-table">Цены на услуги наших мастеров:</h3>
            <tr>
              <td>Стрижка</td>
              <td class="price-text">30 р.</td>
            </tr>
            <tr>
              <td>Стрижка бороды</td>
              <td class="price-text">15 р.</td>
            </tr>
            <tr>
              <td>Накрутка усов</td>
              <td class="price-text">10 р.</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="row">
        <h3 class="price-title about-us">Несколько слов о нас:</h3>
        <div class="col col6">
          <p class="price-bottom">Наша парикмахерская занимается исключительно мужскими стрижками. Стрижка каждого клиента для нас - это уникальная и продуманная до мелочей работа. Мы не работаем на количество, мы делаем качество.</p>
        </div>

        <div class="col col6">
          <p class="price-bottom">Наша мастерская расположена в центре города, поэтому сделать стильную стрижку можно в любое время, даже в обеденный перерыв. Здесь вы можете погрузиться в удобную для вас атмосферу, чувствовать себя комфортно и свободно!</p>
        </div>

      </div>
    </main>
  </div>

  <!-- Футер -->
  @include("layouts.footer")

  <!--[if gte IE 7]><script src="js/classlistIE.js"></script><![endif]-->
  <script src="js/main.js"></script>

</body>
</html>
