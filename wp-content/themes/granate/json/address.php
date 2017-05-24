<?php

//---- Добавляем сортировку
if ( isset($_GET['order']) ) {
  $args['order'] = $_GET['order'];
}

//---- Добавляем реагирование на ЕКБ

if ( isset($_GET['city']) && $_GET['city'] == 'ekb' ) {
  $operator = 'IN';
} else $operator = 'NOT IN';

$args['tax_query'] = array(
  array(
    'taxonomy' => 'city',
    'field' => 'slug',
    'terms' => 'ekb',
    'operator' => $operator
  ),
);



//---- Получаем все адреса
$addresses = new WP_Query($args);
$addresses = $addresses->posts;

foreach ($addresses as $item) {
  //---- Берем айди поста и его метаполя
  $item_id = $item->ID;

  //---- Добавляем поля
  $pst['city'] = 'г. '.get_field('city', $item_id);
  $pst['address'] = get_field('address', $item_id);
  $pst['underground'] = get_field('underground', $item_id);
  $pst['phone'] = get_field('phone', $item_id);
  $pst['worktime'] = get_field('worktime', $item_id);
  $pst['desc'] = get_field('desc', $item_id);
  $pst['desc'] = skinali_without_p($pst['desc']); //Убираем параграфы
  $pst['location'] = get_field('location', $item_id);
  unset($pst['location']['address']); //Удаляем ненужный ключ с адресом

  //---- Добавляем галерею
  $gallery = get_field('gallery', $item_id);

  //---- Обнуляем массив галереи для последующих постов и добавляем новые изображения
  $pst['gallery'] = null;
  foreach ($gallery as $image){
    $pst['gallery'][] = $image['sizes']['footer_images'];
  }

  //---- Записываем все в общий массив (Если пост один, то записывает без массива)
  if ($posts == 1) {
    $json_data = $pst;
  } else {
    $json_data[] = $pst;
  }

}

 ?>
