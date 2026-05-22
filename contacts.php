<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контакты — Петроспецмонтаж</title>
  <meta name="description" content="Адрес, телефон, почта и форма заявки. ООО «Петроспецмонтаж», Санкт-Петербург.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
$navActive = 'contacts';
require __DIR__ . '/includes/header.php';
?>

<main>
    <div class="page-hero">
      <div class="container">
        <p class="page-hero__crumb">Связь</p>
        <h1 class="page-hero__title">Контакты</h1>
        <p class="page-hero__lead">Позвоните или оставьте заявку — ответим в рабочее время, подскажем следующий шаг по вашему объекту.</p>
      </div>
    </div>

    <section class="section">
      <div class="container contact-page">
        <div class="contact-grid">
          <div class="contact-card card--reveal">
            <h2>Реквизиты и адрес</h2>
            <ul>
              <li><strong>Офис и производство</strong><br>192019, г. Санкт-Петербург, вн. тер. «Невская Застава», ул. Хрустальная, д. 18, лит. А, пом. 411</li>
              <li><a href="tel:+78124561546">+7 (812) 456-15-46</a></li>
              <li><a href="mailto:petrospecmontag@mail.ru">petrospecmontag@mail.ru</a></li>
            </ul>
            <p class="contact-card__hint">Схема проезда и парковка — по запросу менеджера.</p>
          </div>

          <div class="contact-card card--reveal" id="request">
            <h2>Заявка на расчёт</h2>
            <p class="contact-card__intro">Укажите телефон — перезвоним. Кратко опишите задачу при желании.</p>
            <form class="lead-form lead-form--stack js-lead-form" novalidate>
              <label class="sr-only" for="contactName">Имя</label>
              <input class="lead-form__field" type="text" id="contactName" name="name" placeholder="Имя" autocomplete="name">
              <label class="sr-only" for="contactPhone">Телефон</label>
              <input class="lead-form__field js-phone-mask" type="tel" id="contactPhone" name="phone" inputmode="tel" autocomplete="tel" placeholder="+7 (___) ___-__-__" required>
              <label class="sr-only" for="contactMsg">Сообщение</label>
              <textarea class="lead-form__field" id="contactMsg" name="message" placeholder="Тип объекта, площадь, сроки"></textarea>
              <label class="lead-form__check">
                <input type="checkbox" id="contactPdConsent" name="pd_consent" value="1" required>
                <span>Ознакомлен(а) с <a href="/privacy.php" target="_blank" rel="noopener noreferrer">Политикой в отношении обработки персональных данных</a> и даю <a href="/consent.php" target="_blank" rel="noopener noreferrer">согласие на обработку персональных данных</a> в соответствии с Федеральным законом № 152-ФЗ «О персональных данных».</span>
              </label>
              <div class="form-toast" role="status" aria-live="polite" aria-atomic="true" hidden></div>
              <button class="btn btn--primary btn--block" type="submit">Отправить заявку</button>
            </form>
          </div>
        </div>

        <div class="contact-osm card--reveal" aria-labelledby="contact-osm-title">
          <h2 class="contact-osm__title" id="contact-osm-title">Офис на карте</h2>
          <p class="contact-osm__lead">Маркер — ул. Хрустальная, 18 (вн. тер. «Невская Застава»). Карта © участники <a href="https://www.openstreetmap.org/copyright" target="_blank" rel="noopener noreferrer">OpenStreetMap</a>.</p>
          <div class="contact-osm__frame">
            <iframe
              title="Офис ООО «Петроспецмонтаж» на карте OpenStreetMap"
              src="https://www.openstreetmap.org/export/embed.html?bbox=30.3965%2C59.9080%2C30.4070%2C59.9128&amp;layer=mapnik&amp;marker=59.910397%2C30.401765"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <p class="contact-osm__foot">
            <a class="contact-osm__ext" href="https://www.openstreetmap.org/?mlat=59.910397&amp;mlon=30.401765#map=17/59.910397/30.401765" target="_blank" rel="noopener noreferrer">Открыть крупнее на OpenStreetMap</a>
          </p>
        </div>
      </div>
    </section>

    <section class="section pricelist">
      <div class="container pricelist__box">
        <h2 class="pricelist__title">Прайс на услуги</h2>
        <p class="pricelist__text">Запросите актуальный прайс-лист — пришлём на почту в течение одного рабочего дня.</p>
        <button class="btn btn--primary" type="button" id="pricelistBtn">Получить прайс-лист</button>
        <div class="form-toast" role="status" aria-live="polite" aria-atomic="true" hidden></div>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
