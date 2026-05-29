<?php

declare(strict_types=1);

/* -------------------------------------------------------------------------- */
/* Helpers                                                                    */
/* -------------------------------------------------------------------------- */

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function ee(?string $value): void
{
    echo e($value);
}

function nav_is_current(string $page, string $active): string
{
    return $page === $active ? ' aria-current="page"' : '';
}

function legal_is_current(string $slug, ?string $active): string
{
    return $slug === $active ? ' aria-current="page"' : '';
}

/**
 * @return array{
 *   company: string,
 *   tagline: string,
 *   city: string,
 *   phone: string,
 *   phoneHref: string,
 *   email: string,
 *   emailHref: string,
 *   address: string,
 *   addressFooter: string
 * }
 */
function site_get_contacts(): array
{
    return [
        'company' => 'ООО «Петроспецмонтаж»',
        'tagline' => 'Проектирование и строительство в Санкт-Петербурге и Ленинградской области',
        'city' => 'Санкт-Петербург',
        'phone' => '+7 (812) 456-15-46',
        'phoneHref' => 'tel:+78124561546',
        'email' => 'petrospecmontag@mail.ru',
        'emailHref' => 'mailto:petrospecmontag@mail.ru',
        'address' => '192019, г. Санкт-Петербург, вн. тер. «Невская Застава», ул. Хрустальная, д. 18, лит. А, пом. 411',
        'addressFooter' => '192019, СПб, вн. тер. «Невская Застава», ул. Хрустальная, 18, лит. А, пом. 411',
    ];
}

/**
 * @return list<array{id: string, href: string, label: string}>
 */
function nav_get_primary(): array
{
    return [
        ['id' => 'index', 'href' => '/', 'label' => 'Главная'],
        ['id' => 'about', 'href' => '/about.php', 'label' => 'О компании'],
        ['id' => 'services', 'href' => '/services.php', 'label' => 'Услуги'],
        ['id' => 'production', 'href' => '/production.php', 'label' => 'Производство'],
        ['id' => 'projects', 'href' => '/projects.php', 'label' => 'Объекты'],
        ['id' => 'news', 'href' => '/news.php', 'label' => 'Новости'],
        ['id' => 'contacts', 'href' => '/contacts.php', 'label' => 'Контакты'],
    ];
}

/**
 * @return list<array{href: string, label: string, ariaLabel: string, icon: string, external: bool}>
 */
function social_get_links(): array
{
    return [
        [
            'href' => '#',
            'label' => 'ВКонтакте',
            'ariaLabel' => 'ВКонтакте',
            'icon' => '/images/icon-vk.svg',
            'iconTopbar' => '/images/icon-vk-blk.svg',
            'external' => false,
        ],
        [
            'href' => 'https://rutube.ru/channel/55926688/',
            'label' => 'Rutube',
            'ariaLabel' => 'Rutube',
            'icon' => '/images/icon-rutube.svg',
            'iconTopbar' => '/images/icon-rutube-blk.svg',
            'external' => true,
        ],
        [
            'href' => '#',
            'label' => 'MAX',
            'ariaLabel' => 'MAX',
            'icon' => '/images/icon-max.svg',
            'iconTopbar' => '/images/icon-max-blk.svg',
            'external' => false,
        ],
    ];
}

/* -------------------------------------------------------------------------- */
/* News                                                                       */
/* -------------------------------------------------------------------------- */

/**
 * @return list<array<string, mixed>>
 */
