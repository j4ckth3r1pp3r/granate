<?php

//---- Функция вывода содержания переменных для отладки ----//
function vdc ( $input, $title = 'Dump' ) {
  if (!isset(get_option('site_settings')['vdc_checkbox'])) {
    echo 'Функция отладки выключена<br>Включите её в "Настройки -> Настройки темы"';
    return;
  }
  if ( current_user_can('administrator') ) {
    if (! isset($_GET['vdcshow']) ) {
      $hide = ' style="display:none"';
    } else $hide = null;
    echo "<link href='http://j4ck.lp5.com.ua/files/j4ck_scripts.css' rel='stylesheet' type='text/css'>";
    echo "<div class='vdc-wrapper'>";
    if (is_object($input)) $title = 'Dump of '.get_class($input);
  	echo '<h2>'.$title.':</h2>';
    echo '<div class="vdc-links">';
    echo '<a href="#" class="refresh">Обновить</a>';
    echo '<a href="#" class="hidebutton">Скрыть</a>';
    echo '</div>';
    echo '<div class="vdc"><xmp'.$hide.'>';

  	if ( is_array( $input ) ) { //Проверяем тип переменной и выводим
  		print_r( $input );
  	} elseif ( is_object($input) ) var_dump( $input );
    else echo $input;

  	echo '</xmp>';
    echo '</div>';
    echo '</div>';
  }
}

//---- Запись файла ----//
function writefile($input, $file = 'temp') {
  $i = 1;
  foreach (glob(TEMPLATEPATH."/temp/*.txt") as $filename) {
    $i++;
  }

  $time = date('y.m.d_H.i.s');
  $file = "{$i}. {$file}_{$time}";

  file_put_contents(TEMPLATEPATH."/temp/{$file}.txt", print_r($input, true));
}

//---- Меняем стартовую страницу админки на свою ----//
// function loginRedirect(){
//     preg_match('/\/wp-admin\/$/', $_SERVER['REQUEST_URI'], $matches);
//     if( $matches[0] ) {
//       wp_redirect(SITE_URL.'/wp-admin/admin.php?page=site-settings');
//     }
// }
// add_filter("init", "loginRedirect", 10, 3);

//---- Скрываем пустые служебные страницы ----//
// function true_hide_posts_from_admin( $query ) {
// 	global $pagenow;
// 	if( is_admin() && 'edit.php' == $pagenow ){
// 		$query->set( 'post__not_in', array() );
// 	}
// 	return $query;
// }
//
// add_action( 'pre_get_posts' ,'true_hide_posts_from_admin' );



 ?>
