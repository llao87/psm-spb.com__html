<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Реставрация и реконструкция — услуги Петроспецмонтаж</title>
  <meta name="description" content="Памятники архитектуры, капитальный ремонт и реконструкция с учётом охранных требований.">
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
        <img src="https://images.unsplash.com/photo-1565008576549-57569a49371d?auto=format&amp;fit=crop&amp;w=1600&amp;h=700&amp;q=80" width="1600" height="700" alt="Реставрация и реконструкция зданий" fetchpriority="high" decoding="async">
      </div>
      <div class="article-cover__shade" aria-hidden="true"></div>
      <div class="article-cover__content container">
        <nav class="breadcrumb" aria-label="Навигация по сайту">
          <a href="/index.php">Главная</a><span>/</span><a href="/services.php">Услуги</a><span>/</span><span>Реставрация</span>
        </nav>
        <h1 class="article-cover__title">Реставрация и реконструкция зданий</h1>
      </div>
    </header>

    <section class="section section--article">
      <div class="container article__inner">
        <p class="article__lead">ООО «Петроспецмонтаж» выполняет работы по направлению «Реставрация и реконструкция» в Санкт-Петербурге и Ленинградской области. Ниже — кратко о составе услуги и как с нами связаться.</p>
        <div class="article__body">
          <h2>Опыт</h2>
          <p>Работаем с объектами культурного наследия и зданиями с повышенными требованиями к узлам и материалам.</p>
          <h2>Этапы</h2>
          <p>Обследование, проект реставрации или реконструкции, согласования и поэтапный вывод объекта на приёмку.</p>
        </div>
        <p class="article__foot"><a href="/services.php">← Все услуги</a></p>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
