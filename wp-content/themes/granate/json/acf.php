<?php
  if (isset($_GET['field'])) {

    $json_data[$_GET['field']] = get_field($_GET['field'], 'option');
  }
 ?>
