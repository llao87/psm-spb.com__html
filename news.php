<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Новости — Петроспецмонтаж</title>
  <meta name="description" content="Новости компании: сметы, фасады, благоустройство, мероприятия. Санкт-Петербург.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
$navActive = 'news';
require __DIR__ . '/includes/header.php';
?>

<main>
    <div class="page-hero">
      <div class="container">
        <p class="page-hero__crumb">Медиа</p>
        <h1 class="page-hero__title">Новости</h1>
        <p class="page-hero__lead">Анонсы услуг, заметки для заказчиков и отчёты о ключевых этапах работ — кратко и по делу.</p>
      </div>
    </div>

    <section class="section">
      <div class="container">
        <ul class="news-list news-list--grid">
          <li>
            <a class="news-card card--reveal" href="/news-smeta-dva-chasa.php">
              <div class="news-card__media">
                <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Смета и проектная документация" loading="lazy" decoding="async">
              </div>
              <div class="news-card__body">
                <div class="news-card__meta">
                  <time datetime="2026-03-18">18 марта 2026</time>
                  <span class="news-card__tag">Сервис</span>
                </div>
                <h2 class="news-card__title">Предварительная смета за два часа: как мы считаем без визита</h2>
                <p class="news-card__excerpt">Что нужно в заявке, как формируется ориентир по стоимости и когда имеет смысл выезжать на объект.</p>
                <span class="news-card__more">Читать далее</span>
              </div>
            </a>
          </li>
          <li>
            <a class="news-card card--reveal" href="/news-fasad-zimoy.php">
              <div class="news-card__media">
                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Фасадные работы" loading="lazy" decoding="async">
              </div>
              <div class="news-card__body">
                <div class="news-card__meta">
                  <time datetime="2026-02-06">6 февраля 2026</time>
                  <span class="news-card__tag">Фасады</span>
                </div>
                <h2 class="news-card__title">Фасадные работы зимой: температурные вилки и контроль материала</h2>
                <p class="news-card__excerpt">Когда монтаж допустим без потери гарантии, что проверяем на площадке до старта и как ведём журнал.</p>
                <span class="news-card__more">Читать далее</span>
              </div>
            </a>
          </li>
          <li>
            <a class="news-card card--reveal" href="/news-blagoustroystvo-etapy.php">
              <div class="news-card__media">
                <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Благоустройство территории" loading="lazy" decoding="async">
              </div>
              <div class="news-card__body">
                <div class="news-card__meta">
                  <time datetime="2026-01-22">22 января 2026</time>
                  <span class="news-card__tag">Благоустройство</span>
                </div>
                <h2 class="news-card__title">Благоустройство прилегающей территории: этапы и сроки</h2>
                <p class="news-card__excerpt">От съёмки существующих покрытий до приёмки: типовая последовательность и где чаще всего сдвигаются даты.</p>
                <span class="news-card__more">Читать далее</span>
              </div>
            </a>
          </li>
          <li>
            <a class="news-card card--reveal" href="/news-vystavka-2026.php">
              <div class="news-card__media">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&amp;fit=crop&amp;w=800&amp;h=500&amp;q=80" width="800" height="500" alt="Деловая встреча и консультации" loading="lazy" decoding="async">
              </div>
              <div class="news-card__body">
                <div class="news-card__meta">
                  <time datetime="2025-12-02">2 декабря 2025</time>
                  <span class="news-card__tag">События</span>
                </div>
                <h2 class="news-card__title">Участие в отраслевой выставке: встречи и консультации</h2>
                <p class="news-card__excerpt">Итоги стенда, темы, которые обсуждали чаще всего, и как записаться на повторную консультацию после мероприятия.</p>
                <span class="news-card__more">Читать далее</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
