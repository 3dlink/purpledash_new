$(document).ready(function (){

	$(window).scroll(function () {

		// HIDE OR SHOW HEADER
		if(window.innerWidth > 767){
			var altura = $(".slider").height();

			if (window.pageYOffset >= altura) {
			
				$("#header-section").removeClass("header-hide");
				$("#header-section").addClass("header-show");
			} else {
				$("#header-section").removeClass("header-show");
				$("#header-section").addClass("header-hide");
			}
		}

		//OPACITY CHANGE
		var obj= $(".section-title, .section-slogan, .section-extra, .parallax-title, .parallax-slogan").each(function (index){
			var me = $(this);
			var loc = me.offset().top;


			if (window.pageYOffset + window.innerHeight > loc + 50) {
				me.css("opacity",1)
			}
		});		
	});


	//SELECTED NAV LINK BY CLICK
	$("#nav-section a").click(function(){
		$(".selected").removeClass("selected");
		$(this).addClass("selected");
	});
});