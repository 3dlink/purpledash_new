var frases = [	{		h1:"we are",		span: "purple dash"	},	{		h1:"services",		span: "world wide"	},	{		h1:"we love",		span: "BRANDS"	},	{		h1:"we love",		span: "CODING"	},	{		h1:"we are",		span: "CREATIVE"	},	{		h1:"we are",		span: "ENTHUSIASTS"	},	{		h1:"we are",		span: "PASSIONATE"	},	{		h1:"we are",		span: "CURIOUS"	},	{		h1:"we love to",		span: "design"	}];
var timer = 0;

$(document).ready(function (){

	smoothScroll.init({
    	easing: "linear",
    	speed: 400
    });

    $('.slide').slick({
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
		var obj= $(".service-box, .section-title, .section-slogan, .section-extra, .parallax-title, .parallax-slogan").each(function (index){
			var me = $(this);
			var loc = me.offset().top;


			if (window.pageYOffset + window.innerHeight > loc + 50) {
				me.css("opacity",1);
			}
		});

		var icons = $(".service-box");
		
	});


	//SELECTED NAV LINK BY CLICK
	$("#nav-section a").click(function(){
		$(".selected").removeClass("selected");
		$(this).addClass("selected");
	});

	$("#to-about-section").click(function(){
		$(".selected").removeClass("selected");
		$("#nav-section a[href='#about-section']").addClass("selected");
	});

	$(".cta-btn").click(function(){
		$(".selected").removeClass("selected");
		$("#nav-section a[href='#contact-section']").addClass("selected");
	});


	//RESIZING SLIDER
	$(window).resize(function(){
		$(".slider").css("height",window.innerHeight);
		$(".slick-next").css('right','0px');
		$(".slick-prev").css('left','0px');
	});

	//REPRINTING PHRASES
	setInterval(function (){
		var t = timer;
		$(".hero-holder").fadeIn();

		if (timer == 0){
			$(".slides li:nth-of-type(2)").css("opacity",1);

			$(".slides li:nth-of-type(1)").fadeOut(800,"linear", function(){
				$(".slides li:nth-of-type(2)").css("z-index",2);
				$(".slides li:nth-of-type(1)").css("z-index",1);

				$(".slides li:nth-of-type(1)").css("opacity",0);
				$(".slides li:nth-of-type(1)").css("display","block");
			});

		} else if (timer == 3){
			$(".slides li:nth-of-type(3)").css("opacity",1);

			$(".slides li:nth-of-type(2)").fadeOut(800,"linear", function(){
				$(".slides li:nth-of-type(3)").css("z-index",2);
				$(".slides li:nth-of-type(2)").css("z-index",1);

				$(".slides li:nth-of-type(2)").css("opacity",0);
				$(".slides li:nth-of-type(2)").css("display","block");
			});

		} else if (timer == 6){
			$(".slides li:nth-of-type(4)").css("opacity",1);

			$(".slides li:nth-of-type(3)").fadeOut(800,"linear", function(){
				$(".slides li:nth-of-type(4)").css("z-index",2);
				$(".slides li:nth-of-type(3)").css("z-index",1);

				$(".slides li:nth-of-type(3)").css("opacity",0);
				$(".slides li:nth-of-type(3)").css("display","block");
			});			
		}

		if (timer < 9){
			
			var hth = $(".hero-title-holder");
				
			hth.fadeOut(function(){
				var html = '<h1 class="hero-title">'+frases[t].h1+' <span>'+frases[t].span+'</span></h1>';
				$(".hero-title").replaceWith(html);
			});

			hth.fadeIn();

			timer += 1;
		} else {
			$(".slides li:nth-of-type(1)").css("opacity",1);

			$(".slides li:nth-of-type(4)").fadeOut(800,"linear", function(){
				$(".slides li:nth-of-type(1)").css("z-index",2);
				$(".slides li:nth-of-type(4)").css("z-index",1);

				$(".slides li:nth-of-type(4)").css("opacity",0);
				$(".slides li:nth-of-type(4)").css("display","block");
			});

			$(".hero-holder").fadeOut();
			$(".hero-title-holder").fadeOut();
			timer = 0;
		}
	}, 3000);


	$(".cl-effect-18 a").hover(function(){
		$(".cl-effect-18 a").addClass("rotate");
	}, function(){
		$(".cl-effect-18 a").removeClass("rotate");
	});

	$(".slick-next").css('right','0px');
	$(".slick-prev").css('left','0px');

});

function isScrolledIntoView(elem)
{
   var docViewTop = $(window).scrollTop();
   var docViewBottom = docViewTop + $(window).height();    var elemTop = $(elem).offset().top;
   var elemBottom = elemTop + $(elem).height();    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
};