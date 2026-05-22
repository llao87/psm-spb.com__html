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
              <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Инженеры с проектной документацией на строительной площадке" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Проектирование и изыскания</h2>
              <p class="card__text">Обследования, ПД и РД, дизайн-проекты, сметы, генпроектирование.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-external-networks.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Инженер в каске на промышленном объекте, инженерные коммуникации" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Наружные сети</h2>
              <p class="card__text">Электроснабжение, связь, теплотрассы, наружное освещение, водопровод и канализация.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-mep-internal.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Электромонтаж и слаботочные системы" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Внутренние инженерные системы</h2>
              <p class="card__text">Водоснабжение и канализация, отопление, вентиляция и кондиционирование, СКС, ОПС, СКУД.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-construction.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Строительная площадка и монтаж конструкций" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Промышленное и гражданское строительство</h2>
              <p class="card__text">СМР, подземные сооружения, генподряд, малые формы, гидроизоляция конструкций.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-restoration.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1565008576549-57569a49371d?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Фасад исторического здания, реставрация" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Реставрация и реконструкция</h2>
              <p class="card__text">Памятники архитектуры, капремонт и реконструкция зданий.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-fitout.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Современный интерьер после отделки" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Отделка и ремонт</h2>
              <p class="card__text">Жилые и загородные дома, офисы, торговые и HoReCa-пространства.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-landscape.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Благоустройство: дорожки и озеленение" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Ландшафт и нулевой цикл</h2>
              <p class="card__text">Стены и перекрытия, кровля, благоустройство прилегающей территории.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-roads.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1519331379826-f10be5486c6f?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Дорога и тротуарное покрытие" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Дороги и благоустройство</h2>
              <p class="card__text">Мощение, тротуарная плитка, асфальтирование, ограждения.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-facade.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Современный фасад здания" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Фасадные работы</h2>
              <p class="card__text">Строительный и монтажный фасад, штукатурка и финишная отделка.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-bank-fire.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Работа с проектной и финансовой документацией" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Банковские и противопожарные решения</h2>
              <p class="card__text">Перепрофилирование, кассовые блоки, ПП заполнения проёмов.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/service-social.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Жилая застройка и благоустройство двора" loading="lazy" decoding="async">
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
