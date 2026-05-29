<?php

declare(strict_types=1);

/**
 * @return list<array{
 *   date: string,
 *   dateHome: string,
 *   dateFull: string,
 *   tag: string,
 *   href: string,
 *   title: string,
 *   titleShort: string,
 *   excerpt: string,
 *   teaser: string,
 *   imageHome: string,
 *   imageCard: string,
 *   imageAlt: string
 * }>
 */
function news_get_all(): array
{
    return [
        [
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
        ],
        [
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
        ],
        [
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
        ],
        [
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
        ],
        [
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
        ],
    ];
}

/**
 * @return list<array{
 *   date: string,
 *   dateHome: string,
 *   dateFull: string,
 *   tag: string,
 *   href: string,
 *   title: string,
 *   titleShort: string,
 *   excerpt: string,
 *   teaser: string,
 *   imageHome: string,
 *   imageCard: string,
 *   imageAlt: string
 * }>
 */
function news_get_all_sorted(): array
{
    $items = news_get_all();
    usort($items, static function (array $a, array $b): int {
        return strcmp($b['date'], $a['date']);
    });

    return $items;
}

/**
 * @return list<array{
 *   date: string,
 *   dateHome: string,
 *   dateFull: string,
 *   tag: string,
 *   href: string,
 *   title: string,
 *   titleShort: string,
 *   excerpt: string,
 *   teaser: string,
 *   imageHome: string,
 *   imageCard: string,
 *   imageAlt: string
 * }>
 */
function news_get_latest(int $limit = 5): array
{
    if ($limit < 1) {
        return [];
    }

    return array_slice(news_get_all_sorted(), 0, $limit);
}
