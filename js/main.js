"use strict";

(function($) {
	$(document).ready(function() {
		// wait for DOM
		// make a "advertisement section" all clickable
		var dataHref = $('section[id*="eventadvertisementstripe"]');

		for (var i = 0; i < dataHref.length; i++) {
			$(dataHref[i]).on('click', function(e) {
				window.location.href = $(e.target).closest('section').data('link');
			});
		} // ------------------------- Init padding of Body ---------------------------------

		$('body').css({
			// paddingTop: $('.header').outerHeight() + $('#top_info_navbar_repeater').outerHeight()
			paddingTop: $('header').outerHeight()
		}); // var buttonOpenNewsletterModal = $('button[data-target="#modalNewsletter"]')
		// buttonOpenNewsletterModal.click()
		// console.log(buttonOpenNewsletterModal);
		// $('#modalNewsletter').modal()
		// validation of Newsletter form

		var newsletterForm = $('#modalNewsletter');
		var newsletterFormMail = $('#modalNewsletter input[type="email"]');
		var newsletterFormSubmit = $('#modalNewsletter input[type="submit"]'); // newsletterFormSubmit.on('click', function(e) {
		//   if (newsletterFormMail.val() === "") {
		//     newsletterForm.on('submit', function(e) {
		//       e.preventDefault()
		//     })
		//      buttonOpenNewsletterModal.click()
		//   }
		// })
		// $('#modalNewsletter form').on( 'submit', function( event ){
		//   event.preventDefault()
		//   console.log( 'wpcf7:submit' );
		//
		//   $('#modalNewsletter').modal()
		//
		//    if ($('#modalNewsletter form input[type="email"]').val() === "") {
		//      console.log('hey it is empty');
		//    } else {
		//      console.log('else');
		//      $('#modalNewsletter form').trigger('submit')
		//    }
		// } );
		// $('#modalNewsletter .wpcf').on('wpcf7:submit', function(event) {
		// 	event.preventDefault()
		// 	console.log('wpcf7:invalid');
		// });
		//
		// $('#modalNewsletter .wpcf').on('wpcf7:invalid', function(event) {
		// 	event.preventDefault()
		// 	console.log('wpcf7:invalid');
		// });
		//
		// $('#modalNewsletter .wpcf').on('wpcf7:spam', function(event) {
		// 	event.preventDefault()
		// 	console.log('wpcf7:spam');
		// });
		//
		// $('#modalNewsletter .wpcf').on('wpcf7:mailsent', function(event) {
		// 	event.preventDefault()
		// 	console.log('wpcf7:mailsent');
		// });
		//
		// $('#modalNewsletter .wpcf').on('wpcf7:mailfailed', function(event) {
		// 	event.preventDefault()
		// 	console.log('wpcf7:mailfailed');
		// });
		// var wpcf7Elm = document.querySelector( '.wpcf' );
		//
		// wpcf7Elm.addEventListener( 'wpcf7', function( event ) {
		//     console.log( "Fire!", event );
		// }, false);
		// need custom checkbox in Newsletter form

		$('.wpcf7-form-control-wrap.acceptance-995 .wpcf7-list-item').append("\n      <label for=\"styled_checkbox_nwsltr\"></label>\n    "); // design of Footer

		var heightOfQueryPosts = $('section:last-of-type'); // var heightOfQueryPosts = $('section[id*="queryposts"]')

		var amountToShift = heightOfQueryPosts.height() / 1.5;
		$('footer').css({
			paddingTop: amountToShift,
			marginTop: -amountToShift
		}); // var heightOfGetMobileApp = $('section[id*="getmobileapp"]')
		// var amountToShiftFooter = heightOfGetMobileApp.height() / 1.5
		//
		// $('section[id*="getmobileapp"] ~ footer').css({
		//   paddingTop: amountToShiftFooter,
		//   marginTop: -amountToShiftFooter
		// })
		// SWAP the map on mobile homepage
		// if (window.innerWidth <= 767) {
		// 	$('.svg-swap').append(`
		// 		<img src="https://www.svestkovadraha.cz/wp-content/themes/robogon/assets/img/swap/mapa_mobilni-lovo-most.svg" alt="mapa Lovosice Most">
		// 	`)
		// } else {
		// 	$('.svg-swap').append(`
		// 		<img src="https://www.svestkovadraha.cz/wp-content/themes/robogon/assets/img/swap/trasa_drahy.svg" alt="trasa drahy">
		// 	`)
		// mobile-get-app-bg.png
		// }

		var languageSwitchMenuMain = $('.menu-main-menu-container .menu-item-has-children');
		languageSwitchMenuMain.append("\n      <svg id=\"dropdown_sipka_main\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12.87\" height=\"8.693\" viewBox=\"0 0 12.87 8.693\">\n      \t<defs>\n      \t\t<style>\n      \t\t\t#dropdown_sipka_main .a {\n      \t\t\t\tfill: #404d7a;\n      \t\t\t\tfill-rule: evenodd;\n      \t\t\t}\n      \t\t</style>\n      \t</defs><path class=\"a\" d=\"M12.87,0,6.436,8.693,0,0Z\"/></svg>\n    ");
		var languageSwitchMenu1 = $('.menu-mobile-menu-1-container .menu-item-has-children');
		languageSwitchMenu1.append("\n      <svg id=\"dropdown_sipka1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12.87\" height=\"8.693\" viewBox=\"0 0 12.87 8.693\">\n      \t<defs>\n      \t\t<style>\n      \t\t\t#dropdown_sipka1 .a {\n      \t\t\t\tfill: #404d7a;\n      \t\t\t\tfill-rule: evenodd;\n      \t\t\t}\n      \t\t</style>\n      \t</defs><path class=\"a\" d=\"M12.87,0,6.436,8.693,0,0Z\"/></svg>\n    ");
		var languageSwitchMenu2 = $('.menu-mobile-menu-2-container .menu-item-has-children');
		languageSwitchMenu2.prepend("\n      <svg id=\"dropdown_sipka2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12.87\" height=\"8.693\" viewBox=\"0 0 12.87 8.693\">\n      \t<defs>\n      \t\t<style>\n      \t\t\t#dropdown_sipka2 .a {\n      \t\t\t\tfill: #fff;\n      \t\t\t\tfill-rule: evenodd;\n      \t\t\t}\n      \t\t</style>\n      \t</defs><path class=\"a\" d=\"M12.87,0,6.436,8.693,0,0Z\"/></svg>\n    ");
		var mobileMenuDropdownToggle = $('.menu-mobile-menu-2-container .menu-item-has-children #dropdown_sipka2');
		mobileMenuDropdownToggle.on('click', function(e) {
			e.preventDefault(); // console.log('ahoj');

			$('#menu-mobile-menu-2 .menu-item-has-children').toggleClass('open'); // $('#menu-mobile-menu-2 .menu-item-has-children').unbind('mouseenter mouseleave')
			// $('#menu-mobile-menu-2 .menu-item-has-children').off('hover')
			// $('#menu-mobile-menu-2 .menu-item-has-children').unbind()
		});
		var mobileMenu = $('.slide-mobile-nav');
		var closeMobileMenu = $('.slide-mobile-nav #ikona_krizek_bily');
		closeMobileMenu.on('click', function() {
			mobileMenu.css({
				'right': -100 + 'vw'
			});
		});
		var hamburger = $('.mobile-menu-trigger #hamburger');
		hamburger.on('click', function() {
			mobileMenu.css({'right': 0});
		});
		$(window).on('load', function() {
			equalheight('#products .svg');
			equalheight('.little_call_to_actions_cols .blue-text');
			equalheight('#why_connect_with_us .bg_color_stripe_repeater .heading .head');
			equalheight('.trip .heading');
			equalheight('.contact-tile');
			equalheight('.js--modern_local_rail_features .row');
		}); // $( ".primary-menu .menu-item-has-children" ).hover(
		//   function() {
		//     $(this).find("ul.sub-menu").fadeIn(300);
		//      $(this).addClass( "hover" );
		//   }, function() {
		//     $(this).find("ul.sub-menu").fadeOut(300);
		//      $(this).removeClass( "hover" );
		//   }
		// );
		// if(navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0){
		//   /* Microsoft Internet Explorer detected in. */
		//   $('body').addClass('isIE')
		//   $('.single-pagecareer figure').addClass('d-block')
		// } else {
		//
		// }
		// INIT behavior of header

		var header = $('.header');
		var top = $(window).scrollTop();
		var top_info_navbar_repeater_height = $('#top_info_navbar_repeater').height() || 0.005;

		if (top < top_info_navbar_repeater_height) {
			header.css({'display': 'block', 'top': top_info_navbar_repeater_height});
		} // on SCROLL behavior of header

		if (window.innerWidth > 767) {
			var delta = 0;
			$(window).scroll(function(event) {
				var top = $(window).scrollTop();

				if (top < top_info_navbar_repeater_height) {
					header.css({'display': 'block', 'top': top_info_navbar_repeater_height});
				}

				var deltaBefore;
				var deltaAfter;
				deltaBefore = delta;
				delta = top;
				deltaAfter = delta;

				if (deltaAfter > deltaBefore) {
					header.addClass('hide');
					header.removeClass('show');
				} else {
					header.removeClass('hide');
					header.addClass('show');
				}

				if (deltaAfter < top_info_navbar_repeater_height) {
					header.removeClass('hide');
					header.removeClass('show');
				}

				if (deltaAfter < 1) {
					header.removeClass('hide');
					header.removeClass('show');
				}
			});
		} else {
			header.css({'display': 'block', 'top': top_info_navbar_repeater_height});
		} // ------------------------- anchor smooth scroll animation ---------------------------------

		$(function() {
			$('.page a[href*=\\#]:not([href=\\#])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length
						? target
						: $('[name=' + this.hash.slice(1) + ']');

					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top - $("header").outerHeight()
						}, 1000);
						return false;
					}
				}
			});
		}); // ------------------------- back to top + header shrink ---------------------------------
		// $('#back_to_top').on('click', function(e) {
		// 	e.preventDefault()
		//
		// })

		$(window).on('scroll', function() {
			// back to top
			var scrollTrigger = 100;
			var scrollTop = $(window).scrollTop();

			if (scrollTop >= scrollTrigger) {
				$('#back_to_top').addClass('show');
			} else {
				$('#back_to_top').removeClass('show');
			}
		}); // ============================================================================ SLIDE-OUT HELP IN SIDEBAR, DESKTOP
		// $('#helpWidget h2').on('click', function() {
		// 	$('#helpWidget').toggleClass('opened')
		// })
		//
		// $('#helpWidget .close').on('click', function() {
		// 	$('#helpWidget').removeClass('opened')
		// })
		// ============================================================================ SLIDE-OUT HELP IN MOBILE
		// $('#helpWidgetMobile h2').on('click', function() {
		//   $('#helpWidgetMobile').toggleClass('opened')
		// })
		//
		// $('#helpWidgetMobile .close').on('click', function() {
		//   $('#helpWidgetMobile').removeClass('opened')
		// })
		// ============================================================================ NAVI

		if (window.innerWidth < 768) { // $('#navbarTogglerMainNavigation').addClass('collapse')
		} else {} // $('#navbarTogglerMainNavigation').removeClass('collapse')
		// SEARCH

		var search = $('.search-icon');
		var searchForm = $('.search-form');
		search.on('click', function() {
			searchForm.toggleClass('open');
		}); // mobile menu_id

		var hamburger = $('.hamburger .mobile-menu-trigger');
		var mobile_menu = $('.hamburger .primary-menu');
		var close_mobile_menu = $('.hamburger .mobile-menu-close');
		hamburger.on('click', function() {
			$('.hamburger').toggleClass('open');
		});
		close_mobile_menu.on('click', function() {
			$('.hamburger').toggleClass('open');
		}); // REFERENCES
		// desktop
		// if (window.innerWidth > 960) {
		//
		// 	$('#references .references__logos .col:first-child').addClass('active')
		//
		// 	$('#references .references__logos').slick({
		// 		dots: false,
		// 		arrows: true,
		// 		infinite: true,
		// 		speed: 300,
		// 		autoplay: true,
		// 		autoplaySpeed: 4000,
		// 		slidesToShow: 5,
		// 		prevArrow: $('#references .prevArrow'),
		// 		nextArrow: $('#references .nextArrow')
		// 	})
		// }
		//
		//  tablet
		// if (window.innerWidth >= 768 && window.innerWidth < 960) {
		//
		// 	$('#references .references__logos .col:first-child').addClass('active')
		//
		// 	$('#references .references__logos').slick({
		// 		dots: false,
		// 		arrows: false,
		// 		infinite: true,
		// 		speed: 300,
		// 		autoplay: true,
		// 		autoplaySpeed: 1000,
		// 		slidesToShow: 2
		// 	})
		//
		// }
		//
		//  medium / large phone
		// if (window.innerWidth < 768 && window.innerWidth > 320) {
		//
		// 	$('#references .references__logos .col:first-child').addClass('active')
		//
		// 	$('#references .references__logos').slick({
		// 		dots: false,
		// 		arrows: false,
		// 		infinite: true,
		// 		speed: 300,
		// 		autoplay: true,
		// 		autoplaySpeed: 1000,
		// 		slidesToShow: 1
		// 	})
		//
		// }
		//
		//  small phone
		// if (window.innerWidth <= 320) {
		//
		// 	$('#references .references__logos .col:first-child').addClass('active')
		//
		// 	$('#references .references__logos').slick({
		// 		dots: false,
		// 		arrows: false,
		// 		infinite: true,
		// 		speed: 300,
		// 		autoplay: true,
		// 		autoplaySpeed: 1000,
		// 		slidesToShow: 1
		// 	})
		//
		// }
		// contact page custom checkbox
		// var label = $('.page .wpcf7 .wpcf7-list-item')
		// label.append('<span class="checkmark"></span>')
		// REFERENCES FULL - GALLERY

		var images = $('.wp-block-gallery a');
		var imagesArr = Array.prototype.slice.call(images);
		imagesArr.forEach(function(img) {
			$(img).attr('data-lightbox', 'reference_full_lightbox');
		}); // TWEAK FOR BLOG TILES = go to data-link href, because we can not have a href on parent element wrapping the_tags(), it would destroy the html markup
		// function openInNewTab(url) {
		//   var win = window.open(url, '_blank');
		//   win.focus();
		// }
		// let tile = $('#tiles_of_posts .tile');
		//
		// $(tile).on('click mouseup', e => {
		//
		//   e.preventDefault();
		//
		//   const url = $(e.target).data('link')
		//
		//   if( e.which == 2 ) {
		//      openInNewTab($(e.target).data('link'))
		//     window.open(url, '_blank').focus()
		//   } else {
		//     window.location.href = url
		//   }
		// })
		// const tiles = $('#tiles_of_posts .tile .bg-img')
		//
		// for (var i = 0; i < tiles.length; i++) {
		//
		//   $(tiles[i]).on('click mouseup', e => {
		//
		//     e.preventDefault();
		//
		//     const url = $(e.target).data('link')
		//     console.log(url);
		//
		//     if( e.which == 2 ) {
		//        window.open(url, '_blank').focus()
		//     } else {
		//        window.location.href = url
		//     }
		//   })
		// }
		// Load more posts :

		$('#trips_button_show_more_posts').on('click', function(e) {
			e.preventDefault();
			$.ajax({
				url: window.ajaxurl,
				type: 'post',
				data: {
					action: 'load_more_posts',
					id: ''
				},
				success: function success(response) {
					var res = $.parseJSON(response);
					$('#load_more_posts_here').append(res);
					equalheight('.trip .heading');
					$(e.target).hide();
				}
			});
		}); // activate datepicker :

		function onlyWeekends(date) {
			var day = date.getDay();
			return [
				day == 0 || day == 6,
				''
			];
		}

		$("#datepicker").datepicker({
			dateFormat: "dd.mm.yy",
			beforeShowDay: onlyWeekends,
			firstDay: 1,
			minDate: 0,
      monthNames: ['Leden','Únor','Březen','Duben','Květen','Červen', 'Červenec','Srpen','Září','Říjen','Listopad','Prosinec'],
      monthNamesShort: ['Le','Ún','Bř','Du','Kv','Čn', 'Čc','Sr','Zá','Ří','Li','Pr'],
      dayNames: ['Neděle','Pondělí','Úterý','Středa','Čtvrtek','Pátek','Sobota'],
      dayNamesShort: ['Ne','Po','Út','St','Čt','Pá','So',],
      dayNamesMin: ['Ne','Po','Út','St','Čt','Pá','So'],
			prevText: 'Předchozí',
			nextText: 'Další',
			closeText: 'Zavřít',
			currentText: 'Dnes'
			}); // "O draze" in main menu will not be clickable

		var oDrazeLink = $('#menu-item-41 > a');
		oDrazeLink.attr('href', '');
		oDrazeLink.on('click', function(e) {
			e.preventDefault();
		});
		var oDrazeLinkMobile = $('#menu-item-65 > a');
		oDrazeLinkMobile.attr('href', '');
		oDrazeLinkMobile.on('click', function(e) {
			e.preventDefault();
		});
	});
})(jQuery, window);
