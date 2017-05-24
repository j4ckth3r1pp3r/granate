jQuery(function($) {

  //---- Добавляем ссылки подстраниц на главную страницу ACF настроек ----//
  var linksSettings;
  var optionPageClass = '.toplevel_page_site-settings ';
  linksSettings = $(optionPageClass+'.wp-first-item ul').html();
  linksSettings = '<ul>'+linksSettings+'</ul>';
  $(optionPageClass+'#normal-sortables').append(linksSettings);
  $(optionPageClass+'#normal-sortables ul li:first').hide();

  //---- Прячем уведомление о непривязанности настроек к странице и первую ссылку в меню ACF----//
  $('.notice.is-dismissible.updated.error').hide();
  $('ul#adminmenu .wp-first-item ul.wp-submenu .wp-first-item').hide();


  //---- Деактивируем поле, если указана галочка ----//
  function disableField (check, field, reverse = false) {

    //check - имя чекбокса ACF
    //field - имя поле ACF, который будет отключаться
    //reverse - перевернуть игру

    check = $('div[data-name="'+check+'"] input[type="checkbox"]');
    field = $('div[data-name="'+field+'"] input');

    var on = true, off = false;
    if (reverse) {on = false; off = true;}

    if (check.prop('checked')) {
      field.prop("disabled", on);
    } else {
      field.prop("disabled", off);
    }

    check.change(function(){
      if (field.prop('disabled') == off) {
        field.prop("disabled", on);
      } else {
        field.prop("disabled", off);
      }
    })
  }


  $('span:contains(Настройки)').addClass('icon setting');
  $('span:contains(Изображени), span:contains(Фото) span:contains(Картин)').addClass('icon image');
  $('span:contains(Место)').addClass('icon location');
  $('span:contains(Описани)').addClass('icon info');

  $('div.icon').find('.acf-input').prepend('<div class="acf-input-prepend"></div>');


});
