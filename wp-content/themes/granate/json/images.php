<?php


//---- Размер превью картинок
if ( isset($_GET['thumbnail']) ) {
	$thumbnail_size = $_GET['thumbnail'];
} else $thumbnail_size = 'preview_print';

//---- Разные названия таксономий у примеров работ и принтов
if ( $post_type == 'sample' ) {
  $cat = 'cat_sample';
  $color = 'color_sample';
} else {
    $cat = 'prints';
    $color = 'color';
  }


//---- Случайные посты при указании параметра
if (isset($_GET['rand'])) {
  $args['orderby'] = 'rand';
}

//---- Добавляем фильтрацию по категории
if ( isset( $_GET['cat'] ) ) {

  $category = $_GET['cat'];

  $tax_args[] = array(
    'taxonomy' => $cat,
    'field' => 'slug',
    'terms' => $category
  );

}

//---- Добавляем фильтрацию по цветам
if ( isset( $_GET['color'] ) ) {

  $category = $_GET['color'];

  $tax_args[] = array(
    'taxonomy' => $color,
    'field' => 'slug',
    'terms' => $category
  );

}

//---- Добавляем ключ таксономии в аргументы, если они есть

if ( count($tax_args) > 0 ) {
  $args['tax_query'] = $tax_args;
}

//---- Добавляем "отношение" таксономий, если их 2 или больше
if ( count($tax_args) > 1 ) {
  $args['tax_query']['relation'] = 'AND';
}

//---- Конкретный пост
if ( isset($_GET['post_id']) ) {
	$args['post__in'] = explode(',', $_GET['post_id']);
}

//---- Формируем Query
$myposts = new WP_Query ( $args );
$myposts = $myposts->posts;
//vdc($args);

foreach ( $myposts as $pst ) {
  $post_id = $pst->ID;

  $thumbnail_id = get_post_meta($post_id, '_thumbnail_id');
  $thumbnail_id = $thumbnail_id[0];

  $preview_image = wp_get_attachment_image_src($thumbnail_id, $thumbnail_size);
  $preview_image = $preview_image[0];

  //---- Проверяем на наличие изображения и тогда записываем в общий массив
  if($preview_image) {

    $full_image = wp_get_attachment_url($thumbnail_id);

    $item['preview'] = $preview_image;
    $item['full'] = $full_image;

		if ( isset($_GET['post_id']) ) {

			if ($_GET['type'] == 'sample') {
				$color = 'color_sample';
				$cat = 'cat_sample';
			} else {
				$color = 'color';
				$cat = 'prints';
			}

			$terms = wp_get_post_terms($post_id, $color);
			$termTemp = array();
			foreach ($terms as $term) {
				$termTemp[] = $term->name;
			}
			$item['color'] = implode(", ", $termTemp);

			$terms = wp_get_post_terms($post_id, $cat);
			$termTemp = array();
			foreach ($terms as $term) {
				$termTemp[] = $term->name;
			}
			$item['category'] = implode(", ", $termTemp);
		}

    $json_data[] = $item;
  }
}
 ?>
