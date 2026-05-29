<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Услуги — Петроспецмонтаж</title>
  <meta name="description" content="Проектирование, инженерные системы, строительство и благоустройство в Санкт-Петербурге и ЛО.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
$navActive = 'services';
require __DIR__ . '/includes/header.php';
?>

<main>
    <div class="page-hero">
      <div class="container">
        <p class="page-hero__crumb">Услуги</p>
        <h1 class="page-hero__title">Наша деятельность</h1>
        <p class="page-hero__lead">Проектно-изыскательский блок, инженерные системы, строительство и благоустройство — единая команда и понятные этапы.</p>
      </div>
    </div>

    <section class="section activity">
      <div class="container">
        <div class="cards">
          <?php catalog_render_cards(services_get_all(), 2); ?>
        </div>
        <p class="section-note">Нужна консультация по конкретному объекту? <a href="/contacts.php#request">Напишите или позвоните</a> — подберём состав работ.</p>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
