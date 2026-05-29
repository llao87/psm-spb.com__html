<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Производство — Петроспецмонтаж</title>
  <meta name="description" content="Собственное производство металлоконструкций, фасадных кассет и изделий по проекту в Санкт-Петербурге и ЛО.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
$navActive = 'production';
require __DIR__ . '/includes/header.php';
?>

<main>
    <div class="page-hero">
      <div class="container">
        <p class="page-hero__crumb">Производство</p>
        <h1 class="page-hero__title">Собственное производство</h1>
        <p class="page-hero__lead">Изготавливаем металлоконструкции, фасадные кассеты и сопутствующие изделия по рабочей документации — контроль геометрии, покрытий и отгрузки с площадки на объекте.</p>
      </div>
    </div>

    <section class="section activity">
      <div class="container">
        <div class="cards">
          <?php catalog_render_cards(production_get_all(), 2); ?>
        </div>
        <p class="section-note">Нужен расчёт по металлу, покрытию или отгрузке партиями? <a href="/contacts.php#request">Оставьте заявку</a> — приложим опыт производства к вашему объекту.</p>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
