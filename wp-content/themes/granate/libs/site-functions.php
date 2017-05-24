<?php

//---- Убираем ссылки меню в админке ----//
function remove_menus(){

  remove_menu_page( 'index.php' );                  //Dashboard
  //remove_menu_page( 'jetpack' );                    //Jetpack*
  remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'remove_menus' );


//---- Верхнее меню ----//
function site_menu ( $params ) {

  $args = array(
	'order'                  => ($params['order'])?:'ASC',
	'orderby'                => 'menu_order',
  'output'                 => OBJECT,
	'output_key'             => 'menu_order',
	'update_post_term_cache' => false,
);

  $menu = wp_get_nav_menu_items ( ($params['id'])?:$params, $args );

  foreach ( $menu as $item ) {
    $url = $item->url;
    $label = $item->title;
    $liClass = ($params['li_class']) ? ' class="'.$params['li_class'].'"' : '';
    $aClass = ($params['a_class']) ? ' class="'.$params['a_class'].'"' : '';
    echo "<li$liClass><a href=\"$url\"$aClass>$label</a></li>";
  }
}

//---- получаем разделы таксономии ----//
function site_terms($taxonomy) {
  $args = array(
	'taxonomy' => $taxonomy,
	'hide_empty' => true,
  'order' => 'DESC'
);
$terms = get_terms( $args );
return $terms;
}

//---- Форматируем телефон ----//

function site_format_phone( $input, $echo = null ) {
  $input = preg_replace('/(\d{3})(\d{2})(\d{2})(\d{3})/', '\1-\2-\3-\4', $input);
  if ( $echo ) {
    echo $input;
  } else return $input;
}


//---- Убираем параграфы ----//
function site_without_p ( $input ) {
  $input = preg_replace('/<\/{0,1}p>/', '', $input);
  return $input;
}

function the_site_without_p ( $input ) {
  echo site_without_p( $input );
}

//---- Тянем логотип из ACF, если нет то стандартный ----//
function site_header_logo () {
  if( get_field('logo', 'option') ) {
    $logo = get_field('logo', 'option');
    $logo = $logo['sizes']['header_logo'];
  } else $logo = THEME_URL.'/images/logo.png';

  echo $logo;
}

//---- Пагинация ----//
function site_pagination()
{
    global $wp_query;
    $big = 999999999;
    $paginate = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));

    //---- Очищаем prev и next ссылки от текста ----//
    preg_match('/<a.*prev.*>(.*)<\/a>/U', $paginate, $matches_0);
    preg_match('/<a.*next.*>(.*)<\/a>/U', $paginate, $matches_1);
    $matches[] = $matches_0[1];
    $matches[] = $matches_1[1];

    $paginate = str_replace($matches, '', $paginate);

    echo $paginate;
}

//---- Аналог GF и TF для Option Page ----//

  function option_field ($field) {
    return get_field( $field, 'option' );
  }

  function the_option_field ($field) {
    echo option_field($field);
  }

//---- Каждый пробел как новая строка ----//

  function site_space_to_newline ($input) {
    return str_replace(' ', '<br>', $input);
  }

//---- Возвращаем картинку с нужным размером из ACF

function get_image_field($field, $size) {
  if ($field) return $field['sizes'][$size];
  else return PLACEHOLDER;
}

  //---- Выделение текста цветом ----//

  function field_color_highlight($field) {
    return preg_replace('/\*(.*)\*/U', '<span class="blue-text">\1</span>', $field);
  }
 ?>
