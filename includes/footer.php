<?php
/** @var string|null $footerId */
/** @var string|null $legalActive */
$footerId = $footerId ?? null;
$legalActive = $legalActive ?? null;
?>
  <footer class="footer"<?= $footerId ? ' id="' . htmlspecialchars($footerId, ENT_QUOTES, 'UTF-8') . '"' : '' ?>>
    <div class="container footer__grid">
      <div>
        <p class="footer__brand">ООО «Петроспецмонтаж»</p>
        <p class="footer__tag">Проектирование и строительство в Санкт-Петербурге и Ленинградской области</p>
      </div>
      <div>
        <h3 class="footer__heading">Меню</h3>
        <ul class="footer__links">
          <li><a href="/index.php">Главная</a></li>
          <li><a href="/services.php">Услуги</a></li>
          <li><a href="/production.php">Производство</a></li>
          <li><a href="/projects.php">Объекты</a></li>
          <li><a href="/news.php">Новости</a></li>
          <li><a href="/about.php">О компании</a></li>
          <li><a href="/contacts.php">Контакты</a></li>
        </ul>
      </div>
      <div>
        <h3 class="footer__heading">Контакты</h3>
        <ul class="footer__links">
          <li><a href="/contacts.php">Производство и офис</a></li>
          <li>192019, СПб, вн. тер. «Невская Застава», ул. Хрустальная, 18, лит. А, пом. 411</li>
          <li><a href="tel:+78124561546">+7 (812) 456-15-46</a></li>
          <li><a href="mailto:petrospecmontag@mail.ru">petrospecmontag@mail.ru</a></li>
        </ul>
      </div>
      <div>
        <h3 class="footer__heading">Соцсети</h3>
        <a class="footer__social" href="#" rel="noopener noreferrer">ВКонтакте</a>
        <p class="footer__legal">
          <a href="/privacy.php"<?= $legalActive === 'privacy' ? ' aria-current="page"' : '' ?>>Политика конфиденциальности</a>
          ·
          <a href="/consent.php"<?= $legalActive === 'consent' ? ' aria-current="page"' : '' ?>>Согласие на обработку персональных данных</a>
        </p>
        <p class="footer__copy">© <span id="year"></span> ООО «Петроспецмонтаж»</p>
      </div>
    </div>
  </footer>

  <div class="cb-modal" id="callbackModal" role="dialog" aria-modal="true" aria-labelledby="callbackModalTitle" hidden>
    <div class="cb-modal__backdrop" data-cb-close tabindex="-1" aria-hidden="true"></div>
    <div class="cb-modal__panel">
      <button type="button" class="cb-modal__close" data-cb-close aria-label="Закрыть">×</button>
      <h2 id="callbackModalTitle">Заказать обратный звонок</h2>
      <p class="contact-card__intro">Укажите телефон и при необходимости кратко опишите задачу — менеджер свяжется с вами в рабочее время.</p>
      <form class="lead-form lead-form--stack js-lead-form js-callback-form" novalidate>
        <label class="sr-only" for="callback-name">Имя</label>
        <input class="lead-form__field" type="text" id="callback-name" name="name" placeholder="Имя" autocomplete="name">
        <label class="sr-only" for="callback-phone">Телефон</label>
        <input class="lead-form__field js-phone-mask" type="tel" id="callback-phone" name="phone" inputmode="tel" autocomplete="tel" placeholder="+7 (___) ___-__-__" required>
        <label class="sr-only" for="callback-msg">Сообщение</label>
        <textarea class="lead-form__field" id="callback-msg" name="message" placeholder="Тип объекта, сроки, вопрос"></textarea>
        <label class="lead-form__check">
          <input type="checkbox" name="pd_consent" value="1" required>
          <span>Ознакомлен(а) с <a href="/privacy.php" target="_blank" rel="noopener noreferrer">Политикой в отношении обработки персональных данных</a> и даю <a href="/consent.php" target="_blank" rel="noopener noreferrer">согласие на обработку персональных данных</a> в соответствии с Федеральным законом № 152-ФЗ «О персональных данных».</span>
        </label>
        <div class="form-toast" role="status" aria-live="polite" aria-atomic="true" hidden></div>
        <button class="btn btn--primary btn--block" type="submit">Отправить заявку</button>
      </form>
    </div>
  </div>

<script src="/js/vendor/inputmask.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
