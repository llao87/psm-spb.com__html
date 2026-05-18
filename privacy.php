<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Политика конфиденциальности — Петроспецмонтаж</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="topbar" role="note">
    <div class="container topbar__inner">
      <span class="topbar__item">Санкт-Петербург</span>
      <a class="topbar__link" href="mailto:petrospecmontag@mail.ru">petrospecmontag@mail.ru</a>
      <a class="topbar__link" href="tel:+78124561546">+7 (812) 456-15-46</a>
    </div>
  </div>

  <header class="header" id="top">
    <div class="container header__inner">
      <a class="logo" href="index.php">
        <span class="logo__mark" aria-hidden="true"></span>
        <span class="logo__text">Петроспец<span>монтаж</span></span>
      </a>
      <nav class="nav" id="nav" aria-label="Основное меню">
        <ul class="nav__list">
          <li><a href="index.php">Главная</a></li>
          <li><a href="services.php">Услуги</a></li>
          <li><a href="production.php">Производство</a></li>
          <li><a href="projects.php">Объекты</a></li>
          <li><a href="news.php">Новости</a></li>
          <li><a href="about.php">О компании</a></li>
          <li><a href="contacts.php">Контакты</a></li>
        </ul>
        <a class="btn btn--primary nav__cta" href="contacts.php#request">Оставить заявку</a>
      </nav>
      <button class="burger" type="button" id="burger" aria-controls="nav" aria-expanded="false" aria-label="Открыть меню">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <main class="legal">
    <div class="container">
      <article class="legal__article">
        <h1>Политика конфиденциальности</h1>
        <p>Настоящий текст — заглушка для демонстрации многостраничной структуры. Замените его юридически корректным документом с учётом 152-ФЗ и вашей внутренней политики обработки персональных данных.</p>
        <p>Оператор: ООО «Петроспецмонтаж». По вопросам обработки данных: <a href="mailto:petrospecmontag@mail.ru">petrospecmontag@mail.ru</a>.</p>
        <p><a href="index.php">← На главную</a></p>
      </article>
    </div>
  </main>

    <section class="section service-lead" aria-labelledby="page-cb-privacy-title">
      <div class="container">
        <div class="service-lead__box contact-card card--reveal">
          <h2 id="page-cb-privacy-title">Заказать обратный звонок</h2>
          <p class="contact-card__intro">Укажите телефон и при необходимости кратко опишите задачу — менеджер свяжется с вами в рабочее время.</p>
          <form class="lead-form lead-form--stack js-lead-form" novalidate>
            <label class="sr-only" for="page-cb-privacy-name">Имя</label>
            <input class="lead-form__field" type="text" id="page-cb-privacy-name" name="name" placeholder="Имя" autocomplete="name">
            <label class="sr-only" for="page-cb-privacy-phone">Телефон</label>
            <input class="lead-form__field" type="tel" id="page-cb-privacy-phone" name="phone" placeholder="+7 (___) ___-__-__" autocomplete="tel" required>
            <label class="sr-only" for="page-cb-privacy-msg">Сообщение</label>
            <textarea class="lead-form__field" id="page-cb-privacy-msg" name="message" placeholder="Тип объекта, сроки, вопрос"></textarea>
            <label class="lead-form__check">
              <input type="checkbox" name="pd_consent" value="1" required>
              <span>Ознакомлен(а) с <a href="privacy.php" target="_blank" rel="noopener noreferrer">Политикой в отношении обработки персональных данных</a> и даю <a href="consent.php" target="_blank" rel="noopener noreferrer">согласие на обработку персональных данных</a> в соответствии с Федеральным законом № 152-ФЗ «О персональных данных».</span>
            </label>
            <div class="form-toast" role="status" aria-live="polite" aria-atomic="true" hidden></div>
            <button class="btn btn--primary btn--block" type="submit">Отправить заявку</button>
          </form>
        </div>
      </div>
    </section>

  <footer class="footer">
    <div class="container footer__grid">
      <div>
        <p class="footer__brand">ООО «Петроспецмонтаж»</p>
        <p class="footer__tag">Проектирование и строительство в Санкт-Петербурге и Ленинградской области</p>
      </div>
      <div>
        <h3 class="footer__heading">Меню</h3>
        <ul class="footer__links">
          <li><a href="index.php">Главная</a></li>
          <li><a href="services.php">Услуги</a></li>
          <li><a href="production.php">Производство</a></li>
          <li><a href="projects.php">Объекты</a></li>
          <li><a href="news.php">Новости</a></li>
          <li><a href="about.php">О компании</a></li>
          <li><a href="contacts.php">Контакты</a></li>
        </ul>
      </div>
      <div>
        <h3 class="footer__heading">Контакты</h3>
        <ul class="footer__links">
          <li><a href="contacts.php">Производство и офис</a></li>
          <li>192019, СПб, вн. тер. «Невская Застава», ул. Хрустальная, 18, лит. А, пом. 411</li>
          <li><a href="tel:+78124561546">+7 (812) 456-15-46</a></li>
          <li><a href="mailto:petrospecmontag@mail.ru">petrospecmontag@mail.ru</a></li>
        </ul>
      </div>
      <div>
        <h3 class="footer__heading">Документы</h3>
        <p class="footer__legal">
          <a href="privacy.php" aria-current="page">Политика конфиденциальности</a>
          ·
          <a href="consent.php">Согласие на обработку персональных данных</a>
        </p>
        <p class="footer__copy">© <span id="year"></span> ООО «Петроспецмонтаж»</p>
      </div>
    </div>
  </footer>
<script src="js/main.js"></script>
</body>
</html>
