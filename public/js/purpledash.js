var frases = [  {       h1:"we are",        span: "purple dash" },  {       h1:"services",      span: "world wide"  },  {       h1:"we love",       span: "BRANDS"  },  {       h1:"we love",       span: "CODING"  },  {       h1:"we are",        span: "CREATIVE"    },  {       h1:"we are",        span: "ENTHUSIASTS" },  {       h1:"we are",        span: "PASSIONATE"  },  {       h1:"we are",        span: "CURIOUS" },  {       h1:"we love to",        span: "design"  }];
var timer = -1;

$(document).ready(function (){

// 	$(document).keypress(function(e) {
// 		e.preventDefault();
// 	    if(e.which == 13) {
// 	    	alert('enter');
// 	    	var cont = $(this).html();
// 			$(this).html(html+"<br>");
//     	}
// 	});

	smoothScroll.init({
		easing: "linear",
		speed: 400
	});

	$('.slide-services').slick({
		slidesToShow: 9,
		slidesToScroll:3,
		infinite: false,
		arrows:true,

		responsive: [
		{
			breakpoint: 1100,
			settings:{
				slidesToShow: 6
			}
		},
		{
			breakpoint: 768,
			settings:{
				slidesToShow: 3,
				arrows: false,
				autoplay: true,
				autoplaySpeed: 1500,
				infinite: true
			}
		}
		]
	});

	$('.slide-phrases').slick({
		fade: true,
		autoplay: true,
		autoplaySpeed: 8000,
		draggable: false,
		arrows: false,
		pauseOnFocus: false,
		pauseOnHover: false,
		speed: 1500
	});

	$(".slider").css("height",window.innerHeight);


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
		$(".work-box, .service-box, .section-title, .section-slogan, .section-extra, .parallax-title, .parallax-slogan, .social-network").each(function (index){
			var me = $(this);
			var loc = me.offset().top;


			if (window.pageYOffset + window.innerHeight > loc + 50) {
				me.css("opacity",1);
			}
		});


		//SELECTED NAVITEM

		if ($('#about-section').is_on_screen()) {
			$(".selected").removeClass("selected");
			$('#nav-section a[href="#about-section"]').addClass("selected");
		}else if ($('#team-section').is_on_screen()){
			$(".selected").removeClass("selected");
			$('#nav-section a[href="#team-section"]').addClass("selected");
		}else if ($('#service-section').is_on_screen()){
			$(".selected").removeClass("selected");
			$('#nav-section a[href="#service-section"]').addClass("selected");
		}else if ($('#portfolio-section').is_on_screen()){
			$(".selected").removeClass("selected");
			$('#nav-section a[href="#portfolio-section"]').addClass("selected");
		}else if ($('#testimonial-section').is_on_screen()){
			$(".selected").removeClass("selected");
			$('#nav-section a[href="#testimonial-section"]').addClass("selected");
		}else if ($('#contact-section').is_on_screen()){
			$(".selected").removeClass("selected");
			$('#nav-section a[href="#contact-section"]').addClass("selected");
		}
	});


	//RESIZING SLIDER
	$(window).resize(function(){
		$(".slider").css("height",window.innerHeight);
		$(".slick-next").css('right','0px');
		$(".slick-prev").css('left','0px');

		$('#mdialog').style('margin', '0px', 'important');
	});

	//REPRINTING PHRASES
	setInterval(function (){
		timer += 1;
		var t = timer;
		$(".hero-holder").fadeIn();

		if (timer == 0){
			$(".slides li:nth-of-type(2)").css("opacity",1);
			$(".slides #slider1").fadeOut(800,"linear", function(){
				$(".slides li:nth-of-type(2)").css("z-index",2);
				$(".slides li:nth-of-type(1)").css("z-index",1);

				$(".slides li:nth-of-type(1)").css("opacity",0);
				$(".slides #slider1").css("display","block");
			});

		} else if (timer == 3){
			$(".slides li:nth-of-type(3)").css("opacity",1);
			$(".slides #slider2").fadeOut(800,"linear", function(){
				$(".slides li:nth-of-type(3)").css("z-index",2);
				$(".slides li:nth-of-type(2)").css("z-index",1);
				$(".slides li:nth-of-type(2)").css("opacity",0);
				$(".slides #slider2").css("display","block");
			});

		} else if (timer == 6){
			$(".slides li:nth-of-type(4)").css("opacity",1);
			$(".slides #slider3").fadeOut(800,"linear", function(){
				$(".slides li:nth-of-type(4)").css("z-index",2);
				$(".slides li:nth-of-type(3)").css("z-index",1);
				$(".slides li:nth-of-type(3)").css("opacity",0);
				$(".slides #slider3").css("display","block");
			});
		} else if (timer == 9){
			$(".slides li:nth-of-type(1)").css("opacity",1);

			$(".slides #slider4").fadeOut(800,"linear", function(){
				$(".slides li:nth-of-type(1)").css("z-index",2);
				$(".slides li:nth-of-type(4)").css("z-index",1);

				$(".slides li:nth-of-type(4)").css("opacity",0);
				$(".slides #slider4").css("display","block");
			});

			$(".hero-holder").fadeOut();
			$(".hero-title-holder").fadeOut();

			timer = -1;
		}

		if (timer < 9 && timer != -1){

			var hth = $(".hero-title-holder");

			hth.fadeOut(function(){
				var html = '<h1 class="hero-title">'+frases[t].h1+' <span>'+frases[t].span+'</span></h1>';
				$(".hero-title").replaceWith(html);
			});

			hth.fadeIn();
		}

	}, 3000);


	$(".cl-effect-18 a").hover(function(){
		$(".cl-effect-18 a").addClass("rotate");
	}, function(){
		$(".cl-effect-18 a").removeClass("rotate");
	});

	$(".slick-next").css('right','0px');
	$(".slick-prev").css('left','0px');

	// Dynamic Modal //

	$('.work-box a').click(function(event) {
 		var modal = $('#portfolio-modal').modal({
 			show: false,
 		});

 		modal.find('.work-title').text('');
 		modal.find('.work-sub').text('');
 		modal.find('.work-description').text('')
 		modal.find('.photos img').attr('src', '');

 		var me = $(this);
  		var mainimg = me.data('mainimg');
  		var title = me.data('title');
  		var sub = me.data('sub');
  		var desc = me.data('desc');

  		modal.find('.work-title').text(title);
  		modal.find('.work-sub').text(sub);
		modal.find('.work-description').html(desc);
  		modal.find('.photos img').attr('src', 'public/img/'+mainimg);

 		modal.modal('show');
  	});
	// Dynamic Modal End //

});

