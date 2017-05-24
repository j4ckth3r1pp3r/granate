jQuery(function($) {

  var recipientMail = $('#wpcf7-mail-recipient');

  recipientMail.attr('disabled', true);
  recipientMail.parent('td').prepend('<span>Меняется в настройках сайта, текущее значение:</span>');
  recipientMail.width(250);

  $.ajax({
			type:'POST',
			url:ajaxurl,
			data:'action=getAcfField&option&field=email_cf7',
      beforeSend:function(xhr){
				recipientMail.val( 'Подождите...' );
			},
			success:function(data){
				recipientMail.val( data );
			}
		});

});
