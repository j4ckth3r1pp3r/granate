<?php
add_action( 'admin_menu', 'site_add_admin_menu' );
add_action( 'admin_init', 'site_settings_init' );


function site_add_admin_menu(  ) {

	add_submenu_page(
  'options-general.php',
  'Настройки темы',
  'Настройки темы',
  'manage_options',
  'site_settings',
  'site_options_page' );

}


function site_settings_init(  ) {

	register_setting( 'vdc_setting', 'site_settings' );

	add_settings_section(
		'site_settings',
		'Отладка',
		'site_settings_section_callback',
		'vdc_setting'
	);

	add_settings_field(
		'site_vdc_checkbox',
		'Включить режим отладки',
		'site_vdc_checkbox_render',
		'vdc_setting',
		'site_settings'
	);


}


function site_vdc_checkbox_render(  ) {

	$options = get_option( 'site_settings' );
  if (!isset($options['vdc_checkbox'])) $options['vdc_checkbox'] = 0;
	?>
	<input type='checkbox' name='site_settings[vdc_checkbox]' <?php checked( $options['vdc_checkbox'], 1 ); ?> value='1'>
	<?php

}


function site_settings_section_callback(  ) {

$options = get_option( 'site_settings' );
	echo 'Включает функцию Var Dump Custom (VDC)';

}


function site_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Настройки темы</h2>

		<?php
		settings_fields( 'vdc_setting' );
		do_settings_sections( 'vdc_setting' );
		submit_button();
		?>

	</form>
	<?php

}

?>
