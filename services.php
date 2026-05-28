<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Услуги — Петроспецмонтаж</title>
  <meta name="description" content="Проектирование, инженерные системы, строительство и благоустройство в Санкт-Петербурге и ЛО.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
$navActive = 'services';
require __DIR__ . '/includes/header.php';
?>

<main>
    <div class="page-hero">
      <div class="container">
        <p class="page-hero__crumb">Услуги</p>
        <h1 class="page-hero__title">Наша деятельность</h1>
        <p class="page-hero__lead">Проектно-изыскательский блок, инженерные системы, строительство и благоустройство — единая команда и понятные этапы.</p>
      </div>
    </div>

    <section class="section activity">
      <div class="container">
        <div class="cards">
          <a class="card card--service card--reveal" href="/service-design.php">
            <div class="card__media">
              <img src="images/design.jpg" width="800" height="500" alt="Инженеры с проектной документацией на строительной площадке" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Проектирование и изыскания</h2>
              <p class="card__text">Обследования, ПД и РД, дизайн-проекты, сметы, генпроектирование.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-external-networks.php">
            <div class="card__media">
              <img src="images/vnesh.jpg" width="800" height="500" alt="Инженер в каске на промышленном объекте, инженерные коммуникации" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Наружные сети</h2>
              <p class="card__text">Электроснабжение, связь, теплотрассы, наружное освещение, водопровод и канализация.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-mep-internal.php">
            <div class="card__media">
              <img src="images/vnutr.jpg" width="800" height="500" alt="Электромонтаж и слаботочные системы" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Внутренние инженерные системы</h2>
              <p class="card__text">Водоснабжение и канализация, отопление, вентиляция и кондиционирование, СКС, ОПС, СКУД.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-construction.php">
            <div class="card__media">
              <img src="images/stroy.jpg" width="800" height="500" alt="Строительная площадка и монтаж конструкций" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Промышленное и гражданское строительство</h2>
              <p class="card__text">СМР, подземные сооружения, генподряд, малые формы, гидроизоляция конструкций.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-restoration.php">
            <div class="card__media">
              <img src="images/restav.jpg" width="800" height="500" alt="Фасад исторического здания, реставрация" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Реставрация и реконструкция</h2>
              <p class="card__text">Памятники архитектуры, капремонт и реконструкция зданий.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-fitout.php">
            <div class="card__media">
              <img src="images/otdelka.jpg" width="800" height="500" alt="Современный интерьер после отделки" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Отделка и ремонт</h2>
              <p class="card__text">Жилые и загородные дома, офисы, торговые и HoReCa-пространства.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-landscape.php">
            <div class="card__media">
              <img src="images/dom.jpg" width="800" height="500" alt="Благоустройство: дорожки и озеленение" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Ландшафт и нулевой цикл</h2>
              <p class="card__text">Стены и перекрытия, кровля, благоустройство прилегающей территории.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-roads.php">
            <div class="card__media">
              <img src="images/katok.jpg" width="800" height="500" alt="Дорога и тротуарное покрытие" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Дороги и благоустройство</h2>
              <p class="card__text">Мощение, тротуарная плитка, асфальтирование, ограждения.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-facade.php">
            <div class="card__media">
              <img src="images/fasad.jpg" width="800" height="500" alt="Современный фасад здания" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Фасадные работы</h2>
              <p class="card__text">Строительный и монтажный фасад, штукатурка и финишная отделка.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-bank-fire.php">
            <div class="card__media">
              <img src="images/bank.jpg" width="800" height="500" alt="Работа с проектной и финансовой документацией" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Банковские и противопожарные решения</h2>
              <p class="card__text">Перепрофилирование, кассовые блоки, ПП заполнения проёмов.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-social.php">
            <div class="card__media">
              <img src="images/prileg.jpg" width="800" height="500" alt="Жилая застройка и благоустройство двора" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Социальные объекты</h2>
              <p class="card__text">Содержание домовых территорий, планировка и комплексная застройка.</p>
            </div>
          </a>
        </div>
        <p class="section-note">Нужна консультация по конкретному объекту? <a href="/contacts.php#request">Напишите или позвоните</a> — подберём состав работ.</p>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
