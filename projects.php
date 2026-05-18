<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Объекты — Петроспецмонтаж</title>
  <meta name="description" content="Реализованные проекты: коммерция, промышленность, частный сектор и госзаказ.">
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
          <li><a href="projects.php" aria-current="page">Объекты</a></li>
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

  <main>
    <div class="page-hero">
      <div class="container">
        <p class="page-hero__crumb">Портфолио</p>
        <h1 class="page-hero__title">Наши объекты</h1>
        <p class="page-hero__lead">Более двух десятилетий — от частных домов до промышленных площадок. Ниже — примеры объектов; полный перечень обсуждается при встрече.</p>
      </div>
    </div>

    <section class="section objects">
      <div class="container">
        <div class="tabs" role="tablist" aria-label="Категории объектов">
          <button class="tabs__btn is-active" type="button" role="tab" aria-selected="true" data-filter="all">Все проекты</button>
          <button class="tabs__btn" type="button" role="tab" aria-selected="false" data-filter="private">Частные</button>
          <button class="tabs__btn" type="button" role="tab" aria-selected="false" data-filter="business">Для бизнеса</button>
          <button class="tabs__btn" type="button" role="tab" aria-selected="false" data-filter="state">Госзаказ</button>
        </div>
        <div class="projects" id="projects">
          <article class="project" data-cat="business" data-project-id="retail-interior">
            <button type="button" class="project__preview" aria-haspopup="dialog" aria-label="Открыть фотогалерею: Отделка торговых помещений">
              <span class="project__visual" aria-hidden="true"></span>
            </button>
            <h2 class="project__title">Отделка торговых помещений</h2>
            <p class="project__meta">Коммерция · СПб</p>
          </article>
          <article class="project" data-cat="business state" data-project-id="facade-glass">
            <button type="button" class="project__preview" aria-haspopup="dialog" aria-label="Открыть фотогалерею: Монтаж фасадных систем остекления">
              <span class="project__visual project__visual--b" aria-hidden="true"></span>
            </button>
            <h2 class="project__title">Монтаж фасадных систем остекления</h2>
            <p class="project__meta">Фасад · ЛО</p>
          </article>
          <article class="project" data-cat="business state" data-project-id="industrial-rebuild">
            <button type="button" class="project__preview" aria-haspopup="dialog" aria-label="Открыть фотогалерею: Реконструкция производственных корпусов">
              <span class="project__visual project__visual--c" aria-hidden="true"></span>
            </button>
            <h2 class="project__title">Реконструкция производственных корпусов</h2>
            <p class="project__meta">Промышленность</p>
          </article>
          <article class="project" data-cat="state business" data-project-id="film-studio">
            <button type="button" class="project__preview" aria-haspopup="dialog" aria-label="Открыть фотогалерею: Реконструкция под киностудию">
              <span class="project__visual project__visual--d" aria-hidden="true"></span>
            </button>
            <h2 class="project__title">Реконструкция под киностудию</h2>
            <p class="project__meta">Креативные индустрии</p>
          </article>
          <article class="project" data-cat="business" data-project-id="monolith">
            <button type="button" class="project__preview" aria-haspopup="dialog" aria-label="Открыть фотогалерею: ЖБ конструкции, ростверки и колонны">
              <span class="project__visual project__visual--e" aria-hidden="true"></span>
            </button>
            <h2 class="project__title">ЖБ конструкции, ростверки и колонны</h2>
            <p class="project__meta">Монолит</p>
          </article>
          <article class="project" data-cat="private" data-project-id="private-house">
            <button type="button" class="project__preview" aria-haspopup="dialog" aria-label="Открыть фотогалерею: Загородный дом «под ключ»">
              <span class="project__visual project__visual--f" aria-hidden="true"></span>
            </button>
            <h2 class="project__title">Загородный дом «под ключ»</h2>
            <p class="project__meta">Частный сектор</p>
          </article>
        </div>
      </div>
    </section>
  </main>

    <section class="section service-lead" aria-labelledby="page-cb-projects-title">
      <div class="container">
        <div class="service-lead__box contact-card card--reveal">
          <h2 id="page-cb-projects-title">Заказать обратный звонок</h2>
          <p class="contact-card__intro">Укажите телефон и при необходимости кратко опишите задачу — менеджер свяжется с вами в рабочее время.</p>
          <form class="lead-form lead-form--stack js-lead-form" novalidate>
            <label class="sr-only" for="page-cb-projects-name">Имя</label>
            <input class="lead-form__field" type="text" id="page-cb-projects-name" name="name" placeholder="Имя" autocomplete="name">
            <label class="sr-only" for="page-cb-projects-phone">Телефон</label>
            <input class="lead-form__field" type="tel" id="page-cb-projects-phone" name="phone" placeholder="+7 (___) ___-__-__" autocomplete="tel" required>
            <label class="sr-only" for="page-cb-projects-msg">Сообщение</label>
            <textarea class="lead-form__field" id="page-cb-projects-msg" name="message" placeholder="Тип объекта, сроки, вопрос"></textarea>
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

  <div class="pg-modal" id="projectGalleryModal" role="dialog" aria-modal="true" aria-labelledby="pgModalTitle" hidden>
    <div class="pg-modal__backdrop" data-pg-close tabindex="-1"></div>
    <div class="pg-modal__panel">
      <button type="button" class="pg-modal__close" id="pgModalClose" data-pg-close aria-label="Закрыть галерею">×</button>
      <h2 class="pg-modal__title" id="pgModalTitle"></h2>
      <div class="pg-modal__lede" id="pgModalLede" hidden></div>
      <div class="pg-modal__aspect-wrap">
        <button type="button" class="pg-gallery__nav pg-gallery__nav--prev" id="pgGalleryPrev" aria-label="Предыдущее фото">‹</button>
        <div class="pg-modal__aspect" id="pgModalAspect">
          <div class="pg-modal__spinner-layer" id="pgModalSpinnerLayer" aria-live="polite">
            <span class="pg-spinner" aria-hidden="true"></span>
            <p class="pg-modal__spinner-text" id="pgSpinnerText">Загрузка фотографий…</p>
          </div>
          <div class="pg-gallery" id="pgGallery" hidden>
            <div class="pg-gallery__viewport" id="pgGalleryViewport">
              <div class="pg-gallery__track" id="pgGalleryTrack"></div>
            </div>
          </div>
        </div>
        <button type="button" class="pg-gallery__nav pg-gallery__nav--next" id="pgGalleryNext" aria-label="Следующее фото">›</button>
      </div>
      <p class="pg-modal__counter" id="pgModalCounter" hidden aria-live="polite"></p>
    </div>
  </div>
<script src="js/main.js"></script>
</body>
</html>
