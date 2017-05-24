<?php

//---- Отключаем тему Wordpress оставляя работать всё остальное
define('WP_USE_THEMES', false);

$root_folder = $_SERVER['DOCUMENT_ROOT'];
require( $root_folder.'/wp-blog-header.php' );

//---- Количество постов
if ( isset( $_GET['posts'] ) ) $posts = $_GET['posts'];
	else $posts = -1;


//---- Начало работы с указания пост тайпа.
if ( isset( $_GET['type'] ) )
{
	$json_data = array();
	$post_type = $_GET['type'];

	//---- Аргументы и факты
	$args = array(
	  'post_type' => $post_type,
	  'posts_per_page' => $posts,
	);

	//---- Добавляем сдвиг
	if ( isset( $_GET['offset'] ) ) {
		$args['offset'] = $_GET['offset'];
	}

	//---- Подключаем разные файлы в зависимости от пост тайпа
	if (include(__DIR__."/json/$post_type.php"));
	elseif ($post_type) echo "Can't find {$post_type}.php";

	//---- Возврат данных
	if (! isset($_GET['data-type']) || $_GET['data-type'] == 'json' ) {

	  header('Content-Type: application/json; charset=utf-8');
	  echo json_encode($json_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

	}	elseif ($_GET['data-type'] == 'html') {
		?>
		<!-- Вывод в HTML -->
		<?php
	}

} else {
    echo 'GTFO, kek';
}
?>
