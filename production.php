<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Производство — Петроспецмонтаж</title>
  <meta name="description" content="Собственное производство металлоконструкций, фасадных кассет и изделий по проекту в Санкт-Петербурге и ЛО.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
$navActive = 'production';
require __DIR__ . '/includes/header.php';
?>

<main>
    <div class="page-hero">
      <div class="container">
        <p class="page-hero__crumb">Производство</p>
        <h1 class="page-hero__title">Собственное производство</h1>
        <p class="page-hero__lead">Изготавливаем металлоконструкции, фасадные кассеты и сопутствующие изделия по рабочей документации — контроль геометрии, покрытий и отгрузки с площадки на объекте.</p>
      </div>
    </div>

    <section class="section activity">
      <div class="container">
        <div class="cards">
          <a class="card card--service card--reveal" href="/production-lstk.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1635322966219-b75ed372eb01?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Металлокаркас и инженерные коммуникации в объёме" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">ЛСТК-профили и каркасы</h2>
              <p class="card__text">Профили и узлы из тонколистовой стали для каркасов зданий, навесов и технологических эстакад.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/production-fasad-kasety.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Облицовка высотного фасада, кассетная логика рядов" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Фасадные кассеты и панели</h2>
              <p class="card__text">Кассеты и облицовочные панели под НВФ и вентфасады, подбор крепежа и цвета по спецификации.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/production-metallo.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Монтаж металлоконструкций на площадке" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Металлоконструкции по проекту</h2>
              <p class="card__text">Балки, колонны, фермы и нестандартные узлы по чертежам заказчика с маркировкой для монтажа.</p>
            </div>
          </a>
          <a class="card card--service card--reveal" href="/production-ograzhdeniya.php">
            <div class="card__media">
              <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Малоэтажная застройка, ограждения и благоустройство участка" loading="lazy" decoding="async">
            </div>
            <div class="card__body">
              <h2 class="card__title">Ограждения и малые формы</h2>
              <p class="card__text">Парапеты, лестничные марши, навесы и ограждения кровли — серийно и по индивидуальным эскизам.</p>
            </div>
          </a>
        </div>
        <p class="section-note">Нужен расчёт по металлу, покрытию или отгрузке партиями? <a href="/contacts.php#request">Оставьте заявку</a> — приложим опыт производства к вашему объекту.</p>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
