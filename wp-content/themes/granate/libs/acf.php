<?php

//---- Добавляем JS для страницы настроек ----//
function acf_options_page_add_js() {

	wp_enqueue_script( 'acf-options-page', get_template_directory_uri() . '/js/acf-settings-page.js', array(), '1.0.0', true );
	wp_enqueue_style( 'acf-options-page', get_template_directory_uri() . '/css/acf-settings-page.css', array(), '1.0.0', 'all' );
	if ($_GET["page"] == 'wpcf7') {
	wp_enqueue_script( 'contact-form-hooks', get_template_directory_uri() . '/js/contact-form-hooks.js', array('jquery'), '1.0.0', true );
}

}

add_action('admin_enqueue_scripts', 'acf_options_page_add_js');


//---- Добавляем страницу настроек ----//

if( function_exists('acf_add_options_page') ) {

	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Настройки',
		'menu_title' 	=> 'Настройки сайта',
		'menu_slug' 	=> 'site-settings',
		'capability' 	=> 'edit_posts',
    'position'    => 3.1,
		'redirect' 	=> false
	));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Контактная информация',
    'menu_title' 	=> 'Контакты и прочее',
    'menu_slug' 	=> 'contacts',
    'parent_slug' 	=> $option_page['menu_slug'],
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Слайдер',
    'menu_title' 	=> 'Слайдер',
    'menu_slug' 	=> 'slider',
    'parent_slug' 	=> $option_page['menu_slug'],
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Почему выбирают нас',
    'menu_title' 	=> 'Слайдер (почему мы)',
    'menu_slug' 	=> 'slider_whyus',
    'parent_slug' 	=> $option_page['menu_slug'],
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Главная страница',
    'menu_title' 	=> 'Главная',
    'menu_slug' 	=> 'index',
    'parent_slug' 	=> $option_page['menu_slug'],
  ));


}

 ?>
