<?php
/** @var list<array{image: string, imageAlt: string}> $reviews */
?>
<section class="section home-reviews">
  <div class="container">
    <header class="section__head">
      <h2 class="section__title">Отзывы</h2>
      <p class="section__intro">Благодарственные письма и отзывы заказчиков о нашей работе.</p>
    </header>
    <div class="reviews-carousel" id="reviewsCarousel">
      <div class="swiper reviews-carousel__swiper">
        <div class="swiper-wrapper">
          <?php foreach ($reviews as $review): ?>
          <div class="swiper-slide">
            <?php reviews_render_slide($review); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="carousel-controls">
        <button type="button" class="carousel-controls__btn carousel-controls__btn--prev" aria-label="Предыдущий отзыв">
          <span aria-hidden="true">‹</span>
        </button>
        <button type="button" class="carousel-controls__btn carousel-controls__btn--next" aria-label="Следующий отзыв">
          <span aria-hidden="true">›</span>
        </button>
      </div>
    </div>
  </div>
</section>

<div
  class="review-lightbox"
  id="reviewLightbox"
  role="dialog"
  aria-modal="true"
  aria-labelledby="reviewLightboxTitle"
  hidden
>
  <div class="review-lightbox__backdrop" data-review-lb-close tabindex="-1" aria-hidden="true"></div>
  <div class="review-lightbox__panel">
    <button type="button" class="review-lightbox__close" data-review-lb-close aria-label="Закрыть">×</button>
    <p class="sr-only" id="reviewLightboxTitle">Просмотр отзыва</p>
    <figure class="review-lightbox__figure">
      <img class="review-lightbox__img" id="reviewLightboxImg" src="" alt="">
    </figure>
  </div>
</div>
