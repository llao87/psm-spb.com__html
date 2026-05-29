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
require_once __DIR__ . '/includes/functions.php';
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
            <?php news_render_card($item); ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
