jQuery( document ).ready(function($) {








	// // The polling function
	// function poll(fn, timeout, interval) {
	//     var endTime = Number(new Date()) + (timeout || 2000);
	//     interval = interval || 100;
	//
	//     var checkCondition = function(resolve, reject) {
	//         // If the condition is met, we're done!
	//         var result = fn();
	//         if(result) {
	//             resolve(result);
	//         }
	//         // If the condition isn't met but the timeout hasn't elapsed, go again
	//         else if (Number(new Date()) < endTime) {
	//             setTimeout(checkCondition, interval, resolve, reject);
	//         }
	//         // Didn't match and too much time, reject!
	//         else {
	//             reject(new Error('timed out for ' + fn + ': ' + arguments));
	//         }
	//     };
	//
	//     return new Promise(checkCondition);
	// }
	//
	// // Usage:  ensure element is visible
	// poll(function() {
	// 	// return document.getElementById('lightbox').offsetWidth > 0;
	// 	$.ajax({
	// 		method: 'GET',
	// 		url: ajaxurl,
	// 		data : {
  //       action : 'get_seats_data'
  //   	}
	// 	}).done(function(res) {
	// 		console.log('res', res);
	// 	}).fail(function(err) {
	// 		console.log('err', err);
	// 	})
	//
	// 	return false
	//
	// }, 2000, 1000).then(function() {
	//     // Polling done, now do something else!
	// }).catch(function() {
	//     // Polling timed out, handle the error!
	// });

	$.ajax({
		method: 'GET',
		url: ajaxurl,
		data : {
			action : 'get_seats_data'
		}
	}).done(function(res) {
		console.log('res', res);
	}).fail(function(err) {
		console.log('err', err);
	})







	var seat = $('.seat')

	seat.on('click', function(e) {
		// console.log('EEE', e.target);

		var train_from = $('#train_from').text()
		var train_to = $('#train_to').text()

		var data = {
			'action': 'update_seat',
			'seat': e.target.id,
			'train_from': train_from,
			'train_to': train_to
		};

		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
		jQuery.post(ajaxurl, data, function(response) {
			console.log('Got this from the server: ' + response);
			$(e.target).find('span').html(response)
		});
	})











	const makeID = function() {
    let text = '';
    const possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    for (let i = 0; i < 20; i++) { text += possible.charAt(Math.floor(Math.random() * possible.length)); }

    return text;
  }

	const bookTrainForm = $('#modalBookTrain form')
	const submitBtn = $('.js-modal-window input[type="submit"]')

	submitBtn.on('click', function(e) {
		e.preventDefault()

		$(e).find('form').submit(function(ev){
      ev.preventDefault();
    })

		const trainID = $(e.target).data('trainid')

		const buttonID = $('.js-modal-opener').data('trainid')
		const modalID = $('.js-modal-window').data('trainid')

		const wrapper = $(`.js-modal-window[data-trainid="${trainID}"]`)

		const date = $(`${wrapper.selector} .fare-date`).text()
		const from = $(`${wrapper.selector} .fare-from`).text()
		const to = $(`${wrapper.selector} .fare-to`).text()
		const train = $(`${wrapper.selector} .fare-train`).text()
		const traveltime = $(`${wrapper.selector} .fare-traveltime`).text()
		const km = $(`${wrapper.selector} .fare-km`).text()

		const nameAndSurnameInput = $(`${wrapper.selector} input[name="group_name"]`).val()
		const phoneInput = $(`${wrapper.selector} input[name="group_phone"]`).val()
		const emailInput = $(`${wrapper.selector} input[name="group_email"]`).val()
		const adultsInput = $(`${wrapper.selector} input[name="group_adults"]`).val()
		const childrenInput = $(`${wrapper.selector} input[name="group_children"]`).val()
		const bicyclesInput = $(`${wrapper.selector} input[name="group_bicycles"]`).val()
		const ZTPInput = $(`${wrapper.selector} input[name="group_ZTP"]`).val()
		const noteInput = $(`${wrapper.selector} input[name="group_note"]`).val()

		// console.log(date);
		console.log(nameAndSurnameInput, phoneInput, emailInput, adultsInput, childrenInput, bicyclesInput, ZTPInput, noteInput)
		console.log(date, from, to, train, traveltime, km);
		// console.log(buttonID, modalID, trainID);
		// console.log($(`.js-modal-window[data-trainid="${trainID}"]`));

		let data = {
	  name: `Jizdenka_${train}_${makeID()}`,
		status: 'publish',
		visibility: 'hidden',
	  type: 'simple',
	  regular_price: '21.99',
		// parent_id: 1331,
		description: `
			Jmeno a Prijmeni: ${nameAndSurnameInput} \n
			Telefon: ${phoneInput} \n
			Email: ${emailInput} \n
			Dospely: ${adultsInput} ks \n
			Dite: ${childrenInput} ks \n
			Kolo: ${bicyclesInput} ks \n
			ZTP/P: ${ZTPInput} ks \n
			Poznamka: ${noteInput} \n
			Datum: ${date} \n
			Z: ${from} \n
			Kam: ${to} \n
			ID vlaku: ${train} \n
			Doba jizdy: ${traveltime} \n
			Pocet kilometru ${km}
		`,
		"categories": [
      {
        "id": 21,
        "name": "jizdenka",
        "slug": "jizdenka"
      }
    ]

		// metadata: [
		// 	`Jmeno a Prijmeni: ${nameAndSurnameInput}`,
		// 	`Telefon: ${phoneInput}`,
		// 	`Email: ${emailInput}`,
		// 	`Dospely: ${adultsInput} ks`,
		// 	`Dite: ${childrenInput} ks`,
		// 	`Kolo: ${bicyclesInput} ks`,
		// 	`ZTP/P: ${ZTPInput} ks`,
		// 	`Poznamka: ${noteInput}`,
		// 	`Datum: ${date}`,
		// 	`Z: ${from}`,
		// 	`Kam: ${to}`,
		// 	`ID vlaku: ${train}`,
		// 	`Doba jizdy: ${traveltime}`,
		// 	`Pocet kilometru ${km}`
		// ]
		// attributes: [
		// 	{
		// 		id: 1,
		// 		name: 'Jmeno a Prijmeni',
		// 		visible: true,
		// 		options: [nameAndSurnameInput]
		// 	}
		// ]

			// attributes: [
			// 	{
      //       "id": 1,
      //       "name": "misto",
      //       "position": 0,
      //       "visible": true,
      //       "variation": true,
      //       "options": [
      //           "1",
      //           "2",
      //           "3",
      //           "4",
      //           "5",
      //       ]
      //   }
			// ]
		};

		let dataToUpdate = {
			"stock_quantity": 44,
			"attributes": [
        {
            "id": 1,
            "name": "misto",
            "position": 0,
            "visible": true,
            "variation": true,
            "options": [

            ]
        },
        {
            "id": 2,
            "name": "obsazeno",
            "position": 1,
            "visible": true,
            "variation": false,
            "options": [
							"1", "2", "3"
            ]
        },
        {
            "id": 3,
            "name": "volno",
            "position": 2,
            "visible": true,
            "variation": false,
            "options": [
                "4", "5", "6"
            ]
        },
        {
            "id": 4,
            "name": "vybrano",
            "position": 3,
            "visible": true,
            "variation": false,
            "options": [
                "7", "8", "9"
            ]
        }
    ]
		}

		createProduct(data, e.target)
		updateProduct(dataToUpdate, e.target)
	})

	const createProduct = function(data, selector) {

		$(selector).addClass('loading')

		$.ajax({
			method: "POST",
	  	url: '/wp-json/wc/v3/products',
			data: data,
			headers: {
	    	"Authorization": "Basic " + btoa("ck_e19464ab7a4333f377f64524213c4c15d57cbf04" + ":" + "cs_fe95b37fef0ef39ad4fbe6648c3f4cf27fe4d800")
	  	}
		})
	  .done(function(response) {
	    console.log( "success create", response );
			$(selector).removeClass('loading')
	  })
	  .fail(function(err) {
	    console.log( "error create", err );
			$(selector).removeClass('loading')
	  })
	}

	const updateProduct = function(data, selector) {

		$(selector).addClass('loading')

		$.ajax({
			method: "PUT",
	  	url: '/wp-json/wc/v3/products/1380',
			data: data,
			headers: {
	    	"Authorization": "Basic " + btoa("ck_e19464ab7a4333f377f64524213c4c15d57cbf04" + ":" + "cs_fe95b37fef0ef39ad4fbe6648c3f4cf27fe4d800")
	  	}
		})
	  .done(function(response) {
	    console.log( "success update", response );
			$(selector).removeClass('loading')
	  })
	  .fail(function(err) {
	    console.log( "error update", err );
			$(selector).removeClass('loading')
	  })
	}

	// receive list of products :
	// $.ajax({
	// 	method: "GET",
  // 	url: '/wp-json/wc/v3/products',
	// 	headers: {
  //   	"Authorization": "Basic " + btoa("ck_e19464ab7a4333f377f64524213c4c15d57cbf04" + ":" + "cs_fe95b37fef0ef39ad4fbe6648c3f4cf27fe4d800")
  // 	}
	// })
  // .done(function(response) {
  //   console.log( "success", response );
  // })
  // .fail(function(err) {
  //   console.log( "error", err );
  // })


	// create a product :
	// var data = {
  // name: 'Premium Quality',
  // type: 'simple',
  // regular_price: '21.99',
  // description: 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
  // short_description: 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
  // categories: [
	//     {
	//       id: 9
	//     },
	//     {
	//       id: 14
	//     }
	//   ],
	//   images: [
	//     {
	//       src: 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
	//     },
	//     {
	//       src: 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
	//     }
	//   ]
	// };
	//
	// $.ajax({
	// 	method: "POST",
  // 	url: '/wp-json/wc/v3/products',
	// 	data: data,
	// 	headers: {
  //   	"Authorization": "Basic " + btoa("ck_e19464ab7a4333f377f64524213c4c15d57cbf04" + ":" + "cs_fe95b37fef0ef39ad4fbe6648c3f4cf27fe4d800")
  // 	}
	// })
  // .done(function(response) {
  //   console.log( "success", response );
  // })
  // .fail(function(err) {
  //   console.log( "error", err );
  // })












	// ------------------------- detect IE -------------------------
	if(navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0){
      /* Microsoft Internet Explorer detected in. */
      $('body').addClass('isIE')
    } else {

    }





	// ------------------------- Smooth scroll ------------------------- dont use it, it will destroy bootstrap TABS on main page
	// $(function() {
  //     $('.page a[href*=\\#]:not([href=\\#])').click(function() {
  //       if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	//
  //         var target = $(this.hash);
	//
  //         target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	//
  //         if (target.length) {
  //           $('html,body').animate({
  //             scrollTop: target.offset().top - $("header").outerHeight()
  //           }, 1000);
	//
  //           return false;
  //         }
  //       }
  //     });
  //   });




		// ------------------------- back to top + header shrink -------------------------

    $(window).on('scroll', function() {

      // back to top
      var scrollTrigger = 100
      var scrollTop = $(window).scrollTop();

      if (scrollTop >= scrollTrigger) {
        $('#back-to-top').addClass('show');
      } else {
        $('#back-to-top').removeClass('show');
      }

      // the header will shrink when window is scrolled down
      // if (scrollTop > 1) {
      //   $('header').addClass('scrolled-down')
      // } else {
      //   $('header').removeClass('scrolled-down')
      // }
    })





	// ------------------------- prepare for mobile menu -------------------------

	$(window).on('load', function() {

		if (window.innerWidth <= 768) {
			$('#navbarCollapse').addClass('collapse')
		} else {
			$('#navbarCollapse').removeClass('collapse')
		}
	})

	$(window).on('resize', function() {

		if (window.innerWidth <= 768) {
			$('#navbarCollapse').addClass('collapse')
		} else {
			$('#navbarCollapse').removeClass('collapse')
		}
	})






	// INIT behavior of header

  var header = $('header')
  var top = $(window).scrollTop()
  var preHeader = $('#pre_header').outerHeight()

  if (top < preHeader) {
    header.css({
      'top': preHeader
    })
  } else {
		// header.css({
    //   'top': 0
    // })
  }

	// console.log('preHeader', preHeader);
	// console.log('top', top);


  // on SCROLL behavior of header

  var delta = 0

  $(window).scroll(function(event) {

    var top = $(window).scrollTop()
    var preHeader = $('#pre_header').outerHeight()

		// console.log('preHeader', preHeader);
		// console.log('top', top);

    var deltaBefore
    var deltaAfter

    deltaBefore = delta
    delta = top
    deltaAfter = delta

    if (deltaAfter > deltaBefore) { // scrolling down

      header.addClass('hide')
      header.removeClass('show')

    } else { // scrolling up

      header.removeClass('hide')
      header.addClass('show')

    }

    if (deltaAfter < preHeader) {
      header.removeClass('hide')
      header.removeClass('show')
    }

  });









	// ------------------------- equalheight -------------------------

	equalheight = function(container){

	var currentTallest = 0,
	     currentRowStart = 0,
	     rowDivs = new Array(),
	     $el,
	     topPosition = 0;
	 $(container).each(function() {

	   $el = $(this);
	   $($el).height('auto')
	   topPostion = $el.position().top;

	   if (currentRowStart != topPostion) {
	     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	       rowDivs[currentDiv].height(currentTallest);
	     }
	     rowDivs.length = 0; // empty the array
	     currentRowStart = topPostion;
	     currentTallest = $el.height();
	     rowDivs.push($el);
	   } else {
	     rowDivs.push($el);
	     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
	  }
	   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	     rowDivs[currentDiv].height(currentTallest);
	   }
	 });
	}


	$(window).on('load', function() {
    equalheight('.carousel-item .heading');
    equalheight('.all-interesting-places .card-header');
  });

  $(window).on('resize', function(){
    equalheight('.carousel-item .heading');
    equalheight('.all-interesting-places .card-header');
  });













	// ------------------------- some custom heights -------------------------

	var left = $('.search-train')
	var right = $('.train-special-offer')

	right.css({
		'height': left.outerHeight()
	})






	// ------------------------- make active on first nav-link -------------------------
	$('#pills-tab .nav-item:first-child .nav-link').addClass('active')
	$('#pills-tabContent .tab-pane:first-child').addClass('show active')










	// ------------------------- make active on first nav-link -------------------------
	$('#myCarousel').slick({
		prevArrow: $('.carousel-control-prev'),
		nextArrow: $('.carousel-control-next'),
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});


	// ------------------------- make group form plus minus box -------------------------
  var n = 1; //n is equal to 1

  //On click add 1 to n
  $('.plus').on('click', function(){
  	if(!($(this).parent().find("input[max=5]").length) || !($(this).parent().find("input").val() >= 5)){
   	 	$(this).parent().find("input").val(parseInt($(this).parent().find("input").val()) + 1);
  	}
  });

  $('.min').on('click', function(){
  	if($(this).parent().find("input").val() >= 1){
      $(this).parent().find("input").val(parseInt($(this).parent().find("input").val()) - 1);
  	}
  });






	// show more posts
	var btn = $('#show_next_tips')
	var posts = $('#show_posts_from_8_to_12')

	posts.hide()

	btn.on('click', function(e) {
		e.preventDefault()
		posts.show()
		equalheight('#show_posts_from_8_to_12 .card-header');
	})









	// SVG fill the path of train NEMAZAT!!!!!!!!!!!!!!!!!!!!!!!!!!

	let trainStopsList = [
		'Lovosice__Sulejovice',
		'Sulejovice__Čížkovice',
		'Čížkovice__Třebenice',
		'Třebenice__Třebenice_město',
		'Třebenice_město__Dlažkovice',
		'Dlažkovice__Podsedice',
		'Podsedice__Třebívlice',
		'Třebívlice__Semeč',
		'Semeč__Hnojnice',
		'Hnojnice__Libčeves',
		'Libčeves__Sinutec',
		'Sinutec__Bělušice',
		'Bělušice__Skršín',
		'Skršín__Sedlec_u_Obrnic',
		'Sedlec_u_Obrnic__Obrnice',
		'Obrnice__Most',
		'Most__'
	]

	let resultsArr = []

	let tripFrom = $('.search-train-table .trip-from').html().replace(/ /g,"_").replace(/-/g, '_')
	let tripTo = $('.search-train-table .trip-to').html().replace(/ /g,"_").replace(/-/g, '_')

	// console.log('tripFrom, tripTo', tripFrom, tripTo);

	// let startLoop = trainStopsList.find(item => tripFrom === item.substr(0, item.indexOf('__')))
	var startLoop = trainStopsList.find(function (item) {
	  return tripFrom === item.substr(0, item.indexOf('__'));
	});

	// let finishLoop = trainStopsList.find(item => tripTo === item.split('__').pop())
	var finishLoop = trainStopsList.find(function (item) {
	  return tripTo === item.split('__').pop();
	});

	// console.log('startLoop, finishLoop', startLoop, finishLoop);

	let lowestIndex = trainStopsList.indexOf(startLoop)
	let highestIndex = trainStopsList.indexOf(finishLoop)

	// kdyz je to jen o 1 zastavku, jen do smeru 0 az 44 km
	if (lowestIndex === highestIndex) {
		// console.log('lowestIndex === highestIndex', lowestIndex, highestIndex);
		resultsArr.push(trainStopsList[lowestIndex])
	}

	// normalni vyber, rozpeti vice zastavek, do smeru 0 az 44 km
	if (lowestIndex < highestIndex) {
		// console.log('lowestIndex < highestIndex', lowestIndex, highestIndex);

		while (lowestIndex <= highestIndex) {
			resultsArr.push(trainStopsList[lowestIndex])
			lowestIndex++;
		}
	}

	// zpetny chod vyberu stanic, ze smeru 44 az 0 km
	if (highestIndex < lowestIndex) {
		// console.log('highestIndex < lowestIndex', highestIndex, lowestIndex);

		if (highestIndex+1 === lowestIndex-1) {
			// console.log('if (highestIndex+1 === lowestIndex-1)');
			resultsArr.push(trainStopsList[highestIndex+1])

		} else {

			while (highestIndex < lowestIndex) {
				resultsArr.push(trainStopsList[highestIndex])
				highestIndex++;
				// console.log('highestIndex', highestIndex);
				// console.log('trainStopsList[highestIndex]', trainStopsList[highestIndex]);
				// console.log('trainStopsList[lowestIndex]', trainStopsList[lowestIndex]);
			}
		}

	}


	// console.log('resultsArr', resultsArr);

	// resultsArr.forEach(item => {
	// 	return $(`#${item}`).addClass('fill-the-path-of-train')
	// })
	resultsArr.forEach(function(item) {
		return $('#' + item).addClass('fill-the-path-of-train');
	});





















});
