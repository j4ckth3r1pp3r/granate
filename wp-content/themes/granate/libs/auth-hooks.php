<?php
/*
  //---- Добавляем перевод для формы сброса пароля ----//
  function beautyResetPasswordForm () {
    $form = do_shortcode('[profilepress-password-reset id="1"]');

    $form = str_replace('%TEXTRESETFORM%', __('Введите Ваш e-mail, чтобы получить ссылку для сброса пароля', 'j4ck-theme'), $form);
    $form = str_replace('%RESETBUTTONTEXT%', __('Сбросить пароль', 'j4ck-theme'), $form);
    $form = str_replace('%MAILTEXT%', __('На Ваш e-mail отправлены инструкции по восстановлению пароля', 'j4ck-theme'), $form);
    $form = str_replace('%ENTERPASSWORDTEXT%', __('Введите новый пароль', 'j4ck-theme'), $form);
    $form = str_replace('%NEWPASSWORD%', __('Новый пароль', 'ilovetravel'), $form);
    $form = str_replace('%NEWPASSWORDREPEAT%', __('Повторите новый пароль', 'j4ck-theme'), $form);
    $form = str_replace('%SAVE%', __('Применить', 'j4ck-theme'), $form);
    $form = str_replace('Passwords do not match', __('Пароли не совпадают', 'j4ck-theme'), $form);

    return $form;
  }

  //---- Добавляем поле телефона при реге через соц. сеть ----//
  // add_action('register_form','add_phone_field');
  //
  // function add_phone_field() {
  //   ?>
  //     <!-- <p>
  //       <label><?php _e('Phone:', 'j4ck-theme') ?><br/>
  //         <input id="phone" type="text" tabindex="30" size="25" value="" name="phone" />
  //       </label>
  //     </p> -->
  //     <?php
  //
  // }
  //
  // add_action('user_register', 'save_phone_email_acf');
  //
  // function save_phone_email_acf( $user_id, $password = "", $meta = array() ) {
  //   if (isset($_POST["bouncer_profile_completion"]) && isset($_POST["phone"]) && isset($_POST["user_email"])){
  //     update_field('phone', $_POST["phone"], 'user_'.$user_id);
  //     update_field('email', $_POST["user_email"], 'user_'.$user_id);
  //   }
  // }

  //---- Добавляем правильные адреса логина на разных языках ----//
  function beautySocialLogin( $message = false ) {
    $form = do_shortcode( '[wordpress_social_login]' );

    $form = preg_replace( '/<!--.*?-->/s', '', $form ); //---- Убираем комментарии

    //---- Кидаем на англ. версию страницы, при таком языке
    if (ICL_LANGUAGE_CODE == 'en') $form = str_replace( 'href="http://'.$_SERVER['HTTP_HOST'], 'href="http://'.$_SERVER['HTTP_HOST'].'/en', $form);

    $form = (!$message) ?: preg_replace('/(<div.*?with">)(.*)(<\/div>)/', '\1'.$message.':\3', $form);

    return $form;
  }

  add_action('init', 'lang_redirect', 1);

  function lang_redirect() {

    if ($_POST["action"] == 'wordpress_social_authenticated' && $GLOBALS['pagenow'] == 'wp-login.php') {

      preg_match('/\/en\//', $_POST["redirect_to"], $langMatch);

      if ($langMatch[0] == '/en/') {
        wp_redirect('/en'.$_SERVER['REQUEST_URI']);
      }
    }
  }

  //---- Исправляем редирект при выходе ----//
  function beautyLogoutLink ($url = SITE_URL) {
    return preg_replace('/(redirect_to=)(.*)/', '\1'.$url, wp_logout_url());
  }
*/
?>
