$(document).ready(function(){
	   //$(window).bind('scroll', updateMenu());
	   document.addEventListener("scroll", updateMenu);
});

function updateMenu() {
	// Recupère contenu de .menu
	var menu = $( ".menu" );
	
	var offsetFromTop = 235 ;
	
	if ($(window).scrollTop() > offsetFromTop) {
		menu.addClass('fixed');
		//menu.css('opacity', 0.5); a changer dans .fixed dans le css
	}
	else {
		menu.removeClass('fixed');
	}
	
}