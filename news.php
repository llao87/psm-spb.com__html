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
require __DIR__ . '/includes/news-data.php';
$newsItems = news_get_all_sorted();
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
          <?php foreach ($newsItems as $item): ?>
          <li>
            <a class="news-card card--reveal" href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>">
              <div class="news-card__media">
                <img src="<?= htmlspecialchars($item['imageCard'], ENT_QUOTES, 'UTF-8') ?>" width="800" height="500" alt="<?= htmlspecialchars($item['imageAlt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy" decoding="async">
              </div>
              <div class="news-card__body">
                <div class="news-card__meta">
                  <time datetime="<?= htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($item['dateFull'], ENT_QUOTES, 'UTF-8') ?></time>
                  <span class="news-card__tag"><?= htmlspecialchars($item['tag'], ENT_QUOTES, 'UTF-8') ?></span>
                </div>
                <h2 class="news-card__title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p class="news-card__excerpt"><?= htmlspecialchars($item['excerpt'], ENT_QUOTES, 'UTF-8') ?></p>
                <span class="news-card__more">Читать далее</span>
              </div>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
