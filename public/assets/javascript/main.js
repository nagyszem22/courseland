$(".nano").nanoScroller({ alwaysVisible: true });

$(document).ready( function(){
	var hash = window.location.hash.substr(1);
	if (hash) {
		$(document.body).animate({
		    'scrollTop':   $('#'+hash).offset().top - 60
		}, 200);
	}
});

$(document).on('click', '.scrollto', function(){
	var hash = $(this).attr('data-to');
	$(document.body).animate({
	    'scrollTop':   $('#'+hash).offset().top - 60
	}, 500);
});

$(document).on('scroll', window, function() {
	var fromTop = $('body').scrollTop();
	if (fromTop > 300) {
		$('.topnav').removeClass('on-cover');
	} else {
		$('.topnav').addClass('on-cover');
	}
});

$(document).on('click', '.menu-button', function () {
    $('.right-nav').show("slide", { direction: "right" }, 350);
});
$(document).on('click', function (event) {
	if (event.target.id == "open-menu") { return; }
    $('.right-nav').hide("slide", { direction: "right" }, 350);
});