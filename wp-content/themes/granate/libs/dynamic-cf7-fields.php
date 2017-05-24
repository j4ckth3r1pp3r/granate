<?php

//---- Добавляем адрес страницы отправки
function cf7_pagename($value, $args=array()) {
  if ( is_archive() ) {
    ob_start();
    post_type_archive_title();
    $value = ob_get_contents();
    ob_end_clean();
  } elseif ( is_404() ) {
    $value = 'Страница 404';
  } elseif ( is_front_page() ) {
    $value = 'Главная страница';
  }
  else {
    $value = get_the_title();
  }
  return $value;
}


//---- Добавление фильтров
add_filter('cf7_pagename', 'cf7_pagename', 10, 2);
 ?>
