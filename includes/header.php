<?php
/** @var string $navActive */
$navActive = $navActive ?? '';
$isContactsPage = $navActive === 'contacts';

if (!function_exists('nav_is_current')) {
    function nav_is_current(string $page, string $active): string
    {
        return $page === $active ? ' aria-current="page"' : '';
    }
}
?>
  <div class="topbar" role="note">
    <div class="container topbar__inner">
      <span class="topbar__item topbar__location">
        <svg class="topbar__icon" width="16" height="16" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
          <path fill="currentColor" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/>
        </svg>
        Санкт-Петербург
      </span>
      <div class="topbar__aside">
        <a class="topbar__link" href="tel:+78124561546">
          <svg class="topbar__icon topbar__icon--phone" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.12.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.9a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.58 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
          +7 (812) 456-15-46
        </a>
        <a class="topbar__link" href="mailto:petrospecmontag@mail.ru">
          <svg class="topbar__icon" width="16" height="16" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path fill="currentColor" d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 3.3l-8 5.2-8-5.2V6l8 5 8-5v1.3z"/>
          </svg>
          petrospecmontag@mail.ru
        </a>
        <span class="topbar__divider" aria-hidden="true"></span>
        <nav class="topbar__social" aria-label="Соцсети">
          <a class="topbar__social-link" href="#" aria-label="ВКонтакте">
            <img class="topbar__social-icon" src="/images/icon-vk.svg" width="18" height="18" alt="">
          </a>
          <a class="topbar__social-link" href="https://rutube.ru/channel/55926688/" target="_blank" rel="noopener noreferrer" aria-label="Rutube">
            <img class="topbar__social-icon" src="/images/icon-rutube.svg" width="18" height="18" alt="">
          </a>
          <a class="topbar__social-link" href="#" aria-label="MAX">
            <img class="topbar__social-icon" src="/images/icon-max.svg" width="18" height="18" alt="">
          </a>
        </nav>
      </div>
    </div>
  </div>

  <header class="header" id="top">
    <div class="container header__inner">
      <a class="logo" href="/">
        <img class="logo__image" src="images/logo.png" alt="Петроспецмонтаж">
        <!-- <span class="logo__mark" aria-hidden="true"></span> -->
        <!-- <span class="logo__text">Петроспец<span>монтаж</span></span> -->
      </a>
      <nav class="nav" id="nav" aria-label="Основное меню">
        <ul class="nav__list">
          <li><a href="/"<?= nav_is_current('index', $navActive) ?>>Главная</a></li>
          <li><a href="/about.php"<?= nav_is_current('about', $navActive) ?>>О компании</a></li>
          <li><a href="/services.php"<?= nav_is_current('services', $navActive) ?>>Услуги</a></li>
          <li><a href="/production.php"<?= nav_is_current('production', $navActive) ?>>Производство</a></li>
          <li><a href="/projects.php"<?= nav_is_current('projects', $navActive) ?>>Объекты</a></li>
          <li><a href="/news.php"<?= nav_is_current('news', $navActive) ?>>Новости</a></li>
          <li><a href="/contacts.php"<?= nav_is_current('contacts', $navActive) ?>>Контакты</a></li>
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
