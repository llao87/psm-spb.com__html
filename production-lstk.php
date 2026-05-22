<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ЛСТК-профили и каркасы — производство Петроспецмонтаж</title>
  <meta name="description" content="Изготовление профилей и каркасов из ЛСТК по проекту в СПб и ЛО.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
$navActive = '';
require __DIR__ . '/includes/header.php';
?>

<main class="article">
    <header class="article-cover">
      <div class="article-cover__media" aria-hidden="true">
        <img src="https://images.unsplash.com/photo-1635322966219-b75ed372eb01?auto=format&amp;fit=crop&amp;w=1600&amp;h=700&amp;q=80" width="1600" height="700" alt="Производство и монтаж металлоконструкций" fetchpriority="high" decoding="async">
      </div>
      <div class="article-cover__shade" aria-hidden="true"></div>
      <div class="article-cover__content container">
        <nav class="breadcrumb" aria-label="Навигация по сайту">
          <a href="/index.php">Главная</a><span>/</span><a href="/production.php">Производство</a><span>/</span><span>ЛСТК</span>
        </nav>
        <h1 class="article-cover__title">ЛСТК-профили и каркасы</h1>
      </div>
    </header>

    <section class="section section--article">
      <div class="container article__inner">
        <p class="article__lead">Производим элементы из тонколистовой стали по рабочей документации: стеновые и кровельные стойки, ригели, обвязку проёмов и узлы сопряжения с существующими конструкциями.</p>
        <div class="article__body">
          <h2>Оснащение и контроль</h2>
          <p>Раскрой и гибка на профилегибочном оборудовании, сварка в защитной среде по назначенным швам, геометрический контроль готовых каркасов перед маркировкой.</p>
          <h2>Поставка</h2>
          <p>Комплектуем партии с ведомостью марок, упаковкой для транспортировки и при необходимости сопровождаем монтаж на объекте.</p>
        </div>
        <p class="article__foot"><a href="/production.php">← Всё производство</a></p>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
