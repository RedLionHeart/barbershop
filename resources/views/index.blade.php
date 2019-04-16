<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Barbershop / Главная страница</title>
  @include('layouts.link')
</head>
<body class="main-body">

  <!-- Хедер, он же верхнее навигационное меню -->

  @include('layouts.nav')

  <!-- Форма входа -->

  @include('layouts.login_form')

  <!-- Контент -->
  <div class="container">
    <main class="main-index">
      <div class="logo">
          <a href="/">Barbershop Borodinski</a>
      </div>

      <div class="row">
        <div class="col col4">
          <div class="feature">
            <a name="info"></a>
            <p class="feature-title">Быстро</p>
            <p class="feature-description">Мы делаем свою работу быстро! Два часа пролетят незаметно, и Вы — счастливый обладетель стильной стрижки-минутки!</p>
          </div>
        </div>
        <div class="col col4">
          <div class="feature">
            <p class="feature-title">Круто</p>
            <p class="feature-description">Забудьте, как вы стриглись раньше. Мы сделаем из вас звезду футбола или кино! Во всяком случае внешне.</p>
          </div>
        </div>
        <div class="col col4">
          <div class="feature">
            <p class="feature-title">Дорого</p>
            <p class="feature-description">Наши мастера — профессионалы своего дела и не могут стоить дешево. К тому же, разве цена не дает определеный статус?</p>
          </div>
        </div>
      </div>

      <section class="index">
        <div class="row">

          <div class="col col5">
              <a name="news"><h2 class="index-title">Новости</h2></a>
              <ul class="news">
                <li><a href="#">Нам наконец завезли ягермайстер! Теперь вы можете пропустить стаканчик во время стрижки</a><span class="date-25sep">25 сентября</span></li>
                <li><a href="#">В нашей команде пополнение, Борис «Бритва» Стригунец, обладетель множетсва титулов и наград, пополнил наши стройные ряды</a><span class="date-29sep">19 сентября</span></li>
              </ul>
              <a class="btn news-btn" href="#">Все новости</a>
          </div>

          <div class="col col5 offset2 gallery">
            <h2 class="index-title">Фотогалерея</h2>
              <div class="interior">
                <div class="interior-wrapper">
                  <a href="#"><img class="int-photo visible" src="img/interior-1.jpg" height="164" width="286" alt="Интерьер-1"></a>
                  <a href="#"><img class="int-photo" src="img/interior-2.jpg" height="164" width="286" alt="Интерьер-2"></a>
                </div>
              </div>
              <a class="btn prev" href="#">Назад</a>
              <a class="btn next" href="#">Вперед</a>
          </div>

        </div>
      </section>

      <section class="index">
        <div class="row">

          <div class="col col5">
            <a name="contacts"><h2 class="index-title">Контактная информация</h2></a>
            <p class="index-contacts">Barbershop «Borodinski»</p>
            <p class="index-contacts">Адрес: г. Гомель, ул. Советская, д. 1</p>
            <p class="index-contacts phone-text">Телефон: +375 (44) 777-77-77</p>
            <p class="index-contacts">Время работы:</p>
            <p class="index-contacts">Пн — пт: с 10:00 до 22:00</p>
            <p class="index-contacts last">Сб — вс: с 10:00 до 19:00</p>
            <a class="btn prev" href="#">Как проехать</a>
            <a class="btn" href="#">Обратная связь</a>
          </div>

          <div class="col col5 offset2">
            <form id="book-form" action="#" method="post">
              <h2 class="index-title">Записаться</h2>
              <p class="form-text">Укажите желаемую дату и время, и мы свяжемся с вами для подтверждения брони</p>
              <label class="book_label" for="book_date"><!--[if IE 9]>Дата (ДД/ММ)<![endif]-->
                <input type="text" id="book_date" name="date" placeholder="Дата ДД/ММ" pattern="(0[1-9]|[12][0-9]|3[01])[\/](0[1-9]|1[012])">
              </label>
              <label class="book_label" for="book_time"><!--[if IE 9]>Время (ЧЧ/ММ)<![endif]-->
                <input type="text" id="book_time" name="time" placeholder="Время ЧЧ/ММ" pattern="([0-1]\d|2[0-3])[:]([0-5]\d)">
              </label>
              <label class="book_label" for="book_name"><!--[if IE 9]>Ваше имя<![endif]-->
                <input type="text" id="book_name" name="name" placeholder="Ваше имя" pattern="[А-Яа-яЁё]+">
              </label>
              <label class="book_label" for="book_phone"><!--[if IE 9]>Телефон<![endif]-->
                <input type="text" id="book_phone" name="phone" placeholder="Телефон" pattern="[\d() -]+">
              </label>
              <input type="submit" class="btn" value="Отправить">
            </form>
          </div>

        </div>
      </section>
    </main>
  </div>

  <!-- Футер -->
  @include("layouts.footer")

  <!--[if IE 9]><script src="js/classlistIE.js"></script><![endif]-->
  <script src="js/main.js"></script>

</body>
</html>
