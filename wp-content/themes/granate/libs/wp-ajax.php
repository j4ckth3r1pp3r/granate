<?php
  function ajax_get_acf_field () {
    if (isset($_POST["option"])) the_field($_POST["field"], 'option');
    else the_field( $_POST["field"] );
    die();
  }

  if (is_admin()) {
    add_action( 'wp_ajax_getAcfField', 'ajax_get_acf_field');
  }
 ?>
