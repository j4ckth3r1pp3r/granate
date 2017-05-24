$('.doctorpopup').click(function(event) {
  var dataId = $(this).data('id');
  $('#small-dialog').html($('.hide-doctors[data-id="'+dataId+'"]').html());
});
