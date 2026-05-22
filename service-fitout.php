<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Отделка и ремонт — услуги Петроспецмонтаж</title>
  <meta name="description" content="Жилые и загородные дома, офисы, торговые и HoReCa-пространства.">
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
        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&amp;fit=crop&amp;w=1600&amp;h=700&amp;q=80" width="1600" height="700" alt="Отделка и ремонт помещений" fetchpriority="high" decoding="async">
      </div>
      <div class="article-cover__shade" aria-hidden="true"></div>
      <div class="article-cover__content container">
        <nav class="breadcrumb" aria-label="Навигация по сайту">
          <a href="/index.php">Главная</a><span>/</span><a href="/services.php">Услуги</a><span>/</span><span>Отделка</span>
        </nav>
        <h1 class="article-cover__title">Отделка и ремонт помещений</h1>
      </div>
    </header>

    <section class="section section--article">
      <div class="container article__inner">
        <p class="article__lead">ООО «Петроспецмонтаж» выполняет работы по направлению «Отделка и ремонт» в Санкт-Петербурге и Ленинградской области. Ниже — кратко о составе услуги и как с нами связаться.</p>
        <div class="article__body">
          <h2>Форматы</h2>
          <p>Чистовая и черновая отделка, перепланировки по согласованию, поставка материалов и авторский надзор по запросу.</p>
          <h2>Сроки</h2>
          <p>График работ фиксируем в договоре; промежуточные приёмки — по актам.</p>
        </div>
        <p class="article__foot"><a href="/services.php">← Все услуги</a></p>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
