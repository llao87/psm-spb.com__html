<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>О компании — Петроспецмонтаж</title>
  <meta name="description" content="Опыт, ценности и отзывы заказчиков. Проектирование и строительство в СПб и ЛО.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
$navActive = 'about';
require __DIR__ . '/includes/header.php';
?>

<main>
    <div class="page-hero">
      <div class="container">
        <p class="page-hero__crumb">Компания</p>
        <h1 class="page-hero__title">ООО «Петроспецмонтаж»</h1>
        <!-- <p class="page-hero__lead"> -->
        <p>ООО «ПЕТРОСПЕЦМОНТАЖ» — надёжный партнёр в сфере организации и выполнения строительных работ, а также комплексных поставок материалов для фасадных систем. Мы специализируемся на реализации проектов любой сложности, обеспечивая высокое качество и соблюдение всех строительных норм и правил.</p>
        <p>Наш подход основан на балансе между скоростью и качеством: мы оптимизировали строительные процессы, чтобы выполнять работы максимально оперативно, не жертвуя при этом надёжностью и долговечностью конструкций. Каждый проект реализуется с учётом индивидуальных пожеланий заказчика и современных технологических решений.</p>
        <p>Богатый опыт и успешные проекты позволяют нам уверенно смотреть в будущее. Мы стремимся к расширению круга наших клиентов, максимальному удовлетворению их потребностей, постоянному освоению новых технологий и совершенствованию методов работы. Для нас важно не только выполнить взятые на себя обязательства, но и стать для заказчика настоящим партнёром, которому можно доверять.</p>

        <ul>Наши принципы:</ul>
          <li>Профессионализм и ответственность на каждом этапе.</li>
          <li>Индивидуальный подход к каждому проекту.</li>
          <li>Строгое соблюдение сроков и договорённостей.</li>
          <li>Прозрачность и открытость в сотрудничестве.</li>
        </ul>

        <p>Выбирая ООО «ПЕТРОСПЕЦМОНТАЖ», вы выбираете надёжность, качество и современные решения для вашего бизнеса.</p>
      </div>
    </div>

    <section class="section">
      <div class="container">
        <div class="about-split">
          <div class="legal__article about-block about-split__text">
            <h2 class="section__title">О нас</h2>
            <p>Фиксируем объём и сроки в договоре, ведём журнал работ и прозрачную отчётность по смете. На крупных объектах назначаем единого менеджера проекта как точку входа для заказчика.</p>
            <p>География — Санкт-Петербург и Ленинградская область; отдельные направления возможны по согласованию.</p>
          </div>
          <div class="legal__article about-split__media">
            <div class="about-split__figure-wrap">
              <img class="about-split__img" src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&amp;fit=crop&amp;w=900&amp;h=700&amp;q=80" width="900" height="700" alt="Строительный объект и проектная документация" decoding="async" fetchpriority="low">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section why">
      <div class="container">
        <h2 class="section__title section__title--center">Почему с нами удобно</h2>
        <ul class="why__list">
          <li class="why__item card--reveal">
            <strong>15+ лет</strong> стабильной работы в регионе
          </li>
          <li class="why__item card--reveal">
            <strong>Полный цикл</strong> проектных и строительных услуг
          </li>
          <li class="why__item card--reveal">
            <strong>Масштаб</strong> — от квартиры до объектов федерального уровня
          </li>
          <li class="why__item card--reveal">
            <strong>Сроки</strong> закрепляем в договоре
          </li>
        </ul>
      </div>
    </section>

    <section class="section testimonials">
      <div class="container">
        <h2 class="section__title">Отзывы</h2>
        <div class="testimonials-carousel" id="testimonialsCarousel">
          <button type="button" class="tc-btn tc-btn--prev" aria-controls="testimonialsTrack" aria-label="Предыдущие отзывы" disabled>
            <span aria-hidden="true">‹</span>
          </button>
          <div class="tc-viewport">
            <div class="tc-track" id="testimonialsTrack" role="region" aria-roledescription="карусель" aria-label="Отзывы заказчиков">
              <blockquote class="quote tc-slide card--reveal">
                <p>«Смета и график были прозрачными с первого дня. Фасад сдали без срывов этапов.»</p>
                <footer>— Директор по развитию, торговая сеть</footer>
              </blockquote>
              <blockquote class="quote tc-slide card--reveal">
                <p>«Отдельно отметили дисциплину на площадке и взаимодействие с нашим технадзором.»</p>
                <footer>— Главный инженер проекта</footer>
              </blockquote>
              <blockquote class="quote tc-slide card--reveal">
                <p>«Проектная документация прошла экспертизу с первого захода; стройку вели без простоев по нашей стороне.»</p>
                <footer>— Руководитель девелоперского проекта</footer>
              </blockquote>
              <blockquote class="quote tc-slide card--reveal">
                <p>«По внутренним инженерным сетям всё сдали в срок, акты закрыли без затяжек.»</p>
                <footer>— Технический директор, промышленный объект</footer>
              </blockquote>
            </div>
          </div>
          <button type="button" class="tc-btn tc-btn--next" aria-controls="testimonialsTrack" aria-label="Следующие отзывы">
            <span aria-hidden="true">›</span>
          </button>
        </div>
      </div>
    </section>

    <section class="section partners">
      <div class="container">
        <h2 class="section__title section__title--center">Заказчики и партнёры</h2>
        <div class="partners__strip" aria-label="Названия партнёров">
          <?php partners_render_strip(partners_get_all(), 5); ?>
        </div>
      </div>
    </section>
  </main>

<?php require __DIR__ . '/includes/estimate-form.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
