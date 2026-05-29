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
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/vendor/swiper-bundle.min.css">
</head>
<body>
 <?php
$navActive = 'index';
$footerId = 'contacts';
require __DIR__ . '/includes/news-data.php';
$homeNews = news_get_latest(5);
require __DIR__ . '/includes/header.php';
?>

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
            <div class="hero-fs__bg hero-fs__bg--1" aria-hidden="true" style="background-image: url(/images/promo-1.jpg);"></div>
            <div class="hero-fs__scrim" aria-hidden="true"></div>
            <div class="container hero-fs__copy">
              <p class="eyebrow hero-fs__eyebrow">Инженерные сети</p>
              <h1 class="hero-fs__title">Наружные инженерные сети  <br>в&nbsp;Санкт-Петербурге и ЛО</h1>
              <p class="hero-fs__lead">наружные электрические сети, наружные сети связи, тепловые сети, внешнее освещение, наружные сети водоснабжения и водоотведения.</p>
              <div class="hero-fs__actions">
                <button type="button" class="btn btn--primary js-open-callback" aria-haspopup="dialog" aria-controls="callbackModal">Оставить заявку</button>
                <a class="btn btn--ghost btn--on-dark" href="/services.php">Все услуги</a>
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
            <div class="hero-fs__bg hero-fs__bg--2" aria-hidden="true" style="background-image: url(/images/promo-2.jpg);"></div>
            <div class="hero-fs__scrim" aria-hidden="true"></div>
            <div class="container hero-fs__copy">
              <p class="eyebrow hero-fs__eyebrow">Дорожное строительство</p>
              <h2 class="hero-fs__title">Благоустройство и&nbsp;дорожное&nbsp;строительство <br>в&nbsp;Санкт-Петербурге и ЛО</h2>
              <p class="hero-fs__lead">мощение дорог, укладка тротуарной плитки, асфальтирование дорог, кровельные работы, ограждение территории</p>
              <div class="hero-fs__actions">
                <button type="button" class="btn btn--primary js-open-callback" aria-haspopup="dialog" aria-controls="callbackModal">Оставить заявку</button>
                <a class="btn btn--ghost btn--on-dark" href="/services.php">Все услуги</a>
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
            <div class="hero-fs__bg hero-fs__bg--3" aria-hidden="true" style="background-image: url(/images/promo-3.jpg);"></div>
            <div class="hero-fs__scrim" aria-hidden="true"></div>
            <div class="container hero-fs__copy">
              <p class="eyebrow hero-fs__eyebrow">Загородное строительство</p>
              <h2 class="hero-fs__title">Загородное строительство</h2>
              <p class="hero-fs__lead">ландшафтные работы, работы нулевого цикла, возведение стен и&nbsp;перекрытий, кровельные работы, благоустройство территории</p>
              <div class="hero-fs__actions">
                <button type="button" class="btn btn--primary js-open-callback" aria-haspopup="dialog" aria-controls="callbackModal">Оставить заявку</button>
                <a class="btn btn--ghost btn--on-dark" href="/services.php">Все услуги</a>
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

    <section class="section">
      <div class="container">
        <div class="about-split">
          <div class="legal__article about-block about-split__text">
            <h2 class="section__title">О нас</h2>
            <p>ООО «ПЕТРОСПЕЦМОНТАЖ» — организация и выполнение строительных работ, комплексные поставки материалов для фасадных систем. Мы гарантируем высокое качество, соблюдение сроков и индивидуальный подход. Наш опыт и современные технологии позволяют реализовывать проекты любой сложности. Надёжность, профессионализм и доверие — наши главные принципы.</p>
            <p>География — Санкт-Петербург и Ленинградская область; отдельные направления возможны по согласованию. <a href="/about.php">Подробнее о компании</a></p>
          </div>
          <div class="legal__article about-split__media">
            <div class="about-split__figure-wrap">
              <img class="about-split__img" src="images/home-about.jpeg" width="900" height="700" alt="О нас">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="preview">
      <div class="container">
        <header class="section__head section__head--split">
          <div>
            <h2 class="section__title">Наши услуги</h2>
            <p class="section__intro">Проектирование, наружные сети и внутренние системы — подробности на отдельных страницах.</p>
          </div>
          <a class="btn btn--ghost" href="/services.php">Все услуги</a>
        </header>
        <div class="cards preview__cards">
          <a class="card card--service card--reveal" href="/service-design.php">
            <div class="card__media">
              <img src="/images/design.jpg" width="800" height="500" alt="Инженеры с проектной документацией на строительной площадке" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h3 class="card__title">Проектирование и изыскания</h3>
              <p class="card__text">Обследования, ПД и РД, дизайн-проекты, сметы, генпроектирование.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-external-networks.php">
            <div class="card__media">
              <img src="/images/vnesh.jpg" width="800" height="500" alt="Инженер в каске на промышленном объекте, инженерные коммуникации" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h3 class="card__title">Наружные сети</h3>
              <p class="card__text">Электроснабжение, связь, теплотрассы, наружное освещение, водопровод и канализация.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-mep-internal.php">
            <div class="card__media">
              <img src="/images/vnutr.jpg" width="800" height="500" alt="Электромонтаж и слаботочные системы" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h3 class="card__title">Внутренние инженерные системы</h3>
              <p class="card__text">Водоснабжение и канализация, отопление, вентиляция и кондиционирование, СКС, ОПС, СКУД.</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="section home-portfolio">
      <div class="container">
        <header class="section__head section__head--split">
          <div>
            <h2 class="section__title">Портфолио</h2>
            <p class="section__intro">Частные дома, коммерция и госзаказ — примеры реализованных объектов по типам заказчиков.</p>
          </div>
          <a class="btn btn--ghost" href="/projects.php">Все проекты</a>
        </header>
        <div class="cards">
          <a class="card card--service card--reveal" href="/projects.php#private">
            <div class="card__media">
              <img src="/images/dom.jpg" width="800" height="500" alt="Загородный частный дом" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h3 class="card__title">Частные объекты</h3>
              <p class="card__text">Загородные дома, коттеджи и ремонт жилых помещений «под ключ».</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/projects.php#business">
            <div class="card__media">
              <img src="/images/otdelka.jpg" width="800" height="500" alt="Коммерческий объект после отделки" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h3 class="card__title">Объекты для бизнеса</h3>
              <p class="card__text">Торговые и офисные пространства, промышленность, фасады и реконструкция.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/projects.php#state">
            <div class="card__media">
              <img src="/images/katok.jpg" width="800" height="500" alt="Социальный и муниципальный объект" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h3 class="card__title">Гос объекты</h3>
              <p class="card__text">Социальная инфраструктура, благоустройство и объекты по госзаказу.</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="home-hero-metrics" id="homeHeroMetrics" aria-label="Ключевые показатели">
      <div class="container">
        <header class="section__head">
          <h2 class="section__title">Наша работа в цифрах</h2>
          <p class="section__intro">Более двадцати лет «Петроспецмонтаж» уверенно проектирует, монтирует и сдаёт объекты в Санкт-Петербурге и Ленинградской области: свыше пятисот уже реализованных проектов — от коттеджей до промышленных площадок. В каталоге одиннадцать направлений работ, ориентировочную смету подготовим для вас всего за два часа.</p>
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
        <header class="section__head section__head--split">
          <div>
            <h2 class="section__title">Новости</h2>
            <p class="section__intro">Заметки для заказчиков и короткие отчёты с площадок.</p>
          </div>
          <a class="btn btn--ghost" href="/news.php">Все новости</a>
        </header>
        <div class="news-carousel" id="newsCarousel">
          <div class="swiper news-carousel__swiper">
            <div class="swiper-wrapper">
              <?php foreach ($homeNews as $item): ?>
              <div class="swiper-slide">
                <a class="teaser card--reveal" href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>">
                  <div class="teaser__media">
                    <img src="<?= htmlspecialchars($item['imageHome'], ENT_QUOTES, 'UTF-8') ?>" width="1024" height="1024" alt="<?= htmlspecialchars($item['imageAlt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="teaser__body">
                    <span class="teaser__label"><?= htmlspecialchars($item['dateHome'] . ' · ' . $item['tag'], ENT_QUOTES, 'UTF-8') ?></span>
                    <h3 class="teaser__title"><?= htmlspecialchars($item['titleShort'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <p class="teaser__text"><?= htmlspecialchars($item['teaser'], ENT_QUOTES, 'UTF-8') ?></p>
                    <span class="teaser__more">Читать</span>
                  </div>
                </a>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="carousel-controls">
            <button type="button" class="carousel-controls__btn carousel-controls__btn--prev" aria-label="Предыдущая новость">
              <span aria-hidden="true">‹</span>
            </button>
            <button type="button" class="carousel-controls__btn carousel-controls__btn--next" aria-label="Следующая новость">
              <span aria-hidden="true">›</span>
            </button>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<script src="/js/vendor/swiper-bundle.min.js"></script>
<?php require __DIR__ . '/includes/footer.php'; ?>
