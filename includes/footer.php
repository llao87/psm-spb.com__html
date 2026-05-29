<?php
/** @var string|null $footerId */
/** @var string|null $legalActive */
$footerId = $footerId ?? null;
$legalActive = $legalActive ?? null;
$site = site_get_contacts();
$socialLinks = social_get_links();
?>
  <footer class="footer"<?= $footerId ? ' id="' . e($footerId) . '"' : '' ?>>
    <div class="container footer__grid">
      <div>
        <p class="footer__brand"><?= e($site['company']) ?></p>
        <p class="footer__tag"><?= e($site['tagline']) ?></p>
      </div>
      <div>
        <h3 class="footer__heading">Меню</h3>
        <ul class="footer__links">
          <?php foreach (nav_get_primary() as $item): ?>
          <li><a href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div>
        <h3 class="footer__heading">Контакты</h3>
        <ul class="footer__links">
          <li><a href="/contacts.php">Производство и офис</a></li>
          <li><?= e($site['addressFooter']) ?></li>
          <li><a href="<?= e($site['phoneHref']) ?>"><?= e($site['phone']) ?></a></li>
          <li><a href="<?= e($site['emailHref']) ?>"><?= e($site['email']) ?></a></li>
        </ul>
      </div>
      <div>
        <h3 class="footer__heading">Соцсети</h3>
        <nav class="footer__social" aria-label="Соцсети">
          <?php foreach ($socialLinks as $link): ?>
          <a class="footer__social-link" href="<?= e($link['href']) ?>" aria-label="<?= e($link['ariaLabel']) ?>"<?= $link['external'] ? ' target="_blank" rel="noopener noreferrer"' : '' ?>>
            <img class="footer__social-icon" src="<?= e($link['icon']) ?>" width="18" height="18" alt="">
          </a>
          <?php endforeach; ?>
        </nav>
        <p class="footer__legal">
          <a href="/privacy.php"<?= legal_is_current('privacy', $legalActive) ?>>Политика конфиденциальности</a>
          ·
          <a href="/consent.php"<?= legal_is_current('consent', $legalActive) ?>>Согласие на обработку персональных данных</a>
        </p>
      </div>
    </div>
    <div class="container">
      <p class="footer__copy">© <?= date('Y') ?> <?= e($site['company']) ?></p>
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
