<?php
if (!isset($_GET['tax'])) {
  $json_data = array('Укажи' => 'таксономию');
} else {
  $term = get_terms( array('taxonomy' => $_GET['tax']));

  foreach ($term as $item) {
    unset ($item->name);
    unset ($item->term_group);
    unset ($item->term_taxonomy_id);
    unset ($item->description);
    unset ($item->parent);
    unset ($item->count);
    unset ($item->filter);
  }

  $json_data = $term;
}

 ?>
