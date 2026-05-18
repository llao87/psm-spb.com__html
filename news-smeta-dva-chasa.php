<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Предварительная смета за два часа — новости Петроспецмонтаж</title>
  <meta name="description" content="Как формируется ориентировочная смета за два часа без выезда на объект.">
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
        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&amp;fit=crop&amp;w=1600&amp;h=700&amp;q=80" width="1600" height="700" alt="Работа с проектом и сметой на объекте" fetchpriority="high" decoding="async">
      </div>
      <div class="article-cover__shade" aria-hidden="true"></div>
      <div class="article-cover__content container">
        <nav class="breadcrumb" aria-label="Навигация по сайту">
          <a href="/index.php">Главная</a><span>/</span><a href="/news.php">Новости</a><span>/</span><span>Смета</span>
        </nav>
        <p class="article-cover__meta">Сервис · 18 марта 2026</p>
        <h1 class="article-cover__title">Предварительная смета за два часа: как мы считаем без визита</h1>
      </div>
    </header>

    <section class="section section--article">
      <div class="container article__inner">
        <p class="article__lead">Ориентир по стоимости и объёму работ помогает сразу понять порядок бюджета и сроки следующего шага — детального обследования или выезда.</p>
        <div class="article__body">
          <h2>Что указывать в заявке</h2>
          <p>Тип объекта, примерная площадь или этажность, желаемые виды работ и контакт для уточнений. Чем конкретнее формулировка, тем точнее получится первая оценка.</p>
          <figure class="article-fig article-fig--small">
            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&amp;fit=crop&amp;w=720&amp;h=480&amp;q=80" width="720" height="480" alt="Пример заполненной заявки и опорный перечень работ" loading="lazy" decoding="async">
            <figcaption>Заявка с привязкой к этажам и видам работ ускоряет первичный разбор.</figcaption>
          </figure>
          <h2>Как строится расчёт</h2>
          <p>Мы опираемся на типовые узлы и накопленную статистику по схожим объектам в регионе. Это не замена обмеров и проектной документации, а рабочий ориентир для планирования.</p>
          <div class="article-inline-row">
            <figure class="article-fig">
              <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&amp;fit=crop&amp;w=640&amp;h=420&amp;q=80" width="640" height="420" alt="Сравнение типовых узлов в сметной модели" loading="lazy" decoding="async">
              <figcaption>Типовые узлы в модели.</figcaption>
            </figure>
            <figure class="article-fig">
              <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?auto=format&amp;fit=crop&amp;w=640&amp;h=420&amp;q=80" width="640" height="420" alt="График согласования этапов расчёта" loading="lazy" decoding="async">
              <figcaption>Этапы согласования ориентира.</figcaption>
            </figure>
          </div>
          <h2>Когда нужен выезд</h2>
          <p>При нестандартных конструкциях, скрытых инженерных сетях или требованиях к фасадным решениям без осмотра нельзя гарантировать финальную цифру — тогда договоримся о визите инженера.</p>
        </div>
        <p class="article__foot"><a href="/news.php">← Все новости</a> · <a href="/contacts.php#request">Оставить заявку на смету</a></p>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
