(function($) {
    $.fn.nwThings = {
		playBg: 1,
		playOpen: 0,
		start: 0,
		openSlide: '',
		bgSlide: '',
		url: '',
		slides: [],
		mainSlide:'',
    }
}(jQuery));

$(document).ready(function(){
	
	// Main Menu Fixed to Top 
	var headerMainMenu = $('.nav-padding');
	var stickyHeaderTop = headerMainMenu.offset().top;

	
	  $(window).scroll(function() {
		 /*
		 var scroll = $(window).scrollTop();
		  
		  if( scroll  > stickyHeaderTop) {
			  headerMainMenu.css({position: 'fixed', top: '0px' , borderBottom :'1px solid #ddd', borderRadius: '0px', padding: '0px',});
		  } else {
			  headerMainMenu.css({position: 'static', top: '0px', borderBottom :'1px solid #ddd', padding: '10px 0px 10px 0px', });
		  }
		*/
		 // Back to Top Button 
		  var offset = 100,
		  offset1 = 10,
		  offset_opacity = 1200,
		  $back_to_top = $('.back-to-top');
		  
		  if( ($(this).scrollTop() > offset) ){
			   $back_to_top.addClass('cd-is-visible');
		  }else{
			  $back_to_top.removeClass('cd-is-visible cd-fade-out');
		  }
		  
		  if ($(this).scrollTop() > offset_opacity) {
			  $back_to_top.addClass('cd-fade-out');
		  }
	  });
		
	 $(window).resize(function() {
		var h = window.innerHeight;
		
		$c = $(".news-section-1");
		$s = $("#slides-container");
		if( $c.is(":visible") ){
			var sh = 0;
			
			if( $s.is(":visible") ){
				sh = $s.height();
			}
			
			//var ch = $c.height() + sh + 70;
			var ch = 220 + 280 + 70 + 35;
			if( ( h - ch ) > 0 )$c.css('marginTop', ( h - ch ) + 'px' );
		}
		
	   $navParent = $("#static-nav").parent();
	   $nav = $("#static-nav");
	   
	   if( ! $(".mobile-footer").is(":visible") ){
		   var w = ( $navParent.width() + 30 ) - $nav.width();
		   if( w > 0 ){
			   $nav.css("position", "fixed").css("left", ( w / 2 ) + "px");
		   }else{
			 $nav.css("position", "fixed");  
		   }
		   $("#main-area-slide").css("min-height", $(document).height() + "px" );
		   if( ( h - $nav.height() ) > 0 )$("#footer").css( "marginTop", h - $nav.height() + "px" );
		   
		   /*$(".news-section-1").css("position", "fixed").css("bottom", "31px");*/
	   }
		
	 });
	 $(window).resize();
	 //setTimeout(function(){ $(window).resize(); }, 2500 );
		/*
	   $nav = $("#static-nav");
	   if( ! $(".mobile-footer").is(":visible") ){
		   $nav.css("width", $nav.width() + "px" ).css("position", "fixed");
	   }
		*/
		
		
	  $(".back-to-top").click(function() {
	  event.preventDefault();
	  $('body,html').animate({scrollTop: 0}, 700);
	  });       
					
	  $.fn.nwThings.mainSlide = $("#main-slider").owlCarousel({
		items: 1,
		nav: false,
		autoplay: true,
		loop: true,
		dots: true,
		//navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		mouseDrag: true,
		autoplayHoverPause:true,
		touchDrag: true
	  });
		
	  if( $("#open-slider-container") && $("#open-slider-container").is(":visible") && $("#open-slider") ){
		   var i = 0;
		  $("#open-slider")
		  .find('.item')
		  .each( function(){
			 $.fn.nwThings.slides[i] = {src: $(this).attr("data-image") };
			 i++;
		  } );
		  
		  
		  $.fn.nwThings.openSlide = $("#open-slider").owlCarousel({
			items: 1,
			nav: false,
			autoplay: false,
			loop: true,
			dots: true,
			//navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			mouseDrag: false,
			autoplayHoverPause:true,
			dotsContainer:"#open-dots",
			touchDrag: true,
			onChanged: function(e){
				if( $.fn.nwThings.start && $.fn.nwThings.playOpen ){
					$.fn.nwThings.bgSlide.vegas('jump', e.page.index );
				}
			},
		  });
		  
		  $("#open-slider-container")
		  .on("mouseenter", function(e){
			  $.fn.nwThings.playOpen = 1;
			  $.fn.nwThings.playBg = 0;
			  $.fn.nwThings.bgSlide.vegas('pause');
		  })
		  .on("mouseleave", function(e){
			  $.fn.nwThings.playOpen = 0;
			  $.fn.nwThings.playBg = 1;
			  $.fn.nwThings.bgSlide.vegas('play');
		  });
		  
		  $.fn.nwThings.url = $("#open-slider-container").attr("data-url");
		 
		  $.fn.nwThings.bgSlide = $("#main-area-slide").vegas({
			slides: $.fn.nwThings.slides,
			walk: function (index, slideSettings) {
				//console.log("Slide index " + index + " image " + slideSettings.src);
				if( $.fn.nwThings.start && $.fn.nwThings.playBg ){
					$.fn.nwThings.openSlide.trigger('next.owl.carousel');
				}else{
					$.fn.nwThings.start = 1;
				}
				
			}
		});
		
		
		if( $('a[href="#live-stream"]').is(":visible") ){
			$("a.switch-section")
			.on("click", function(e){
				$(".dark-button").removeClass("dark-button");
				//$("a.switch-section").addClass("dark-button");
				$(this).addClass("dark-button");
				
				$( ".switch-section-item" ).addClass("inactive-section");
				$( $(this).attr("href") ).removeClass("inactive-section");
				
				if( ! $(".mobile-footer").is(":visible") ){
					return false;
				}
			});
			
			if( $('a[href="#live-stream"]').hasClass("streaming") ){
				setTimeout( function(){ $('a[href="#live-stream"]').click(); }, 5000 );
			}
		}
		
		if( $(".livechat-popup").is(":visible") ){
			$(".livechat-popup")
			.on("click", function(e){
				
				var myWindow = window.open("", "reportWindow", 'toolbar=no, location=no, menubar=no, resizable=yes, height=400, width=300');
				myWindow.document.write("<title>National Pension Commission - Live Chat</title><body style='/*background:url(images/preloader.gif) center no-repeat;*/ margin:0; overflow:hidden; padding:0;'><iframe src='"+$(this).attr("href")+"' style='width:100%; height:400px; display:none;' id='frame'></iframe></body>");
				
				myWindow.onresize = function() {
					myWindow.document.getElementById("frame").style.height = myWindow.innerHeight + "px";
				};
				
				myWindow.document.getElementById("frame").onload = function() {
					myWindow.document.getElementById("frame").style.height = myWindow.innerHeight + "px";
					myWindow.document.getElementById("frame").style.display = 'block';
				};
				
				return false;
			});
		}
	}
	  new WOW().init();

	  var TabSelect = $('#work .tabs button');
	  TabSelect.click(function() {
		  TabSelect.removeClass('active-work'); // remove class from previous active item
		  $(this).addClass('active-work'); // item class to the current one
	  });

	  $(".navbar-toggle").on("click", function () {
		  $(this).toggleClass("active");
	  });          


	   $(".filter-button").click(function(){
	   var value = $(this).attr('data-filter');
		
	   if(value == "all")
	   {
		   //$('.filter').removeClass('hidden');
		   $('.filter').show('1000');
	   }
	   else
	   {
	   $(".filter").not('.'+value).hide('3000');
	   $('.filter').filter('.'+value).show('3000');
			
	   }
	});        


	$('.gallery_product').magnificPopup({
			  delegate: 'a.popup-link',
			  type: 'image',
			  tLoading: 'Loading image #%curr%...',
			  mainClass: 'mfp-img-mobile',
			  gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			  },
			  image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			  }
	});
	
	var $clickedMenu;
	var showClickedMenu = '';
	/*
	$('#menu-main-menu')
	.find('li.menu-item-has-children')
	.find('a')
	.on("click", function(e){
		if( $(".mobile-footer").is(":visible") ){
			if( showClickedMenu )clearTimeout( showClickedMenu );
			showClickedMenu = '';
			
			if( $('#menu-main-menu').find('ul.sub-menu').is(":visible") ){
				$('#menu-main-menu').find('ul.sub-menu').hide();
			}
			$clickedMenu = $(this);
			showClickedMenu = setTimeout( function(){ 
				$clickedMenu.parent().find("ul.sub-menu").slideDown();
			}, 300 );
			return false;
		}
	});
	*/
	$('.popup-youtube, .popup-youtube-two').magnificPopup({

	  type: 'iframe',
	  mainClass: 'mfp-fade',
	  removalDelay: 160
	});             

});  