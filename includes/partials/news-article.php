<?php
/** @var array<string, mixed> $item */
?>
<main class="article">
  <header class="article-cover">
    <div class="article-cover__media" aria-hidden="true">
      <img src="<?= e($item['coverImage']) ?>" width="1600" height="700" alt="<?= e($item['coverAlt']) ?>" fetchpriority="high" decoding="async">
    </div>
    <div class="article-cover__shade" aria-hidden="true"></div>
    <div class="article-cover__content container">
      <nav class="breadcrumb" aria-label="Навигация по сайту">
        <a href="/index.php">Главная</a><span>/</span><a href="/news.php">Новости</a><span>/</span><span><?= e($item['breadcrumbShort']) ?></span>
      </nav>
      <p class="article-cover__meta"><?= e($item['tag']) ?> · <?= e($item['dateFull']) ?></p>
      <h1 class="article-cover__title"><?= e($item['title']) ?></h1>
    </div>
  </header>

  <section class="section section--article">
    <div class="container article__inner">
      <p class="article__lead"><?= e($item['lead']) ?></p>
      <div class="article__body">
        <?php news_render_body($item['slug']); ?>
      </div>
      <p class="article__foot"><?= $item['footHtml'] ?></p>
    </div>
  </section>
</main>