function news_get_all(): array
{
    return [
        [
            'slug' => 'smeta-dva-chasa',
            'date' => '2026-03-18',
            'dateHome' => '18 марта',
            'dateFull' => '18 марта 2026',
            'tag' => 'Сервис',
            'href' => '/news-smeta-dva-chasa.php',
            'title' => 'Предварительная смета за два часа: как мы считаем без визита',
            'titleShort' => 'Предварительная смета за два часа',
            'excerpt' => 'Что нужно в заявке, как формируется ориентир по стоимости и когда имеет смысл выезжать на объект.',
            'teaser' => 'Как считаем ориентир без визита и когда нужен выезд инженера.',
            'imageHome' => '/images/home-bill-byu-5-min.jpg',
            'imageCard' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&h=500&q=80',
            'imageAlt' => 'Смета и проектная документация',
            'metaDescription' => 'Как формируется ориентировочная смета за два часа без выезда на объект.',
            'coverImage' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1600&h=700&q=80',
            'coverAlt' => 'Работа с проектом и сметой на объекте',
            'breadcrumbShort' => 'Смета',
            'lead' => 'Ориентир по стоимости и объёму работ помогает сразу понять порядок бюджета и сроки следующего шага — детального обследования или выезда.',
            'footHtml' => '<a href="/news.php">← Все новости</a> · <a href="/contacts.php#request">Оставить заявку на смету</a>',
        ],
        [
            'slug' => 'fasad-zimoy',
            'date' => '2026-02-06',
            'dateHome' => '6 февраля',
            'dateFull' => '6 февраля 2026',
            'tag' => 'Фасады',
            'href' => '/news-fasad-zimoy.php',
            'title' => 'Фасадные работы зимой: температурные вилки и контроль материала',
            'titleShort' => 'Фасадные работы зимой',
            'excerpt' => 'Когда монтаж допустим без потери гарантии, что проверяем на площадке до старта и как ведём журнал.',
            'teaser' => 'Температура, хранение материалов и приёмка слоёв.',
            'imageHome' => '/images/home-bill-byu-5-min.jpg',
            'imageCard' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&h=500&q=80',
            'imageAlt' => 'Фасадные работы',
            'metaDescription' => 'Температурные ограничения, материалы и контроль при фасадных работах в холодный сезон.',
            'coverImage' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1600&h=700&q=80',
            'coverAlt' => 'Фасад здания',
            'breadcrumbShort' => 'Фасады',
            'lead' => 'В северной столице зима растягивает сроки только тогда, когда нарушают технологию хранения и нанесения материалов.',
            'footHtml' => '<a href="/news.php">← Все новости</a> · <a href="/service-facade.php">Услуга: фасады</a>',
        ],
        [
            'slug' => 'blagoustroystvo-etapy',
            'date' => '2026-01-22',
            'dateHome' => '22 января',
            'dateFull' => '22 января 2026',
            'tag' => 'Благоустройство',
            'href' => '/news-blagoustroystvo-etapy.php',
            'title' => 'Благоустройство прилегающей территории: этапы и сроки',
            'titleShort' => 'Этапы благоустройства',
            'excerpt' => 'От съёмки существующих покрытий до приёмки: типовая последовательность и где чаще всего сдвигаются даты.',
            'teaser' => 'От подготовки участка до приёмки покрытий.',
            'imageHome' => '/images/home-bill-byu-5-min.jpg',
            'imageCard' => 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=800&h=500&q=80',
            'imageAlt' => 'Благоустройство территории',
            'metaDescription' => 'Типовая последовательность работ по благоустройству прилегающей территории.',
            'coverImage' => 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1600&h=700&q=80',
            'coverAlt' => 'Благоустройство и ландшафт',
            'breadcrumbShort' => 'Благоустройство',
            'lead' => 'Понятная сетка этапов снижает количество согласований «на ходу» и помогает заказчику синхронизировать подрядчиков.',
            'footHtml' => '<a href="/news.php">← Все новости</a> · <a href="/contacts.php#request">Запросить консультацию</a>',
        ],
        [
            'slug' => 'vystavka-2026',
            'date' => '2025-12-02',
            'dateHome' => '2 декабря',
            'dateFull' => '2 декабря 2025',
            'tag' => 'События',
            'href' => '/news-vystavka-2026.php',
            'title' => 'Участие в отраслевой выставке: встречи и консультации',
            'titleShort' => 'Участие в отраслевой выставке',
            'excerpt' => 'Итоги стенда, темы, которые обсуждали чаще всего, и как записаться на повторную консультацию после мероприятия.',
            'teaser' => 'Итоги стенда, темы консультаций и запись на встречу после мероприятия.',
            'imageHome' => '/images/home-bill-byu-5-min.jpg',
            'imageCard' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=800&h=500&q=80',
            'imageAlt' => 'Деловая встреча и консультации',
            'metaDescription' => 'Итоги участия в выставке, темы консультаций и запись на встречу после мероприятия.',
            'coverImage' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1600&h=700&q=80',
            'coverAlt' => 'Деловая встреча и консультации',
            'breadcrumbShort' => 'События',
            'lead' => 'На стенде обсудили более сорока проектов — от ремонта коммерческих площадей до реконструкции промышленных корпусов.',
            'footHtml' => '<a href="/news.php">← Все новости</a> · <a href="/contacts.php#request">Связаться с нами</a>',
        ],
        [
            'slug' => 'inzhenernye-seti',
            'date' => '2025-10-14',
            'dateHome' => '14 октября',
            'dateFull' => '14 октября 2025',
            'tag' => 'Инженерные сети',
            'href' => '/news-inzhenernye-seti.php',
            'title' => 'Наружные инженерные сети: подготовка к зимнему сезону',
            'titleShort' => 'Подготовка инженерных сетей к зиме',
            'excerpt' => 'Проверка узлов, теплоизоляция и типовые работы перед морозами — что делаем на объектах в октябре–ноябре.',
            'teaser' => 'Проверка узлов, теплоизоляция и типовые работы перед морозами.',
            'imageHome' => '/images/home-bill-byu-5-min.jpg',
            'imageCard' => 'https://images.unsplash.com/photo-1621905251918-48416bd8575a?auto=format&fit=crop&w=800&h=500&q=80',
            'imageAlt' => 'Наружные инженерные сети',
            'metaDescription' => 'Проверка узлов, теплоизоляция и типовые работы перед морозами на объектах в СПб и ЛО.',
            'coverImage' => 'https://images.unsplash.com/photo-1621905251918-48416bd8575a?auto=format&fit=crop&w=1600&h=700&q=80',
            'coverAlt' => 'Наружные инженерные сети',
            'breadcrumbShort' => 'Инженерные сети',
            'lead' => 'Октябрь и ноябрь — время, когда на действующих объектах проверяют узлы, восстанавливают теплоизоляцию и закрывают сезонные риски до устойчивых морозов.',
            'footHtml' => '<a href="/news.php">← Все новости</a> · <a href="/service-external-networks.php">Услуга: наружные сети</a>',
        ],
    ];
}

