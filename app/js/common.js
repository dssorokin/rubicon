$(document).ready(function() {


	var minHeight = 0;
	var counterData = {};


	function height(jqObject){
		jqObject.each(function(index,el){
		var height = $(this).height();
		if(height > minHeight){
			minHeight = height;
		}
	});
		jqObject.height(minHeight);
		minHeight = 0;
	};
	// $('.img-hand').waypoint(function(direction){
	// 	console.log('ddd');
 //    $('.img-hand').addClass('slideInLeft');
	// },{
	// 	offset: '100%'
	// });


	
	height($('.sect4 .content__item'));
	height($('.sect9 .item'));

	// RangesSliders
	

	$("#documents").ionRangeSlider({
		type: "single",
	    min: 0,
	    max: 400,
	    onChange: ranger
	});
		$("#employers").ionRangeSlider({
		type: "single",
	    min: 0,
	    max: 50,
	    onChange: ranger
	});

		//Sliders

			$('.sect2 .slider').owlCarousel({
    items:1,
    nav:true,
    navText: ['',''],
    touchDrag: false,
    mouseDrag: false,
    onInitialized: function(){
    	$('.slider').addClass('owl-initialized');
    }
});
	
	$('.read-more').click(function(){

		$(this).parent().find('.hid').removeClass('hidden');
		$(this).addClass('hidden');
	});

	$('.owl-dot,.owl-prev,.owl-next').click(function(){
		$('.hid').addClass('hidden');
		$('.read-more').removeClass('hidden');
	});

		var sly = new Sly($('#frame'), {
		horizontal: 1,
		itemNav: 'basic',
		activateMiddle: 1,
		smart: 1,
		activateOn: 'click',
		mouseDragging: 1,
		touchDragging: 1,
		releaseSwing: 1,
		startAt: 10,
		scrollBar: $('.scrollbar'),
		scrollBy: 1,
		activatePageOn: 'click',
		speed: 200,
		moveBy: 600,
		elasticBounds: 1,
		dragHandle: 1,
		dynamicHandle: 1,
		clickBar: 1
	}).init();

		function InitCounter(){
	$.getJSON('json/counter.json', function(response){

		counterData = response;
		console.log(counterData);
		$('.res-clients').text(response.clients);
	});
}

function setCounter(type){
	counterData[type]++;
	$.ajax({
		url: 'php/count.php',
		method: 'post',
		type: 'json',
		data: {'counts': counterData},
		success: function(response){
			InitCounter();
		}
	});
}

		var variants = {
			'off': 'Прочесть ответ',
			'on': 'Cпасибо я понял'
		},
		isOpened = false;

		$('.question').click(function(){
			var elem = $(this).find('.answer'),
			self = $(this);
			elem.toggleClass('opened');
			self.find('.arr-down').toggleClass('opened');

			isOpened = elem.hasClass('opened') ? true : false;
			if(isOpened){
				self.find('.res').text(variants.on);

			}else{
				self.find('.res').text(variants.off);
			}

		});


		// $('.parallax-back').parallax({imageSrc: 'img/sect12-bg.jpg'});




		//Popups

	$('.page-header .btn').click(function(){
		$('.gift-popup').arcticmodal();
	});

	$('.sect2 .btn').click(function(){
		$('.question-popup').arcticmodal();
	});

	$('.sect5 .btn').click(function(){
		$('.connect-form').arcticmodal();
		$('.connect-form .title').css({'marginRight': '-49px'});
		
	});

	$('.contact .btn').click(function(){
		$('.price-list-popup').arcticmodal();
	});

	$('.close-btn').click(function(){
		$(this).parent().arcticmodal('close');
	});

	$('.nav-menu').click(function(event){
	var target = $(event.target),
		point = target.attr('href'),
		pointOffset = $(point).offset().top - 80;
	$('html,body').animate({'scrollTop': pointOffset+'px'});
});

	$("form").on("submit", function(e){

	var answer = $(this).serialize();
	$.arcticmodal('close');
	$.ajax({
		type: "POST",
		cache: false,
		data: answer,
		url: "php/submit.php",
		success: function(data){
		window.location.href = "thankspage.html";
		$(this).trigger('reset');
		}
			
	});
	setCounter('clients');
	return false;
	
	});

	//Calculator

	var docs = 0,
		employers = 0,
		type = $('.type-select').val(),
		beginPrice = $('#begin-price'),
		price = 0,
		coins_1 = $('.coins-1'),
		coins_2 = $('.coins-2');

	function stringToInt(num){
		return String(num).replace(/(\d{3}$)/," $1") + ' р.';
	}

	function priceList(price1,price2,price3,price4){
		var priceForEmploy = (employers-5)*350;
		if(employers > 5){
				if(docs < 50){
					price1 += priceForEmploy;
					beginPrice.text(stringToInt(price1));

					return price1;
				}
				else if(docs > 50 && docs < 100){
					price2 += priceForEmploy;
					beginPrice.text(stringToInt(price2));
					return price2;
				}
				else if(docs > 100 && docs < 200){
					price3 += priceForEmploy;
					beginPrice.text(stringToInt(price3));
					return price3;
				}
				else if(docs > 200){
					price4 += priceForEmploy;
					beginPrice.text(stringToInt(price4));
					return price4;
				}
			}
			else{
				if(docs < 50){
					beginPrice.text(stringToInt(price1));
					return price1;
				}
				else if(docs > 50 && docs < 100){
					beginPrice.text(stringToInt(price2));
					return price2;
				}
				else if(docs > 100 && docs < 200){
					beginPrice.text(stringToInt(price3));
					return price3;
				}
				else if(docs > 200){
					beginPrice.text(stringToInt(price4));
					return price4;
				}
			}
	}

	function changeProfit(price){
		var prof = $('.profit-result'),
		beginPrice = $('#beginPrice'),
		resultProf = 56000 - price;
		prof.text(stringToInt(resultProf));
	}

	function changeImg(price1,price2){
		if(docs > price1 && docs < price2){
			coins_1.removeClass('hidden');
			if(!coins_2.hasClass('hidden')) coins_2.addClass('hidden');
		} else if(docs > price2){
			if(coins_1.hasClass('hidden')) coins_1.removeClass('hidden');
			coins_2.removeClass('hidden');
		}else{
			if(!coins_1.hasClass('hidden')) coins_1.addClass('hidden');
			if(!coins_2.hasClass('hidden')) coins_2.addClass('hidden');
		}
		
	}

	function ranger(){
		
		docs = parseInt($('.range-docs .irs-single').text()),
		employers = parseInt($('.range-empl .irs-single').text()),
		type = $('.type-select').val();

		switch(type){
			case 'var1':
			price = priceList(5000,7000,10000,12000);
			changeProfit(price);	
			break;

			case 'var2':
			price = priceList(6500,8500,12000,14000);
			changeProfit(price);
			break;

			case 'var3':
			price = priceList(10000,13000,17000,20000);
			changeProfit(price);
			break;
		}

		changeImg(80,150);
	}

	$('.type-select').change(function(event){
		ranger();
	});
	

	//sect6

	$('.sect6 button').click(function(event){
	 	 var tab = $(this).data('tab');
	 	 $('.exper>div').each(function(index,elem){
	 	 	$(this).removeClass('show').addClass('no-show');
	 	 	if(tab === $(this).data('tab')){
	 	 		$(this).removeClass('no-show').addClass('show');
	 	 	}

	 	 });
	});

	$(".slider__item a").fancybox({
		showCloseButton: true,
		width: 600
	});

	



InitCounter();

$('.sect3 .img-hand').animated('slideInLeft');

$('.sect3 .list').animated('fadeInRight');
$('.img-boy').animated('slideInLeft');

$('#menu-toggle-wrapper').click(function(){
    $(this).toggleClass('active');
    $('.nav-menu').toggleClass('no-show-md');
});




});
