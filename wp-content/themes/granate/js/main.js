jQuery(function($) {
	jQuery(document).ready(function($) {

		//autoheight
		$(function() {
		    $('.js-auto-height').matchHeight();
		});

		//datepiker
		$( function() {
		    $( "#datepicker" ).datepicker();
		  } );

		//open text
		(function(){
			$(".open-bottom").click(function(event) {
				event.preventDefault();
				$(".text-wrap__p").toggleClass('open');
			});
		})();
		// sliders
		(function(){
			var swiperTop = new Swiper('.swiper-container', {
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		        speed: 1000,
		        autoplay: 5000
		    });
		     var swiper = new Swiper('.swiper-container-why-we', {
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		        spaceBetween: 30,
		        speed: 1000,
		        autoplay: 5000
		    });
		    var swiper = new Swiper('.swiper-container-certificate', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 2,
		        paginationClickable: true,
		        spaceBetween: 30,
		        freeMode: true
		    });
		    var swiperEquipment = new Swiper('.swiper-container-equipment', {
		        pagination: '.swiper-pagination',
		        paginationClickable: true
		    });
		    var swiperEquipment = new Swiper('.swiper-container-equipment', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 3,
		        paginationClickable: true,
		        spaceBetween: 30,
		        nextButton: '.swiper-button-next',
        		prevButton: '.swiper-button-prev'
		    });
		     var swiper = new Swiper('.swiper-container-new-equipment', {
		        pagination: '.swiper-pagination',
		        slidesPerView: 3,
		        paginationClickable: true,
		        spaceBetween: 30,
		        nextButton: '.swiper-button-next',
        		prevButton: '.swiper-button-prev'
		    });
		})();

		(function(){
			googlemap();
			//map
			function googlemap(){
			  var isDraggable = 'ontouchstart' in document.documentElement ? false : true;
			  var mapOptions = {
			      zoom: 13,
			      draggable: isDraggable,
			      panControl: true,
			      center: new google.maps.LatLng($('#map').data('lat'), $('#map').data('lng')),
			      zoomControl: true,
			      scaleControl: true,
			      scrollwheel: false,
			      shortSwipes: false,
			      longSwipes: true,
			      streetViewControl: false,
			      longSwipesRatio: 2.9,
			      threshold: 100,
			      mapTypeControl: false,
			      zoomControlOptions  : {
			          position    : google.maps.ControlPosition.LEFT_CENTER,
			      },
			      mapTypeId: google.maps.MapTypeId.ROADMAP
			    };
			    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			    var beachMarker = new google.maps.Marker({
			        position: new google.maps.LatLng($('#map').data('lat'), $('#map').data('lng')),
			        map: map
			    });
			};
		})();

		(function(){
			var button = $(".first-screen .btn"),
				form = $(".form-of-record_wrap");
			button.click(function(event) {
				event.preventDefault();
				if($(this).hasClass('active')){
					form.hide('slow/400/fast', function() {

					});
					button.removeClass('active');
				}else{
					form.show('slow/400/fast', function() {

					});
					button.addClass('active');
					var close = $(".first-screen .form-of-record .close");
					close.click(function(event) {
						form.hide('slow/400/fast', function() {

						});
						button.removeClass('active');
					});
				}
			});
		})();

	});

});


function successMailFeedback () {
	$.magnificPopup.close();

	setTimeout(function() {
		var el = $('#check');

		if (el.length) {
			$.magnificPopup.open({
				items: {
					src: el
				},
				type: 'inline'
			});
		}

		setTimeout(function() {
			$.magnificPopup.close();
		}, 3000);
	}, 500);
}

$('.callback-form').find('a').click(function (e) {
	e.preventDefault();
	$('a[href="#call-back"]').click();
});

$('.callback-form').find('a').css({'cursor' : 'pointer', 'z-index' : '999', 'position' : 'relative'});