/** @return list<array<string, mixed>> */
function news_get_all_sorted(): array
{
    $items = news_get_all();
    usort($items, static function (array $a, array $b): int {
        return strcmp((string) $b['date'], (string) $a['date']);
    });

    return $items;
}

/** @return list<array<string, mixed>> */
function news_get_latest(int $limit = 5): array
{
    if ($limit < 1) {
        return [];
    }

    return array_slice(news_get_all_sorted(), 0, $limit);
}

/** @return array<string, mixed>|null */
function news_get_by_slug(string $slug): ?array
{
    foreach (news_get_all() as $item) {
        if ($item['slug'] === $slug) {
            return $item;
        }
    }

    return null;
}

/** @return array<string, mixed>|null */
function news_get_by_href(string $href): ?array
{
    foreach (news_get_all() as $item) {
        if ($item['href'] === $href) {
            return $item;
        }
    }

    return null;
}

/** @return array<string, mixed> */
function news_require_by_href(string $href): array
{
    $item = news_get_by_href($href);
    if ($item === null) {
        http_response_code(404);
        exit('Страница не найдена');
    }

    return $item;
}

function news_render_body(string $slug): void
{
    $path = __DIR__ . '/article-bodies/' . $slug . '.php';
    if (!is_file($path)) {
        return;
    }

    include $path;
}

/** @param array<string, mixed> $item */
function news_render_article(array $item): void
{
    include __DIR__ . '/partials/news-article.php';
}

/** @param array<string, mixed> $item */
function news_render_card(array $item): void
{
    ?>
    <li>
      <a class="news-card card--reveal" href="<?= e((string) $item['href']) ?>">
        <div class="news-card__media">
          <img src="<?= e((string) $item['imageCard']) ?>" width="800" height="500" alt="<?= e((string) $item['imageAlt']) ?>" loading="lazy" decoding="async">
        </div>
        <div class="news-card__body">
          <div class="news-card__meta">
            <time datetime="<?= e((string) $item['date']) ?>"><?= e((string) $item['dateFull']) ?></time>
            <span class="news-card__tag"><?= e((string) $item['tag']) ?></span>
          </div>
          <h2 class="news-card__title"><?= e((string) $item['title']) ?></h2>
          <p class="news-card__excerpt"><?= e((string) $item['excerpt']) ?></p>
          <span class="news-card__more">Читать далее</span>
        </div>
      </a>
    </li>
    <?php
}

/** @param array<string, mixed> $item */
function news_render_teaser(array $item): void
{
    ?>
    <a class="teaser card--reveal" href="<?= e((string) $item['href']) ?>">
      <div class="teaser__media">
        <img src="<?= e((string) $item['imageHome']) ?>" width="1024" height="1024" alt="<?= e((string) $item['imageAlt']) ?>" loading="lazy" decoding="async">
      </div>
      <div class="teaser__body">
        <span class="teaser__label"><?= e($item['dateHome'] . ' · ' . $item['tag']) ?></span>
        <h3 class="teaser__title"><?= e((string) $item['titleShort']) ?></h3>
        <p class="teaser__text"><?= e((string) $item['teaser']) ?></p>
        <span class="teaser__more">Читать</span>
      </div>
    </a>
    <?php
}

