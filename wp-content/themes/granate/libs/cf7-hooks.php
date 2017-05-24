<?php

//---- Убираем лишние теги
function replace_tags( $form ) {
    $form = preg_replace('/<\/{0,1}(p|br \/)>/', '', $form);
    return $form;
};

//---- Добавляем возможность перевода
function translate_form( $form ) {
    $form = str_replace('Перезвоните мне', __('Перезвоните мне', 'eastwest'), $form);
    $form = str_replace('Оставьте заявку и мы', __('Оставьте заявку и мы', 'eastwest'), $form);
    $form = str_replace('с вами свяжемся', __('с вами свяжемся', 'eastwest'), $form);
    $form = str_replace('Ваше имя', __('Ваше имя', 'eastwest'), $form);
    $form = str_replace('Телефон', __('Телефон', 'eastwest'), $form);
    return $form;
};



//---- Скрываем стандартные плашки
function hide_message( $message, $status ) {
  $message .= '<script>$(".wpcf7-response-output").hide()</script>';
    return $message;
};



//---- Меняем ящик получателя
function recipient_mail( $components, $wpcf7_get_current_contact_form, $instance ) {
    $components['recipient'] = get_field('email_cf7', 'option');
    return $components;
};



//---- Добавляем все фильтры
add_filter( 'wpcf7_form_elements', 'replace_tags', 10, 1 );
// add_filter( 'wpcf7_form_elements', 'translate_form', 10, 1 );
// add_filter( 'wpcf7_display_message', 'hide_message', 10, 2 );
add_filter( 'wpcf7_mail_components', 'recipient_mail', 10, 3 );

 ?>
