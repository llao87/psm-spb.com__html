<?php
/** @var array{href: string, image: string, imageAlt: string, title: string, text: string} $item */
/** @var int $headingLevel */
$headingTag = $headingLevel === 3 ? 'h3' : 'h2';
?>
<a class="card card--service card--reveal" href="<?= e($item['href']) ?>">
  <div class="card__media">
    <img src="<?= e($item['image']) ?>" width="800" height="500" alt="<?= e($item['imageAlt']) ?>" loading="lazy" decoding="async">
  </div>
  <div class="card__body">
    <<?= $headingTag ?> class="card__title"><?= e($item['title']) ?></<?= $headingTag ?>>
    <p class="card__text"><?= e($item['text']) ?></p>
  </div>
</a>