/* -------------------------------------------------------------------------- */
/* Partners                                                                   */
/* -------------------------------------------------------------------------- */

/** @return list<array{name: string, logo: string, href: string, logoAlt: string}> */
function partners_get_all(): array
{
    return [
        ['name' => 'Пятёрочка', 'logo' => '/images/brands/brand-5ka.jpg', 'href' => '', 'logoAlt' => 'Пятёрочка'],
        ['name' => 'Банк России', 'logo' => '/images/brands/brand-bank-russ.jpg', 'href' => '', 'logoAlt' => 'Банк России'],
        ['name' => 'Банк Санкт-Петербург', 'logo' => '/images/brands/brand-bspb.jpg', 'href' => '', 'logoAlt' => 'Банк Санкт-Петербург'],
        ['name' => 'Ситиэнергорент', 'logo' => '/images/brands/brand-cityenergorent.jpg', 'href' => '', 'logoAlt' => 'Ситиэнергорент'],
        ['name' => 'Гостиный двор', 'logo' => '/images/brands/brand-gost-dvor.jpg', 'href' => '', 'logoAlt' => 'Гостиный двор'],
        ['name' => 'Грузовичкоф', 'logo' => '/images/brands/brand-gruzovichkoff.jpg', 'href' => '', 'logoAlt' => 'Грузовичкоф'],
        ['name' => 'Музей «Кижи»', 'logo' => '/images/brands/brand-kizhi.jpg', 'href' => '', 'logoAlt' => 'Музей «Кижи»'],
        ['name' => 'Максидом', 'logo' => '/images/brands/brand-maxidom.jpg', 'href' => '', 'logoAlt' => 'Максидом'],
        ['name' => 'Петрович', 'logo' => '/images/brands/brand-petrovich.jpg', 'href' => '', 'logoAlt' => 'Петрович'],
        ['name' => 'Аэропорт Пулково', 'logo' => '/images/brands/brand-pulkovo.jpg', 'href' => '', 'logoAlt' => 'Аэропорт Пулково'],
        ['name' => 'РЖД', 'logo' => '/images/brands/brand-rzhd.jpg', 'href' => '', 'logoAlt' => 'РЖД'],
        ['name' => 'Снабстрой', 'logo' => '/images/brands/brand-snabstroy.jpg', 'href' => '', 'logoAlt' => 'Снабстрой'],
        ['name' => 'Стройтрест', 'logo' => '/images/brands/brand-stroytrast.jpg', 'href' => '', 'logoAlt' => 'Стройтрест'],
        ['name' => 'Санкт-Петербургский государственный университет гражданской авиации', 'logo' => '/images/brands/brand-univer-aviatsii.jpg', 'href' => '', 'logoAlt' => 'Санкт-Петербургский государственный университет гражданской авиации'],
    ];
}

/** @param list<array{name: string, logo: string, href: string, logoAlt: string}> $partners */
function partners_use_swiper(array $partners): bool
{
    return count($partners) > 9;
}

/** @param list<array{name: string, logo: string, href: string, logoAlt: string}> $partners */
function partners_render_home_section(array $partners): void
{
    include __DIR__ . '/partials/partners-home.php';
}

/** @param list<array{name: string, logo: string, href: string, logoAlt: string}> $partners */
function partners_render_strip(array $partners, ?int $limit = null): void
{
    if ($limit !== null && $limit > 0) {
        $partners = array_slice($partners, 0, $limit);
    }

    foreach ($partners as $partner) {
        echo '<span>' . e($partner['name']) . '</span>';
    }
}

/** @param array{name: string, logo: string, href: string, logoAlt: string} $partner */
function partners_render_item(array $partner): void
{
    $href = $partner['href'];
    $tagOpen = $href !== ''
        ? '<a class="partners-grid__link" href="' . e($href) . '" rel="noopener noreferrer">'
        : '<div class="partners-grid__link">';
    $tagClose = $href !== '' ? '</a>' : '</div>';
    ?>
    <div class="partners-grid__item">
      <?= $tagOpen ?>
        <img
          class="partners-grid__logo"
          src="<?= e($partner['logo']) ?>"
          alt="<?= e($partner['logoAlt']) ?>"
          loading="lazy"
          decoding="async"
        >
      <?= $tagClose ?>
    </div>
    <?php
}

/* -------------------------------------------------------------------------- */
/* Reviews (home)                                                             */
/* -------------------------------------------------------------------------- */

