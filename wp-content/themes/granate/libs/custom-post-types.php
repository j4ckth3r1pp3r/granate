<?php
function create_post_type_html5()
{

//   // Комплектации
// $args = array (
//     'public'       => true,
//     'labels'       => array('name' => 'Комплетации', 'singular_name' => 'Комплектация', 'add_new' => 'Добавить'),
//     'show_in_menu' => true,
//     'menu_icon'    => 'dashicons-admin-network',
//     'query_var'    => true,
//     'rewrite'      => true,
//     'has_archive'  => true,
//     'supports'     => array('title')
//     );
//
//       register_post_type('price', $args);
  // Комплектации
$args = array (
    'public'       => true,
    'labels'       => array('name' => 'Услуги', 'singular_name' => 'Услуга', 'add_new' => 'Добавить'),
    'show_in_menu' => true,
    'menu_icon'    => 'dashicons-businessman',
    'query_var'    => true,
    'rewrite'      => true,
    'has_archive'  => true,
    'supports'     => array('title')
    );

register_post_type('service', $args);
  // Комплектации
$args = array (
    'public'       => true,
    'labels'       => array('name' => 'Записи', 'singular_name' => 'Запись', 'add_new' => 'Добавить'),
    'show_in_menu' => true,
    'menu_icon'    => 'dashicons-businessman',
    'query_var'    => true,
    'rewrite'      => true,
    'has_archive'  => true,
    'supports'     => array('title', 'thumbnail', 'editor')
    );

register_post_type('blog', $args);
//
//
// $args = array (
//      'hierarchical' => false,
//      'labels' => array (
//      'name'          	    => 'Города',
//      'singular_name' 	    => 'Город',
//      'search_items'  	    => 'Поиск по городам',
//      'all_items'     	    => 'Все города',
//      'edit_item'     	    => 'Редактировать города',
//      'update_item'   	    => 'Обновить город',
//      'add_new_item'  	    => 'Добавить город',
//      'new_item_name' 	    => 'Название нового города'),
//      'query_var' => true,
//      'rewrite'   => true,
//      'hierarchical' => true
//     );
//
// register_taxonomy('city', 'address', $args);


}
 ?>
