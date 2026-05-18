<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Реставрация и реконструкция — услуги Петроспецмонтаж</title>
  <meta name="description" content="Памятники архитектуры, капитальный ремонт и реконструкция с учётом охранных требований.">
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

  <main class="article">
    <header class="article-cover">
      <div class="article-cover__media" aria-hidden="true">
        <img src="https://images.unsplash.com/photo-1565008576549-57569a49371d?auto=format&amp;fit=crop&amp;w=1600&amp;h=700&amp;q=80" width="1600" height="700" alt="Реставрация и реконструкция зданий" fetchpriority="high" decoding="async">
      </div>
      <div class="article-cover__shade" aria-hidden="true"></div>
      <div class="article-cover__content container">
        <nav class="breadcrumb" aria-label="Навигация по сайту">
          <a href="index.php">Главная</a><span>/</span><a href="services.php">Услуги</a><span>/</span><span>Реставрация</span>
        </nav>
        <h1 class="article-cover__title">Реставрация и реконструкция зданий</h1>
      </div>
    </header>

    <section class="section section--article">
      <div class="container article__inner">
        <p class="article__lead">ООО «Петроспецмонтаж» выполняет работы по направлению «Реставрация и реконструкция» в Санкт-Петербурге и Ленинградской области. Ниже — кратко о составе услуги и как с нами связаться.</p>
        <div class="article__body">
          <h2>Опыт</h2>
          <p>Работаем с объектами культурного наследия и зданиями с повышенными требованиями к узлам и материалам.</p>
          <h2>Этапы</h2>
          <p>Обследование, проект реставрации или реконструкции, согласования и поэтапный вывод объекта на приёмку.</p>
        </div>
        <p class="article__foot"><a href="services.php">← Все услуги</a></p>
      </div>
    </section>
  </main>

    <section class="section service-lead" aria-labelledby="service-lead-title">
      <div class="container">
        <div class="service-lead__box contact-card card--reveal">
          <h2 id="service-lead-title">Заказать обратный звонок</h2>
          <p class="contact-card__intro">Укажите телефон и при необходимости кратко опишите задачу — менеджер свяжется с вами в рабочее время.</p>
          <form class="lead-form lead-form--stack js-lead-form" novalidate>
            <label class="sr-only" for="svc-service-restoration-name">Имя</label>
            <input class="lead-form__field" type="text" id="svc-service-restoration-name" name="name" placeholder="Имя" autocomplete="name">
            <label class="sr-only" for="svc-service-restoration-phone">Телефон</label>
            <input class="lead-form__field" type="tel" id="svc-service-restoration-phone" name="phone" placeholder="+7 (___) ___-__-__" autocomplete="tel" required>
            <label class="sr-only" for="svc-service-restoration-msg">Сообщение</label>
            <textarea class="lead-form__field" id="svc-service-restoration-msg" name="message" placeholder="Тип объекта, сроки, вопросы по услуге"></textarea>
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
        <h3 class="footer__heading">Соцсети</h3>
        <a class="footer__social" href="#" rel="noopener noreferrer">ВКонтакте</a>
        <p class="footer__legal">
          <a href="privacy.php">Политика конфиденциальности</a>
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