/** @return list<array{image: string, imageAlt: string}> */
function reviews_get_all(): array
{
    static $cache = null;

    if ($cache !== null) {
        return $cache;
    }

    $dir = __DIR__ . '/../images/reviews';
    if (!is_dir($dir)) {
        $cache = [];

        return $cache;
    }

    $files = [];
    foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
        $files = array_merge($files, glob($dir . '/*.' . $ext) ?: [], glob($dir . '/*.' . strtoupper($ext)) ?: []);
    }
    $files = array_values(array_unique($files));
    natsort($files);

    $reviews = [];
    $n = 0;
    foreach ($files as $path) {
        if (!is_file($path)) {
            continue;
        }
        $n++;
        $name = basename($path);
        $reviews[] = [
            'image' => '/images/reviews/' . $name,
            'imageAlt' => 'Отзыв заказчика ' . $n,
        ];
    }

    $cache = $reviews;

    return $cache;
}

/** @param list<array{image: string, imageAlt: string}> $reviews */
function reviews_render_home_section(array $reviews): void
{
    include __DIR__ . '/partials/reviews-home.php';
}

/** @param array{image: string, imageAlt: string} $review */
function reviews_render_slide(array $review): void
{
    $src = (string) $review['image'];
    $alt = (string) $review['imageAlt'];
    ?>
    <article class="review-card">
      <button
        type="button"
        class="review-card__media js-review-lightbox"
        data-full-src="<?= e($src) ?>"
        aria-label="<?= e('Увеличить: ' . $alt) ?>"
      >
        <img
          class="review-card__img"
          src="<?= e($src) ?>"
          alt="<?= e($alt) ?>"
          loading="lazy"
          decoding="async"
        >
      </button>
    </article>
    <?php
}

/* -------------------------------------------------------------------------- */
/* Services catalog                                                           */
/* -------------------------------------------------------------------------- */

/**
 * @return list<array{href: string, image: string, imageAlt: string, title: string, text: string, featured: bool}>
 */
function services_get_all(): array
{
    return [
        [
            'href' => '/service-design.php',
            'image' => '/images/design.jpg',
            'imageAlt' => 'Инженеры с проектной документацией на строительной площадке',
            'title' => 'Проектирование и изыскания',
            'text' => 'Обследования, ПД и РД, дизайн-проекты, сметы, генпроектирование.',
            'featured' => true,
        ],
        [
            'href' => '/service-external-networks.php',
            'image' => '/images/vnesh.jpg',
            'imageAlt' => 'Инженер в каске на промышленном объекте, инженерные коммуникации',
            'title' => 'Наружные сети',
            'text' => 'Электроснабжение, связь, теплотрассы, наружное освещение, водопровод и канализация.',
            'featured' => true,
        ],
        [
            'href' => '/service-mep-internal.php',
            'image' => '/images/vnutr.jpg',
            'imageAlt' => 'Электромонтаж и слаботочные системы',
            'title' => 'Внутренние инженерные системы',
            'text' => 'Водоснабжение и канализация, отопление, вентиляция и кондиционирование, СКС, ОПС, СКУД.',
            'featured' => true,
        ],
        [
            'href' => '/service-construction.php',
            'image' => '/images/stroy.jpg',
            'imageAlt' => 'Строительная площадка и монтаж конструкций',
            'title' => 'Промышленное и гражданское строительство',
            'text' => 'СМР, подземные сооружения, генподряд, малые формы, гидроизоляция конструкций.',
            'featured' => false,
        ],
        [
            'href' => '/service-restoration.php',
            'image' => '/images/restav.jpg',
            'imageAlt' => 'Фасад исторического здания, реставрация',
            'title' => 'Реставрация и реконструкция',
            'text' => 'Памятники архитектуры, капремонт и реконструкция зданий.',
            'featured' => false,
        ],
        [
            'href' => '/service-fitout.php',
            'image' => '/images/otdelka.jpg',
            'imageAlt' => 'Современный интерьер после отделки',
            'title' => 'Отделка и ремонт',
            'text' => 'Жилые и загородные дома, офисы, торговые и HoReCa-пространства.',
            'featured' => false,
        ],
        [
            'href' => '/service-landscape.php',
            'image' => '/images/dom.jpg',
            'imageAlt' => 'Благоустройство: дорожки и озеленение',
            'title' => 'Ландшафт и нулевой цикл',
            'text' => 'Стены и перекрытия, кровля, благоустройство прилегающей территории.',
            'featured' => false,
        ],
        [
            'href' => '/service-roads.php',
            'image' => '/images/katok.jpg',
            'imageAlt' => 'Дорога и тротуарное покрытие',
            'title' => 'Дороги и благоустройство',
            'text' => 'Мощение, тротуарная плитка, асфальтирование, ограждения.',
            'featured' => false,
        ],
        [
            'href' => '/service-facade.php',
            'image' => '/images/fasad.jpg',
            'imageAlt' => 'Современный фасад здания',
            'title' => 'Фасадные работы',
            'text' => 'Строительный и монтажный фасад, штукатурка и финишная отделка.',
            'featured' => false,
        ],
        [
            'href' => '/service-bank-fire.php',
            'image' => '/images/bank.jpg',
            'imageAlt' => 'Работа с проектной и финансовой документацией',
            'title' => 'Банковские и противопожарные решения',
            'text' => 'Перепрофилирование, кассовые блоки, ПП заполнения проёмов.',
            'featured' => false,
        ],
        [
            'href' => '/service-social.php',
            'image' => '/images/prileg.jpg',
            'imageAlt' => 'Жилая застройка и благоустройство двора',
            'title' => 'Социальные объекты',
            'text' => 'Содержание домовых территорий, планировка и комплексная застройка.',
            'featured' => false,
        ],
    ];
}

