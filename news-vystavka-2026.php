<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Отраслевая выставка: итоги — новости Петроспецмонтаж</title>
  <meta name="description" content="Итоги участия в выставке, темы консультаций и запись на встречу после мероприятия.">
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
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&amp;fit=crop&amp;w=1600&amp;h=700&amp;q=80" width="1600" height="700" alt="Деловая встреча и консультации" fetchpriority="high" decoding="async">
      </div>
      <div class="article-cover__shade" aria-hidden="true"></div>
      <div class="article-cover__content container">
        <nav class="breadcrumb" aria-label="Навигация по сайту">
          <a href="/index.php">Главная</a><span>/</span><a href="/news.php">Новости</a><span>/</span><span>События</span>
        </nav>
        <p class="article-cover__meta">События · 2 декабря 2025</p>
        <h1 class="article-cover__title">Участие в отраслевой выставке: встречи и консультации</h1>
      </div>
    </header>

    <section class="section section--article">
      <div class="container article__inner">
        <p class="article__lead">На стенде обсудили более сорока проектов — от ремонта коммерческих площадей до реконструкции промышленных корпусов.</p>
        <div class="article__body">
          <h2>Что спрашивали чаще всего</h2>
          <p>Сроки выдачи предварительной сметы, состав генподрядного контура и опыт работы с фасадными системами в условиях плотной городской застройки.</p>
          <figure class="article-fig article-fig--small">
            <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?auto=format&amp;fit=crop&amp;w=720&amp;h=480&amp;q=80" width="720" height="480" alt="Консультация у стенда с образцами материалов" loading="lazy" decoding="async">
            <figcaption>Живые консультации у стенда по материалам и срокам.</figcaption>
          </figure>
          <h2>Как продолжить диалог</h2>
          <p>Если вы оставили контакт на мероприятии, менеджер направит уточняющий чек-лист. Новые заявки принимаем через форму на сайте — укажите «выставка» в комментарии.</p>
          <div class="article-inline-row">
            <figure class="article-fig">
              <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&amp;fit=crop&amp;w=640&amp;h=420&amp;q=80" width="640" height="420" alt="Встреча с партнёрами на площадке выставки" loading="lazy" decoding="async">
              <figcaption>Встречи с партнёрами.</figcaption>
            </figure>
            <figure class="article-fig">
              <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&amp;fit=crop&amp;w=640&amp;h=420&amp;q=80" width="640" height="420" alt="Раздаточные материалы и контакты после мероприятия" loading="lazy" decoding="async">
              <figcaption>Материалы и контакты после выставки.</figcaption>
            </figure>
          </div>
          <h2>Благодарности</h2>
          <p>Благодарим партнёров за совместные встречи и заказчиков, которые пришли с конкретными планами — так разговор сразу переходит к делу.</p>
        </div>
        <p class="article__foot"><a href="/news.php">← Все новости</a> · <a href="/contacts.php#request">Связаться с нами</a></p>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
