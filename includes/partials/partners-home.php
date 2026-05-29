<?php
/** @var list<array{name: string, logo: string, href: string, logoAlt: string}> $partners */
$useSwiper = partners_use_swiper($partners);
?>
<section class="section home-partners">
  <div class="container">
    <header class="section__head">
      <h2 class="section__title">Партнёры</h2>
    </header>
    <?php if ($useSwiper): ?>
    <div class="partners-carousel" id="partnersCarousel">
      <div class="swiper partners-carousel__swiper">
        <div class="swiper-wrapper">
          <?php foreach ($partners as $partner): ?>
          <div class="swiper-slide">
            <?php partners_render_item($partner); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="swiper-scrollbar partners-carousel__scrollbar" aria-hidden="true"></div>
    </div>
    <?php else: ?>
    <div class="partners-grid partners-grid--static">
      <?php foreach ($partners as $partner): ?>
        <?php partners_render_item($partner); ?>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