/** @return list<array{href: string, image: string, imageAlt: string, title: string, text: string, featured: bool}> */
function services_get_featured(int $limit = 3): array
{
    $featured = array_values(array_filter(services_get_all(), static fn(array $item): bool => $item['featured']));

    if ($limit > 0) {
        return array_slice($featured, 0, $limit);
    }

    return $featured;
}

/* -------------------------------------------------------------------------- */
/* Production catalog                                                         */
/* -------------------------------------------------------------------------- */

/**
 * @return list<array{href: string, image: string, imageAlt: string, title: string, text: string}>
 */
function production_get_all(): array
{
    return [
        [
            'href' => '/production-lstk.php',
            'image' => 'https://images.unsplash.com/photo-1635322966219-b75ed372eb01?auto=format&fit=crop&w=800&h=500&q=80',
            'imageAlt' => 'Металлокаркас и инженерные коммуникации в объёме',
            'title' => 'ЛСТК-профили и каркасы',
            'text' => 'Профили и узлы из тонколистовой стали для каркасов зданий, навесов и технологических эстакад.',
        ],
        [
            'href' => '/production-fasad-kasety.php',
            'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&h=500&q=80',
            'imageAlt' => 'Облицовка высотного фасада, кассетная логика рядов',
            'title' => 'Фасадные кассеты и панели',
            'text' => 'Кассеты и облицовочные панели под НВФ и вентфасады, подбор крепежа и цвета по спецификации.',
        ],
        [
            'href' => '/production-metallo.php',
            'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=800&h=500&q=80',
            'imageAlt' => 'Монтаж металлоконструкций на площадке',
            'title' => 'Металлоконструкции по проекту',
            'text' => 'Балки, колонны, фермы и нестандартные узлы по чертежам заказчика с маркировкой для монтажа.',
        ],
        [
            'href' => '/production-ograzhdeniya.php',
            'image' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=800&h=500&q=80',
            'imageAlt' => 'Малоэтажная застройка, ограждения и благоустройство участка',
            'title' => 'Ограждения и малые формы',
            'text' => 'Парапеты, лестничные марши, навесы и ограждения кровли — серийно и по индивидуальным эскизам.',
        ],
    ];
}

/* -------------------------------------------------------------------------- */
/* Catalog render                                                             */
/* -------------------------------------------------------------------------- */

/**
 * @param array{href: string, image: string, imageAlt: string, title: string, text: string} $item
 */
function catalog_render_card(array $item, int $headingLevel = 2): void
{
    include __DIR__ . '/partials/catalog-card.php';
}

/**
 * @param list<array{href: string, image: string, imageAlt: string, title: string, text: string}> $items
 */
function catalog_render_cards(array $items, int $headingLevel = 2): void
{
    foreach ($items as $item) {
        catalog_render_card($item, $headingLevel);
    }
}

/* -------------------------------------------------------------------------- */
/* Projects                                                                   */
/* -------------------------------------------------------------------------- */

/**
 * @return list<array{
 *   id: string,
 *   cat: list<string>,
 *   title: string,
 *   meta: string,
 *   visualClass: string,
 *   galleryLabel: string
 * }>
 */
