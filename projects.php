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
          <button class="tabs__btn" type="button" role="tab" aria-selected="false" data-filter="state">Государственные объекты</button>
        </div>
        <div class="projects" id="projects">
          <?php projects_render_grid(projects_get_all()); ?>
        </div>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php projects_print_gallery_script(); ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
