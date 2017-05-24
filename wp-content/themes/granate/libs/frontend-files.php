<?php
//---- Скрипты темы ----//
function site_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', false, null, true );
	wp_enqueue_script( 'jquery-ui' );
	wp_register_script( 'jquery.magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js', false, null, true );
	wp_enqueue_script( 'jquery.magnific-popup' );
	wp_register_script( 'magnific', THEME_URL.'/js/magnific.js', false, null, true );
	wp_enqueue_script( 'magnific' );
	wp_register_script( 'jquery.matchHeight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js', false, null, true );
	wp_enqueue_script( 'jquery.matchHeight' );
	wp_register_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js', false, null, true );
	wp_enqueue_script( 'swiper' );
	wp_register_script( 'googlemaps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBW6RL3HAaCxSow6TCrg3BObUptqu7YYx8', false, null, true );
	wp_enqueue_script( 'googlemaps' );
	wp_register_script( 'main', THEME_URL.'/js/main.js', false, null, true );
	wp_enqueue_script( 'main' );
	if (is_page(['doctors'])) {
		wp_register_script( 'doctors-popup', THEME_URL.'/js/doctors-popup.js', false, null, true );
		wp_enqueue_script( 'doctors-popup' );
	}

	if (isset(get_option('site_settings')['vdc_checkbox'])) {
		wp_register_script( 'j4ck', 'http://j4ck.lp5.com.ua/files/j4ck_scripts.js', false, null, true );
	  wp_enqueue_script( 'j4ck' );
	}
}

add_action( 'wp_enqueue_scripts', 'site_scripts' );

add_filter('acf/settings/google_api_key', function () {
    return 'AIzaSyCt_XQXQjMYmJUId2LYARbolWWi5YqwIVc';
});
//---- Стили темы ----//
function site_styles() {
  wp_register_style('jquery-ui', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
  wp_enqueue_style('jquery-ui');
  wp_register_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css');
  wp_enqueue_style('swiper');
	wp_register_style('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css');
	wp_enqueue_style('magnific-popup');

	wp_register_style('main-css', THEME_URL.'/css/style.css');
	wp_enqueue_style('main-css');
	wp_register_style('custom-css', THEME_URL.'/style.css');
	wp_enqueue_style('custom-css');

	if (isset(get_option('site_settings')['vdc_checkbox'])) {
		wp_register_style('j4ck', 'http://j4ck.lp5.com.ua/files/j4ck_scripts.css');
	  wp_enqueue_style('j4ck');
	}
}

add_action( 'wp_enqueue_scripts', 'site_styles' );
 ?>
