<?php
  if (function_exists('icl_get_languages')) {

    function wpml_return_normal_labels ($label) {
      $arrayBad = ['uk', 'ru', 'en'];
      $arrayGood = ['ukr', 'rus', 'eng'];

      return str_replace($arrayBad, $arrayGood, $label);
    }

    function wpml_get_languages($class = false, $skipMissing = 0, $orderBy = 'id', $order = 'asc', $linkEmptyTo = 'str') {
      $languageArray = icl_get_languages('skip_missing='.$skipMissing.'&orderby='.$orderBy.'&order='.$order.'&link_empty_to='.$linkEmptyTo);
      ?>
      <ul<?= ($class) ? ' class="'.$class.'"' : '' ?>>
        <?php foreach ($languageArray as $item) : ?>
          <li>
            <a href="<?= $item['url'] ?>"><?= wpml_return_normal_labels($item['code']); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <?php
    }
  }
 ?>