$.fn.is_on_screen = function(){
	var win = $(window);
	var viewport = {
		top : win.scrollTop(),
		left : win.scrollLeft()
	};

	viewport.right = viewport.left + win.width();
	viewport.bottom = viewport.top + win.height();

	var bounds = this.offset();
	bounds.right = bounds.left + this.outerWidth();
	bounds.bottom = bounds.top + this.outerHeight()*0.5;

	return (!(viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};

(function($) {
   if ($.fn.style) {
     return;
   }

   // Escape regex chars with \
   var escape = function(text) {
     return text.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
   };

   // For those who need them (< IE 9), add support for CSS functions
   var isStyleFuncSupported = !!CSSStyleDeclaration.prototype.getPropertyValue;
   if (!isStyleFuncSupported) {
     CSSStyleDeclaration.prototype.getPropertyValue = function(a) {
       return this.getAttribute(a);
     };
     CSSStyleDeclaration.prototype.setProperty = function(styleName, value, priority) {
       this.setAttribute(styleName, value);
       var priority = typeof priority != 'undefined' ? priority : '';
       if (priority != '') {
         // Add priority manually
         var rule = new RegExp(escape(styleName) + '\\s*:\\s*' + escape(value) +
             '(\\s*;)?', 'gmi');
         this.cssText =
             this.cssText.replace(rule, styleName + ': ' + value + ' !' + priority + ';');
       }
     };
     CSSStyleDeclaration.prototype.removeProperty = function(a) {
       return this.removeAttribute(a);
     };
     CSSStyleDeclaration.prototype.getPropertyPriority = function(styleName) {
       var rule = new RegExp(escape(styleName) + '\\s*:\\s*[^\\s]*\\s*!important(\\s*;)?',
           'gmi');
       return rule.test(this.cssText) ? 'important' : '';
     }
   }

   // The style function
   $.fn.style = function(styleName, value, priority) {
     // DOM node
     var node = this.get(0);
     // Ensure we have a DOM node
     if (typeof node == 'undefined') {
       return this;
     }
     // CSSStyleDeclaration
     var style = this.get(0).style;
     // Getter/Setter
     if (typeof styleName != 'undefined') {
       if (typeof value != 'undefined') {
         // Set style property
         priority = typeof priority != 'undefined' ? priority : '';
         style.setProperty(styleName, value, priority);
         return this;
       } else {
         // Get style property
         return style.getPropertyValue(styleName);
       }
     } else {
       // Get CSSStyleDeclaration
       return style;
     }
   };
 })(jQuery);
