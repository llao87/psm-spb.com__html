<?php
require_once __DIR__ . '/functions.php';

/** @var string $navActive */
$navActive = $navActive ?? '';
$isContactsPage = $navActive === 'contacts';
$site = site_get_contacts();
$socialLinks = social_get_links();
?>
  <div class="topbar" role="note">
    <div class="container topbar__inner">
      <span class="topbar__item topbar__location">
        <svg class="topbar__icon" width="16" height="16" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
          <path fill="currentColor" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/>
        </svg>
        <?= e($site['city']) ?>
      </span>
      <div class="topbar__aside">
        <a class="topbar__link" href="<?= e($site['phoneHref']) ?>">
          <svg class="topbar__icon topbar__icon--phone" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.12.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.9a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.58 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
          <?= e($site['phone']) ?>
        </a>
        <a class="topbar__link" href="<?= e($site['emailHref']) ?>">
          <svg class="topbar__icon" width="16" height="16" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path fill="currentColor" d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 3.3l-8 5.2-8-5.2V6l8 5 8-5v1.3z"/>
          </svg>
          <?= e($site['email']) ?>
        </a>
        <span class="topbar__divider" aria-hidden="true"></span>
        <nav class="topbar__social" aria-label="Соцсети">
          <?php foreach ($socialLinks as $link): ?>
          <a class="topbar__social-link" href="<?= e($link['href']) ?>" aria-label="<?= e($link['ariaLabel']) ?>"<?= $link['external'] ? ' target="_blank" rel="noopener noreferrer"' : '' ?>>
            <img class="topbar__social-icon" src="<?= e($link['iconTopbar']) ?>" width="18" height="18" alt="">
          </a>
          <?php endforeach; ?>
        </nav>
      </div>
    </div>
  </div>

  <header class="header" id="top">
    <div class="container header__inner">
      <a class="logo" href="/">
        <img class="logo__image" src="images/logo.png" alt="Петроспецмонтаж">
      </a>
      <nav class="nav" id="nav" aria-label="Основное меню">
        <ul class="nav__list">
          <?php foreach (nav_get_primary() as $item): ?>
          <li><a href="<?= e($item['href']) ?>"<?= nav_is_current($item['id'], $navActive) ?>><?= e($item['label']) ?></a></li>
          <?php endforeach; ?>
        </ul>
        <?php if ($isContactsPage): ?>
        <a class="btn btn--primary nav__cta" href="#request">Оставить заявку</a>
        <?php else: ?>
        <button type="button" class="btn btn--primary nav__cta js-open-callback" aria-haspopup="dialog" aria-controls="callbackModal">Оставить заявку</button>
        <?php endif; ?>
      </nav>
      <button class="burger" type="button" id="burger" aria-controls="nav" aria-expanded="false" aria-label="Открыть меню">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>
