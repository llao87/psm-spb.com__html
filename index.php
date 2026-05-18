<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Петроспецмонтаж — проектирование и строительство в Санкт-Петербурге</title>
  <meta name="description" content="Проектирование, строительство и поставки для фасадных систем в СПб и Ленинградской области.">
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
          <li><a href="index.php" aria-current="page">Главная</a></li>
          <li><a href="services.php">Услуги</a></li>
          <li><a href="production.php">Производство</a></li>
          <li><a href="projects.php">Объекты</a></li>
          <li><a href="news.php">Новости</a></li>
          <li><a href="about.php">О компании</a></li>
          <li><a href="contacts.php">Контакты</a></li>
        </ul>
        <button type="button" class="btn btn--primary nav__cta" onclick="document.querySelector('.service-lead').hidden = false; document.querySelector('#page-cb-index-phone').focus(); return false;">Оставить заявку</button>
      </nav>
      <button class="burger" type="button" id="burger" aria-controls="nav" aria-expanded="false" aria-label="Открыть меню">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <main>
    <section
      class="hero-fs"
      id="heroFs"
      aria-roledescription="carousel"
      aria-label="Главные услуги компании"
      data-autoplay-ms="7500"
      style="--hero-count: 3"
    >
      <div class="hero-fs__viewport">
        <ul class="hero-fs__track" id="heroFsTrack" role="list">
          <li
            class="hero-fs__slide is-active"
            id="heroFs-slide-0"
            role="group"
            aria-roledescription="слайд"
            aria-label="1 из 3"
            aria-hidden="false"
          >
            <div class="hero-fs__bg hero-fs__bg--1" aria-hidden="true" style="background-image: url(images/promo-1.jpg);"></div>
            <div class="hero-fs__scrim" aria-hidden="true"></div>
            <div class="container hero-fs__copy">
              <p class="eyebrow hero-fs__eyebrow">Инженерные сети</p>
              <h1 class="hero-fs__title">Наружные инженерные сети  <br>в&nbsp;Санкт-Петербурге и ЛО</h1>
              <p class="hero-fs__lead">наружные электрические сети, наружные сети связи, тепловые сети, внешнее освещение, наружные сети водоснабжения и водоотведения.</p>
              <div class="hero-fs__actions">
                <a class="btn btn--primary" href="contacts.php#request">Рассчитать смету</a>
                <a class="btn btn--ghost btn--on-dark" href="services.php">Смотреть услуги</a>
              </div>
            </div>
          </li>
          <li
            class="hero-fs__slide"
            id="heroFs-slide-1"
            role="group"
            aria-roledescription="слайд"
            aria-label="2 из 3"
            aria-hidden="true"
          >
            <div class="hero-fs__bg hero-fs__bg--2" aria-hidden="true" style="background-image: url(images/promo-2.jpg);"></div>
            <div class="hero-fs__scrim" aria-hidden="true"></div>
            <div class="container hero-fs__copy">
              <p class="eyebrow hero-fs__eyebrow">Дорожное строительство</p>
              <h2 class="hero-fs__title">Благоустройство и&nbsp;дорожное&nbsp;строительство <br>в&nbsp;Санкт-Петербурге и ЛО</h2>
              <p class="hero-fs__lead">мощение дорог, укладка тротуарной плитки, асфальтирование дорог, кровельные работы, ограждение территории</p>
              <div class="hero-fs__actions">
                <a class="btn btn--primary" href="contacts.php#request">Оставить заявку</a>
                <a class="btn btn--ghost btn--on-dark" href="services.php">Каталог услуг</a>
              </div>
            </div>
          </li>
          <li
            class="hero-fs__slide"
            id="heroFs-slide-2"
            role="group"
            aria-roledescription="слайд"
            aria-label="3 из 3"
            aria-hidden="true"
          >
            <div class="hero-fs__bg hero-fs__bg--3" aria-hidden="true" style="background-image: url(images/promo-3.jpg);"></div>
            <div class="hero-fs__scrim" aria-hidden="true"></div>
            <div class="container hero-fs__copy">
              <p class="eyebrow hero-fs__eyebrow">Загородное строительство</p>
              <h2 class="hero-fs__title">Загородное строительство</h2>
              <p class="hero-fs__lead">ландшафтные работы, работы нулевого цикла, возведение стен и&nbsp;перекрытий, кровельные работы, благоустройство территории</p>
              <div class="hero-fs__actions">
                <a class="btn btn--primary" href="projects.php">Наши объекты</a>
                <a class="btn btn--ghost btn--on-dark" href="about.php">О компании</a>
              </div>
            </div>
          </li>
        </ul>
        <button type="button" class="hero-fs__nav hero-fs__nav--prev" id="heroFsPrev" aria-controls="heroFsTrack" aria-label="Предыдущий слайд">
          <span aria-hidden="true">‹</span>
        </button>
        <button type="button" class="hero-fs__nav hero-fs__nav--next" id="heroFsNext" aria-controls="heroFsTrack" aria-label="Следующий слайд">
          <span aria-hidden="true">›</span>
        </button>
        <div class="hero-fs__dots" role="tablist" aria-label="Выбор слайда" id="heroFsDots">
          <button type="button" class="hero-fs__dot is-active" role="tab" aria-selected="true" aria-controls="heroFs-slide-0" id="heroFs-dot-0" tabindex="0" aria-label="Слайд 1"></button>
          <button type="button" class="hero-fs__dot" role="tab" aria-selected="false" aria-controls="heroFs-slide-1" id="heroFs-dot-1" tabindex="-1" aria-label="Слайд 2"></button>
          <button type="button" class="hero-fs__dot" role="tab" aria-selected="false" aria-controls="heroFs-slide-2" id="heroFs-dot-2" tabindex="-1" aria-label="Слайд 3"></button>
        </div>
      </div>
    </section>

    <section class="home-hero-metrics" id="homeHeroMetrics" aria-label="Ключевые показатели">
      <div class="container">
        <header class="section__head">
          <h2 class="section__title">Наша работа в цифрах</h2>
          <p class="section__intro">Выберите раздел — подробности на отдельных страницах.</p>
        </header>
      </div>

      <div class="container home-hero-metrics__inner">
        <dl class="hero__stats hero__stats--plain hero__stats--metrics">
          <div>
            <dt><span class="js-metric" data-target="20" data-suffix="+">0</span></dt>
            <dd>лет на рынке</dd>
          </div>
          <div>
            <dt><span class="js-metric" data-target="500" data-suffix="+">0</span></dt>
            <dd>реализованных объектов</dd>
          </div>
          <div>
            <dt><span class="js-metric" data-target="2" data-suffix=" ч">0</span></dt>
            <dd>предварительная смета</dd>
          </div>
          <div>
            <dt><span class="js-metric" data-target="11" data-suffix="">0</span></dt>
            <dd>услуг в каталоге</dd>
          </div>
        </dl>
        <!-- <div class="home-hero-metrics__promo hero__panel" aria-hidden="true">
          <div class="hero__card">
            <span class="hero__card-label">Фасады и ограждения</span>
            <span class="hero__card-value">поставка и монтаж</span>
          </div>
          <div class="hero__card hero__card--accent">
            <span class="hero__card-label">Генподряд</span>
            <span class="hero__card-value">жилые и промышленные объекты</span>
          </div>
        </div> -->
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="about-split">
          <div class="legal__article about-block about-split__text">
            <h2 class="section__title">О нас</h2>
            <p>Фиксируем объём и сроки в договоре, ведём журнал работ и прозрачную отчётность по смете. На крупных объектах назначаем единого менеджера проекта как точку входа для заказчика.</p>
            <p>География — Санкт-Петербург и Ленинградская область; отдельные направления возможны по согласованию. <a href="about.php">Подробнее о компании</a></p>
          </div>
          <div class="legal__article about-split__media">
            <div class="about-split__figure-wrap">
              <img class="about-split__img" src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&amp;fit=crop&amp;w=900&amp;h=700&amp;q=80" width="900" height="700" alt="Строительный объект и проектная документация" decoding="async" fetchpriority="low">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="preview">
      <div class="container">
        <header class="section__head">
          <h2 class="section__title">Наши услуги</h2>
          <p class="section__intro">Выберите раздел — подробности на отдельных страницах.</p>
        </header>
        <div class="preview__grid">
          <a class="preview__card card--reveal" href="services.php">
            <h2>Услуги</h2>
            <p>Проектирование, инженерия, строительство, фасады, благоустройство и другое.</p>
            <span class="preview__more">Перейти →</span>
          </a>
          <a class="preview__card card--reveal" href="projects.php">
            <h2>Объекты</h2>
            <p>Примеры реализованных проектов для бизнеса, частных заказчиков и госсектора.</p>
            <span class="preview__more">Перейти →</span>
          </a>
          <a class="preview__card card--reveal" href="about.php">
            <h2>О компании</h2>
            <p>Опыт, отзывы, партнёры и принципы работы команды.</p>
            <span class="preview__more">Перейти →</span>
          </a>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <header class="section__head section__head--split">
          <div>
            <h2 class="section__title">Новости</h2>
            <p class="section__intro">Заметки для заказчиков и короткие отчёты с площадок.</p>
          </div>
          <a class="btn btn--ghost" href="news.php">Все материалы</a>
        </header>
        <div class="teasers">
          <a class="teaser card--reveal" href="news-smeta-dva-chasa.php">
            <span class="teaser__label">18 марта · Сервис</span>
            <h3 class="teaser__title">Предварительная смета за два часа</h3>
            <p class="teaser__text">Как считаем ориентир без визита и когда нужен выезд инженера.</p>
            <span class="teaser__more">Читать</span>
          </a>
          <a class="teaser card--reveal" href="news-fasad-zimoy.php">
            <span class="teaser__label">6 февраля · Фасады</span>
            <h3 class="teaser__title">Фасадные работы зимой</h3>
            <p class="teaser__text">Температура, хранение материалов и приёмка слоёв.</p>
            <span class="teaser__more">Читать</span>
          </a>
          <a class="teaser card--reveal" href="news-blagoustroystvo-etapy.php">
            <span class="teaser__label">22 января · Благоустройство</span>
            <h3 class="teaser__title">Этапы благоустройства</h3>
            <p class="teaser__text">От подготовки участка до приёмки покрытий.</p>
            <span class="teaser__more">Читать</span>
          </a>
        </div>
      </div>
    </section>

    <section class="cta-band" id="estimate">
      <div class="container cta-band__inner">
        <div>
          <h2 class="cta-band__title">Смета за два часа</h2>
          <p class="cta-band__text">Оставьте телефон — перезвоним и подготовим предварительную смету бесплатно в течение двух часов в рабочее время. Или перейдите на страницу контактов для полной формы.</p>
        </div>
        <form class="lead-form js-lead-form" novalidate>
          <label class="sr-only" for="homePhone">Телефон</label>
          <input class="lead-form__input" type="tel" id="homePhone" name="phone" placeholder="+7 (___) ___-__-__" autocomplete="tel">
          <button class="btn btn--light" type="submit">Отправить</button>
          <div class="form-toast" role="status" aria-live="polite" aria-atomic="true" hidden></div>
        </form>
      </div>
    </section>
  </main>

  <!-- Всплывающая форма обратной связи -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Вставляем содержимое формы
      fetch('includes/form-service-lead.php')
        .then(response => response.text())
        .then(html => {
          document.body.insertAdjacentHTML('beforeend', html);
          
          // Добавляем кнопку для её вызова
          const formSection = document.querySelector('.service-lead');
          if (formSection) {
            const triggerBtn = document.createElement('button');
            triggerBtn.type = 'button';
            triggerBtn.className = 'btn btn--primary service-lead__trigger';
            triggerBtn.textContent = 'Заказать обратный звонок';
            triggerBtn.setAttribute('aria-haspopup', 'dialog');
            
            // Вставляем кнопку перед секцией услуг
            const servicesSection = document.querySelector('.activity');
            if (servicesSection) {
              const note = servicesSection.querySelector('.section-note');
              if (note) {
                note.parentNode.insertBefore(triggerBtn, note);
              } else {
                servicesSection.appendChild(triggerBtn);
              }
            } else {
              // Если нет секции услуг, вставляем после хедера
              const header = document.querySelector('header');
              if (header) {
                header.insertAdjacentElement('afterend', triggerBtn);
              }
            }
            
            // Обработчик открытия формы
            triggerBtn.addEventListener('click', function () {
              formSection.hidden = false;
              const firstInput = formSection.querySelector('input, textarea');
              if (firstInput) {
                firstInput.focus();
              }
            });
            
            // Обработчик закрытия после отправки
            const form = formSection.querySelector('form');
            if (form) {
              form.addEventListener('submit', function () {
                formSection.hidden = true;
              });
            }
          }
        });
    });
  </script>
  
  <footer class="footer" id="contacts">

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
