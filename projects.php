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
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
$navActive = 'projects';
require __DIR__ . '/includes/header.php';
?>

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

<?php require __DIR__ . '/includes/footer.php'; ?>