function projects_get_all(): array
{
    return [
        [
            'id' => 'retail-interior',
            'cat' => ['business'],
            'title' => 'Отделка торговых помещений',
            'meta' => 'Коммерция · СПб',
            'visualClass' => '',
            'galleryLabel' => 'Открыть фотогалерею: Отделка торговых помещений',
        ],
        [
            'id' => 'facade-glass',
            'cat' => ['business', 'state'],
            'title' => 'Монтаж фасадных систем остекления',
            'meta' => 'Фасад · ЛО',
            'visualClass' => 'project__visual--b',
            'galleryLabel' => 'Открыть фотогалерею: Монтаж фасадных систем остекления',
        ],
        [
            'id' => 'industrial-rebuild',
            'cat' => ['business', 'state'],
            'title' => 'Реконструкция производственных корпусов',
            'meta' => 'Промышленность',
            'visualClass' => 'project__visual--c',
            'galleryLabel' => 'Открыть фотогалерею: Реконструкция производственных корпусов',
        ],
        [
            'id' => 'film-studio',
            'cat' => ['state', 'business'],
            'title' => 'Реконструкция под киностудию',
            'meta' => 'Креативные индустрии',
            'visualClass' => 'project__visual--d',
            'galleryLabel' => 'Открыть фотогалерею: Реконструкция под киностудию',
        ],
        [
            'id' => 'monolith',
            'cat' => ['business'],
            'title' => 'ЖБ конструкции, ростверки и колонны',
            'meta' => 'Монолит',
            'visualClass' => 'project__visual--e',
            'galleryLabel' => 'Открыть фотогалерею: ЖБ конструкции, ростверки и колонны',
        ],
        [
            'id' => 'private-house',
            'cat' => ['private'],
            'title' => 'Загородный дом «под ключ»',
            'meta' => 'Частный сектор',
            'visualClass' => 'project__visual--f',
            'galleryLabel' => 'Открыть фотогалерею: Загородный дом «под ключ»',
        ],
    ];
}

/** @return array<string, array{lede: list<string>, images: list<array{url: string, alt: string}>}> */
function projects_get_gallery_payloads(): array
{
    return [
        'retail-interior' => [
            'lede' => [
                'Демонстрационный блок с условным описанием: здесь обычно кратко резюмируют объём работ, сроки ввода и ключевые решения по материалам и освещению.',
                'Второй абзац — рыба для вёрстки: заказчик получил единую линию коммуникации, а фото фиксируют этапы от черновой отделки до финальной сдачи площадки.',
            ],
            'images' => [
                ['url' => 'https://picsum.photos/seed/psm-retail-1/1600/1000', 'alt' => 'Торговое помещение после отделки'],
                ['url' => 'https://picsum.photos/seed/psm-retail-2/1600/1000', 'alt' => 'Монтаж потолочных конструкций'],
                ['url' => 'https://picsum.photos/seed/psm-retail-3/1600/1000', 'alt' => 'Зона касс и проходов'],
            ],
        ],
        'facade-glass' => [
            'lede' => [
                'Условный текст о проекте: фасадная подсистема согласована с архитектурным обликом здания, узлы вынесены в рабочую документацию и сопровождались авторским надзором.',
                'Ещё один абзац-рыба: монтаж вёлся поэтапно с учётом погодных окон; на снимках — контроль геометрии и примерочные листы стеклопакетов на площадке.',
            ],
            'images' => [
                ['url' => 'https://picsum.photos/seed/psm-facade-1/1600/1000', 'alt' => 'Фасадное остекление, общий вид'],
                ['url' => 'https://picsum.photos/seed/psm-facade-2/1600/1000', 'alt' => 'Узел крепления профиля'],
                ['url' => 'https://picsum.photos/seed/psm-facade-3/1600/1000', 'alt' => 'Фасад с улицы'],
                ['url' => 'https://picsum.photos/seed/psm-facade-4/1600/1000', 'alt' => 'Этап монтажа стеклопакетов'],
            ],
        ],
        'industrial-rebuild' => [
            'lede' => [
                'Текст-заглушка: реконструкция корпусов включала усиление несущих конструкций и модернизацию инженерных контуров без полной остановки производственного цикла.',
                'Второй абзац для макета: подрядчик вёл журнал скрытых работ; фотографии иллюстрируют типовые узлы и готовые участки после приёмки технадзора заказчика.',
            ],
            'images' => [
                ['url' => 'https://picsum.photos/seed/psm-ind-1/1600/1000', 'alt' => 'Корпус после реконструкции'],
                ['url' => 'https://picsum.photos/seed/psm-ind-2/1600/1000', 'alt' => 'Внутренние инженерные коммуникации'],
                ['url' => 'https://picsum.photos/seed/psm-ind-3/1600/1000', 'alt' => 'Производственный цех'],
            ],
        ],
        'film-studio' => [
            'lede' => [
                'Рыбный вводный абзац: павильон готовился под съёмочный график — акустика, рассеянный свет и трассировка кабельных коробов согласованы с режиссёрской группой.',
                'Краткое описание для вёрстки: на фото зафиксированы этапы чистовой отделки и монтажа оборудования; итоговое пространство соответствует заданным нормативам по шуму.',
            ],
            'images' => [
                ['url' => 'https://picsum.photos/seed/psm-film-1/1600/1000', 'alt' => 'Павильон, подготовка площадки'],
                ['url' => 'https://picsum.photos/seed/psm-film-2/1600/1000', 'alt' => 'Акустические и световые решения'],
                ['url' => 'https://picsum.photos/seed/psm-film-3/1600/1000', 'alt' => 'Готовое студийное пространство'],
            ],
        ],
        'monolith' => [
            'lede' => [
                'Условный текст: объём монолитных работ включал ростверк, колонны и плиты перекрытия; бетон и арматура поставлялись по согласованному графику с лабораторным контролем.',
                'Второй абзац-заглушка: на снимках — армирование, опалубка и готовые поверхности; все этапы сопровождались актами и фотофиксацией для исполнительной документации.',
            ],
            'images' => [
                ['url' => 'https://picsum.photos/seed/psm-mono-1/1600/1000', 'alt' => 'Монолитные колонны и ростверк'],
                ['url' => 'https://picsum.photos/seed/psm-mono-2/1600/1000', 'alt' => 'Армирование перед заливкой'],
                ['url' => 'https://picsum.photos/seed/psm-mono-3/1600/1000', 'alt' => 'Плита перекрытия'],
            ],
        ],
        'private-house' => [
            'lede' => [
                'Демо-описание загородного объекта: проект совмещает жилой блок, инженерию «под ключ» и благоустройство участка; сроки этапов согласовывались с заказчиком письменно.',
                'Рыбный абзац: интерьерные решения и фасадные материалы подбирались под единую палитру; галерея показывает ход работ и финальный вид с улицы и со двора.',
            ],
            'images' => [
                ['url' => 'https://picsum.photos/seed/psm-house-1/1600/1000', 'alt' => 'Загородный дом, фасад'],
                ['url' => 'https://picsum.photos/seed/psm-house-2/1600/1000', 'alt' => 'Интерьер, отделка'],
                ['url' => 'https://picsum.photos/seed/psm-house-3/1600/1000', 'alt' => 'Участок и благоустройство'],
                ['url' => 'https://picsum.photos/seed/psm-house-4/1600/1000', 'alt' => 'Терраса и входная группа'],
            ],
        ],
    ];
}

/** @param array{id: string, cat: list<string>, title: string, meta: string, visualClass: string, galleryLabel: string} $project */
function projects_render_card(array $project): void
{
    $visualClass = trim('project__visual ' . $project['visualClass']);
    $catAttr = implode(' ', $project['cat']);
    ?>
    <article class="project" data-cat="<?= e($catAttr) ?>" data-project-id="<?= e($project['id']) ?>">
      <button type="button" class="project__preview" aria-haspopup="dialog" aria-label="<?= e($project['galleryLabel']) ?>">
        <span class="<?= e($visualClass) ?>" aria-hidden="true"></span>
      </button>
      <h2 class="project__title"><?= e($project['title']) ?></h2>
      <p class="project__meta"><?= e($project['meta']) ?></p>
    </article>
    <?php
}

/** @param list<array{id: string, cat: list<string>, title: string, meta: string, visualClass: string, galleryLabel: string}> $projects */
function projects_render_grid(array $projects): void
{
    foreach ($projects as $project) {
        projects_render_card($project);
    }
}

function projects_print_gallery_script(): void
{
    $json = json_encode(
        projects_get_gallery_payloads(),
        JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT
    );
    if ($json === false) {
        return;
    }

    echo '<script>window.PSM_PROJECT_GALLERIES = ' . $json . ';</script>' . "\n";
}

/* -------------------------------------------------------------------------- */
/* News single page                                                           */
/* -------------------------------------------------------------------------- */

/** @param array<string, mixed> $newsArticle */
function news_render_page(array $newsArticle): void
{
    $pageTitle = $newsArticle['title'] . ' — новости Петроспецмонтаж';
    $pageDescription = (string) $newsArticle['metaDescription'];
    ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($pageTitle) ?></title>
  <meta name="description" content="<?= e($pageDescription) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <?php
    $navActive = '';
    require __DIR__ . '/header.php';
    news_render_article($newsArticle);
    require __DIR__ . '/estimate-form.php';
    require __DIR__ . '/footer.php';
}

/** Renders a full news article page by its public URL path. */
function news_render_page_by_href(string $href): void
{
    news_render_page(news_require_by_href($href));
}
