<?php 
	require "php/config.php";
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>Аутсорсинг бухгалтерии</title>
	<meta name="description" content="">

	<!-- Bootstrap v3.3.4 Grid Styles -->
	<style>html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role="button"]{cursor:pointer}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.row{margin-left:-15px;margin-right:-15px}.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right !important}.pull-left{float:left !important}.hide{display:none !important}.show{display:block !important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none !important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none !important}.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none !important}@media (max-width:767px){.visible-xs{display:block !important}table.visible-xs{display:table}tr.visible-xs{display:table-row !important}th.visible-xs,td.visible-xs{display:table-cell !important}}@media (max-width:767px){.visible-xs-block{display:block !important}}@media (max-width:767px){.visible-xs-inline{display:inline !important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block !important}table.visible-sm{display:table}tr.visible-sm{display:table-row !important}th.visible-sm,td.visible-sm{display:table-cell !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block !important}table.visible-md{display:table}tr.visible-md{display:table-row !important}th.visible-md,td.visible-md{display:table-cell !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block !important}}@media (min-width:1200px){.visible-lg{display:block !important}table.visible-lg{display:table}tr.visible-lg{display:table-row !important}th.visible-lg,td.visible-lg{display:table-cell !important}}@media (min-width:1200px){.visible-lg-block{display:block !important}}@media (min-width:1200px){.visible-lg-inline{display:inline !important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block !important}}@media (max-width:767px){.hidden-xs{display:none !important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none !important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none !important}}@media (min-width:1200px){.hidden-lg{display:none !important}}.visible-print{display:none !important}@media print{.visible-print{display:block !important}table.visible-print{display:table}tr.visible-print{display:table-row !important}th.visible-print,td.visible-print{display:table-cell !important}}.visible-print-block{display:none !important}@media print{.visible-print-block{display:block !important}}.visible-print-inline{display:none !important}@media print{.visible-print-inline{display:inline !important}}.visible-print-inline-block{display:none !important}@media print{.visible-print-inline-block{display:inline-block !important}}@media print{.hidden-print{display:none !important}}</style>
	
	<!-- Header CSS (First Sections of Website: paste after release from _header.min.css here) -->
	<style></style>

	<!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
	

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="img/logo--small.png" type="image/png">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
<!-- 	<link rel="stylesheet" href="main.css"> -->

</head>

<body>

	<!-- Здесь пишем код -->
	<div class="body-wrapper">
		<header class="page-header">
			<div class="page-header__top">
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-5">
								<a href="/" class="logo">
									<img class="img-responsive" src="img/logo.png" height="73" width="222" alt="">
								</a>
							</div>
							<a href="javascript:void(0)" id="menu-toggle-wrapper" class="hidden-lg pull-right">
										<div id="menu-toggle"></div>	
								</a>
							<div class="col-lg-6">
								<nav class="nav-menu no-show-md">
									<ul class="clearfix">
										<li><a href="#sect2">Отзывы</a></li>
										<li><a href="#sect3">Выгода</a></li>
										<li><a href="#sect5">Цены</a></li>
										<li><a href="#sect6">О компании</a></li>
										<li><a href="#contacts">Контакты</a></li>
									</ul>
								</nav>
							</div>
							<div class="col-lg-3 col-md-4 col-md-push-2 col-lg-push-0 col-sm-5 col-sm-push-1 col-xs-4">
								<div class="phone clearfix">
									<a href="tel:83412939541"><i class="icon-phone"></i>
										<span class="phone-link">8 (3412) 939-541</span></a>
									<span class="descr">Ежедневно с 9:00 до 19:00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page-header__main">
				<div class="container">
					<div class="row">
						<h1 class="main-title">
							<b>профессиональное<br>
							бухгалтерское обслуживание</b><br>
							ип и ооо от ведущих экспертов ижевска 
						</h1>
						<p class="descr">Экономьте 248.000 рублей в год! Доверьте нам самое ценое!</p>
						<button class="btn">
							Запишетесь на бесплатный первый<br>
							месяц обслуживания прямо сейчас!
						</button>
						<p class="small-descr">
							Полная материальная ответственность!<br>
							Мы обезопасим от штрафов и доначисления налогов
						</p>
					</div>
				</div>
			</div>
		</header>
		
		<section class="sect2" id="sect2">
			<div class="container">
				<div class="row">
					<h2 class="sect-title">
						Наши главные приорететы -<br>
						репутация и качество обслуживания
					</h2>
					<div class="slider">
						<div class="slider__item clearfix">
							<figure class="photo">
								<a href="img/review-img-1-big.jpg"><img src="img/review-img-1.jpg" height="419" width="269" alt=""></a>
							</figure>
							<div class="text">
								<p>
									Мы пользовались услугами бухгалтерии на аутсорсинге еще до начала сотрудничества с ООО «Бухгалтерское бюро «Рубикон». Основной сложностью для этих компаний было погружение в суть наших проблем. Нам приходилось работать исключительно по их правилам и постоянно подстраиваться, что, порой, выбивало из колей. Частенько приходилось «краснеть» уже перед своими клиентами из-за несвоевременного получения необходимых документов.
								</p>
								<p class="hidden hid">
									При первом обращении к руководителю компании ООО «Бухгалтерское бюро «Рубикон», Алексею, мы были приятно удивлены простотой постановки задач, профессионализмом его команды и глубинным пониманием наших проблем. Сейчас решения принимаются настолько быстро и компетентно, что можно уже смело ставить точку на поиске другого бухгалтера. Ведь в результате мы получили поддержку профессиональных бухгалтеров, идущих «в ногу со временем», и предусмотрительно предупреждающих нас о надвигающихся бурях.
								</p>
								<span class="read-more">Читать дальше</span>
								<p class="company">ООО "Удмуртская клининговая компания"</p>
								<button class="btn">
						Хочу также
					</button>
							</div>
							
						</div>
						<div class="slider__item clearfix">
							<figure class="photo">
								<a href=""><img src="img/review-img-1.jpg" height="419" width="269" alt=""></a>
							</figure>
							<div class="text">
								<p>Наша компания пользуется услугами ООО «Бухгалтерское бюро «Рубикон» уже около года. Мы рады отметить высокий профессиональный уровень специалистов, оказывающих нам помощь по всем вопросам налогообложения и бухгалтерского учета.</p>
								<p>ООО «Бухгалтерское бюро «Рубикон» зарекомендовало себя как стабильный, а главное – надежный партнер, предоставляющий полную своевременную информацию.</p>
								<p>Мы, без сомнения, планируем продолжать наше сотрудничество</p>
		<p class="company">ООО «Форт С2-Ижевск» (охранная деятельность)</p>
		<button class="btn">
						Хочу также
					</button>
							</div>
						</div>
						<div class="slider__item clearfix">
							<figure class="photo">
								<a href="img/review-img-3-big.jpg"><img src="img/review-img-3.jpg" height="419" width="269" alt=""></a>
							</figure>
							<div class="text">
								<p>Начав свой бизнес с открытия кафе в 2014 году, мы сразу наняли частного бухгалтера для ведения учета, сдачи бухгалтерской и налоговой отчетности, ведения документооборота. </p><br>
								<p>В итоге, это закончилось лишь потерей времени и средств, а также штрафами из налоговой службы и Пенсионного фонда РФ. </p>
								<p class="hidden hid">Знакомство с ООО «Бухгалтерское бюро «Рубикон» позволило нам не просто получать своевременные и качественные бухгалтерские услуги, но и начать деятельность по производству и оптовой торговле пищевыми полуфабрикатами на территории Удмуртской республики. Поскольку теперь мы полностью уверены в предоставлении нам профессионального консультирования в области финансов</p><br>
								<p class="hidden hid">ООО «Бухгалтерское бюро «Рубикон» заблаговременно помнят обо всех датах налоговых и прочих обязательных платежей в бюджет.  Их сотрудники всегда в курсе необходимости зарегистрировать или обновить технические инструменты ведения бизнеса, например, электронной подписи, сертификата доступа или платформы 1С. </p><br>
								<p class="hidden hid">Рекомендуем эту компанию, где за демократичную стоимость вы получите не только серьезную поддержку, но и надежного партнера по бизнесу. </p>
								<span class="read-more">Читать дальше</span>
		<p class="company">ООО «Улон нянь» (производство и оптовая торговля пищевых полуфабрикатов для предприятий общественного питания)</p>
		<button class="btn">
						Хочу также
					</button>
							</div>
						</div>
						<div class="slider__item clearfix">
							<figure class="photo">
								<a href="img/review-img-4-big.jpg" class="href">
									<img src="img/review-img-4.jpg" height="419" width="269" alt="">
								</a>
							</figure>
							<div class="text">
								<p>Сразу после регистрации нашей организации, мы полностью передали бухгалтерское сопровождение на аутсорсинг в ООО «Бухгалтерское бюро «Рубикон», последовав совету хороших знакомых. За все это время наша бухгалтерская отчетность содержится в полнейшем порядке. Хотелось бы отдельно отметить высокий уровень квалификации специалистов, их оперативность, доброжелательность и тактичность. </p><br>
								<p>Качество услуг команды ООО «Бухгалтерское бюро «Рубикон» соответствует самым высоким стандартам, поэтому мы всегда рекомендуем их своим коллегам и бизнес-партнерам.</p>
		<p class="company">ООО "АЛЬЯНС Ко"</p>
		<button class="btn">Хочу также</button>
							</div>	
						</div>
		
						<div class="slider__item clearfix">
							<figure class="photo">
								<a href="img/review-img-5-big.jpg"><img src="img/review-img-5.jpg" height="419" width="269" alt=""></a>
							</figure>
							<div class="text">
								<p>Наша компания имеет самый положительный опыт работы с ООО «Бухгалтерское бюро «Рубикон». Год назад мы попали в затруднительное положение, в одночасье оставшись не только без главного бухгалтера, но и без бухгалтерских документа за два года работы. </p><br>
								<p>Обратившись в ООО «Бухгалтерское бюро «Рубикон» мы открыли для себя ответственного партнера, на высоком уровне и в срок выполняющего свои обязательства.</p><br>
								<p class="hidden hid">Уже через 2 месяца работы вся база утерянных документов была полностью восстановлена, что исключило налоговые и корпоративные риски полностью. Мы не сомневаемся, что наше дальнейшее сотрудничество будет еще более плодотворным.</p>
								<span class="read-more">Читать дальше</span>
		<p class="company">ООО «Уралтрансстрой» (строительно-монтажные работы)</p>
		<button class="btn">Хочу также</button>
							</div>	
						</div>
		
					</div>
					
				</div>
			</div>
		</section>
		
		<section class="sect3" id="sect3">
			<div class="img-hand animated">
				<img src="img/sect3-img-hand.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-4 col-md-offset-3 main">
						<h2 class="sect-title">
							аутсорсинг бухгалтерии, который<br>
							полностью себя окупает!
						</h2>
						<div class="left-right clearfix">
							<div class="left pull-left">
								<div class="head">422.000 руб</div>
								<div class="head-descr">в год уходит на содержание<br>
								1-го бухгалтера</div>
								<ul class="list">
									<li>264.000 в год - заработная плата</li>
									<li>114.000 руб в год - налоги с ЗП +<br>
									сопровождение бухгалтерской<br> 
									программы(1С: Бухгалтерия)</li>
									<li>19.000 руб в год - сопровождение <br> бухгалтерских
									программ</li>
									<li>25.000 руб в год -<br>
		(канцтовары и прочие мелкие<br>
		расходы)</li>
								</ul>
							</div>
							<div class="middle-line"></div>
							<div class="right pull-right">
								<div class="head">168.000 руб</div>
								<div class="head-descr">Услуги бюро:</div>
								<ul class="list">
									<li>Работа с первичной документацией</li>
									<li>Ведение и учет банковский и<br>
									расчетно-кассовых операций</li>
									<li>Учет имущества</li>
									<li>Кадровый учет и делопроизводство</li>
									<li>Формирование и сдача отчетности</li>
								</ul>
							</div>
						</div>
						<div class="lose">Вы теряете: <b>254.000 руб</b></div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="sect4">
			<div class="container">
				<div class="row">
					<h2 class="sect-title">ИЗБАВЬТЕСЬ ОТ РУТИНЫ РАЗ И НАВСЕГДА! ПРЕДОСТАВЬТЕ ВСЮ<br>
		БУХГАЛТЕРИЮ ЭКСПЕРТАМ КОМПАНИИ "РУБИКОН"</h2>
					<div class="content clearfix">
						<div class="col-md-4 col-sm-6 content__item first">
							<i class="head-icon"></i>
							<h3 class="title">Начисляем налоги</h3>
							<p class="descr">Полная оптимизация налогов в строгом<br>
		соответствии законодательству</p>
						</div>
						<div class="col-md-4 col-sm-6 content__item second">
							<i class="head-icon"></i>
							<h3 class="title">Считаем зарплату</h3>
							<p class="descr">Максимальная точность гарантирована!<br>
		Мы используем официальный<br>
		программный продукт для<br>
		начисления зарплаты – «КАМИН 3.0»</p>
						</div>
						<div class="col-md-4 col-sm-6 content__item third">
							<i class="head-icon"></i>
							<h3 class="title">Сдаём отчётность</h3>
							<p class="descr">Вам не придется тратить время и деньги на<br>
		оформление ЭЦП (электронноцифровая<br>
		подпись). Все это мы сделаем за Вас</p>
						</div>
						<div class="col-md-4 col-sm-6 content__item fourth">
							<i class="head-icon"></i>
							<h3 class="title">Работаем с банком - партнёром</h3>
							<p class="descr">Для Вас мы составим платежные поручения<br>
		для банка, получая обязательную<br>
		скидку в банке-партнёре.</p>
						</div>
						<div class="col-md-4 col-sm-6 content__item fifth">
							<i class="head-icon"></i>
							<h3 class="title">Ведём сделки</h3>
							<p class="descr">Оформим все документы при<br>
		осуществлении любых<br>
		сделок клиента.</p>
						</div>
						<div class="col-md-4 col-sm-6 content__item sixth">
							<i class="head-icon"></i>
							<h3 class="title">Общаемся за Вас</h3>
							<p class="descr">Проведём переговоры (переписку) с<br>
		государственными органами и финансовыми<br>
		учреждениями (банки, налоговая инспекция,<br>
		пенсионный фонд и др.).</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="sect5" id="sect5">
			<div class="container">
				<div class="row">
					<h2 class="sect-title">РАССЧИТАЙТЕ СТОИМОСТЬ ОБСЛУЖИВАНИЯ ВАШЕЙ<br>
		ОРГАНИЗАЦИИ ПРЯМО СЕЙЧАС</h2>
					<div class="col-lg-4 col-lg-offset-1 col-md-6 col-sm-8">
						<div class="calc-range">
							<select name="" id="" class="type-select">
								<option value="var1">УСН (доходы) 6% ЕНВД</option>
								<option value="var2">УСН (доходы-расходы) 10%</option>
								<option value="var3">ОСНО</option>
							</select>
							<span class="label">
								Количество документов
							</span>
							<div class="range-slider range-docs">
								<input type="text" id="documents">
							</div>
							<span class="label">
								Количество сотрудников
							</span>
							<div class="range-slider range-empl">
								<input type="text" id="employers">
							</div>
						</div>
					</div>
		
					<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-4">
						<div class="profit">
							<figure class="img-pig hidden-sm hidden-xs"><img src="img/sect5-img-hand.png" height="648" width="274" alt=""></figure>
							<div class="title clearfix">
								<span class="pull-left">Выгоды:</span>
								<span class="pull-right profit-result">38 500 р.</span>
							</div>
		
							<div class="b-descr clearfix">
								<div class="begin pull-left">
									<p class="text">Стоимость<br>обслуживания<br>
									в месяц
										<span id="begin-price">5000 р.</span>
									</p>
									<img src="img/sect5-img-left.png" height="43" width="75" alt="" class="coins">
									<div class="coins coins-1 hidden">
										<img src="img/sect5-img-left-1.png" height="69" width="74" alt="">
									</div>
									<div class="coins coins-2 hidden">
										<img src="img/sect5-img-left-2.png" height="106" width="75" alt="">
									</div>
								</div>
								<div class="end pull-right">
									<p class="text">Штатный<br>специалист<br> в месяц
										<span id="end-price">56 000 р.</span>
									</p>
									<img class="coins" src="img/sect5-img-right.png" height="69" width="74" alt="">
									<img class="coins coins-1 hidden" src="img/sect5-img-right-2.png" height="109" width="78" alt="">
									<img class="coins coins-2 hidden" src="img/sect5-img-right-1.png" height="136" width="88" alt="">
								</div>
							</div>
							
						</div>
					</div>
					<div class="inner-center"><button class="btn">
						Сэкономить на аутсорсинге<br>
						бухгалтерии
					</button></div>
				</div>
			</div>
		</section>
		
		<section class="sect6" id="sect6">
			<h2 class="sect-title">не откладывайте в долгий ящик!<br>
			Начните сотрудничество с нашей командой</h2>
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<figure class="photo">
							<img class="img-responsive" src="img/sect6-img-1.jpg" height="538" width="370" alt="">
							<div class="main-descr">
								<div class="title">Алексей Петров</div>
								<div class="under-title">Директор компании "Рубикон"</div>
								<button data-tab="1">Подробнее</button>
							</div>
						</figure>
					</div>
					<div class="col-xs-8">
						<div class="header">
							<div class="row">
								<div class="col-xs-4">
									<figure class="tab-photo">
										<img class="img-responsive" src="img/sect6-img-2.jpg" alt="">
										<div class="descr">
											<div class="title">Екатерина Балякина</div>
											<div class="under-title">Ведущий бухгалтер</div>
											<button data-tab="2">Подробнее</button>
										</div>
									</figure>
								</div>
												<div class="col-xs-4">
									<figure class="tab-photo">
									<img class="img-responsive" src="img/sect6-img-3.jpg" alt="">
									<div class="descr">
										<div class="title">Ирина Петрова</div>
										<div class="under-title">Бухгалтер – зарплатник</div>
										<button data-tab="3">Подробнее</button>
									</div>
								</figure>
												</div>
								<div class="col-xs-4">
									<figure class="tab-photo">
										<img class="img-responsive" src="img/sect6-img-4.jpg" alt="">
										<div class="descr">
											<div class="title">Наталья Шариффулина</div>
											<div class="under-title">Бухгалтер – первичник</div>
											<button data-tab="4">Подробнее</button>
										</div>
									</figure>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="exper">
							<div class="show" data-tab='1'>
									<h4 class="pers-title">Алексей Петров</h4>
								<p class="under-title">Директор компании "Рубикон"</p>
								<p>За плечами Алексея - 15-летний опыт работы в сфере бухгалтерских услуг. Из них более 7 лет он занимал пост главного бухгалтера.</p>
								<p>Подобная квалификация позволяет ему свободно ориентироваться и досконально разбираться во всех участках бухгалтерского учета</p>
								<p>До открытия собственной компании, Алексей успешно вел практику в крупном предприятии федерального уровня с годовым оборотом более 3 млрд.рублей.
														</p>
								<p>За это время он оптимизировал налоговую нагрузку компании в рамках законодательства.</p>
								<p>В результате для бюджета была сэкономлено более 40 млн.рублей налогов на прибыль и НДС в течении 3-х лет.</p>
								<p>Не менее успешно были пройдены и все выездные/ камеральные налоговые проверки.</p>
							</div>
							<div class="no-show" data-tab='2'>
									<h4 class="pers-title">Екатерина Балякина</h4>
								<p class="under-title">Ведущий бухгалтер</p>
								<p>Опыт работы: более 10 лет</p>
								<p>Знание всех участков бухгалтерского учета;</p>
								<p>Специализация: опыт работы бухгалтером в предприятиях разных видов деятельности: <br>
								производство, торговля, общественное питание, строительство и др.</p>
							</div>
							<div class="no-show" data-tab='3'>
									<h4 class="pers-title">Ирина Петрова</h4>
								<p class="under-title">Бухгалтер – зарплатник.</p>
								<p>Опыт работы: более 25 лет;</p>
								<p>Знание всех участков бухгалтерского учета;</p>
								<p>Специализация: начисление заработной платы, расчет больничных листов и отпусков.</p>
							</div>
							<div class="no-show" data-tab='4'>
									<h4 class="pers-title">Наталья Шариффулина</h4>
								<p class="under-title">Бухгалтер – первичник.</p>
								<p>Опыт работы: более 10 лет</p>
								<p>Знание всех участков бухгалтерского учета;</p>
								<p>Специализация: обработка и оформление первичных бухгалтерских документов.</p>
							</div>
		
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="sect7">
			<h2 class="sect-title">какую систему<br>
			налогообложения выбрать, чтобы<br>
			<b>не переплачивать налоги?</b></h2>
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-1 col-lg-6 col-md-6 col-sm-7 hidden-xs img-boy">
						<img src="img/sect7-img.png" height="544" width="504" alt="">
					</div>
					<div class="col-sm-4 col-md-offset-1 col-lg-4">
						<div class="row">
							<div class="form-container">
								<h2 class="title"><b>ЗАПОЛНИТЕ ФОРМУ НИЖЕ</b>
								и получите пошаговую инструкцию</h2>
								<form action="php/submit.php" method="POST">
									<input type="text" placeholder="Введите ваше имя" name="name">
									<input type="text" placeholder="Введите ваш телефон" name="phone">
									<input type="email" placeholder="Введите ваш e-mail" name="email">
									<input name="utm_medium" class="utm_medium" value="<? echo $utm_medium;?>"
									type="hidden">
									<input name="utm_source" class="utm_source" value="<? echo $utm_source;?>"
									type="hidden">
									<input name="utm_campaign" class="utm_campaign" value="<? echo $utm_campaign;?>"
									type="hidden">
													<input name="utm_term" class="utm_term" value="<? echo $utm_term;?>" type="hidden">
									<input name="utm_content" class="utm_content" value="<? echo $utm_content;?>"
									type="hidden">
									<input name="block" class="block" value="<? echo $block;?>" type="hidden">
									<input name="keyword" class="keyword" value="<? echo $keyword;?>" type="hidden">
									<input name="position" class="position" value="<? echo $position;?>" type="hidden">
									<button type="submit" class="btn">Получите пошаговую инструкцию</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="sect8">
			<h2 class="sect-title">ДЛЯ ВАС СПЕЦИАЛЬНЫЕ УСЛОВИЯ<br>
		СОТРУДНИЧЕСТВА НА 3 МЕСЯЦА!</h2>
			<p class="descr">Предложение действительно до 31.03.2016</p>
			<div class="container">
				<form action="" class="clearfix">
					<div class="col-md-4">
						<input type="text" placeholder="Ваше имя" name="name"> 
					</div>
					<div class="col-md-4">
						<input type="text" placeholder="Ваш телефон" name="phone">
					</div>
					<input name="utm_medium" class="utm_medium" value="<? echo $utm_medium;?>"
					type="hidden">
					<input name="utm_source" class="utm_source" value="<? echo $utm_source;?>"
					type="hidden">
					<input name="utm_campaign" class="utm_campaign" value="<? echo $utm_campaign;?>"
					type="hidden">
									<input name="utm_term" class="utm_term" value="<? echo $utm_term;?>" type="hidden">
					<input name="utm_content" class="utm_content" value="<? echo $utm_content;?>"
					type="hidden">
					<input name="block" class="block" value="<? echo $block;?>" type="hidden">
					<input name="keyword" class="keyword" value="<? echo $keyword;?>" type="hidden">
					<input name="position" class="position" value="<? echo $position;?>" type="hidden">
					<div class="col-md-4">
						<button type="submit" class="btn">Получить спец. условия</button>
					</div>
				</form>
			</div>
			<div class="under-descr">Мы гарантируем защиту Ваших данных от спама. Они используются только для связи с Вами</div>
		</section>
		
		<section class="sect9">
			<h2 class="sect-title">знаете, почему более 78% компаний<br>
			остаются с нами после пробного периода</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<article class="item">
							<i class="num">1</i>
							<h5 class="title">Непревзойденный опыт</h5>
							<p class="descr">Пока другие говорят, мы действуем!
		Уже более десяти лет компания
		«Рубикон» работает во всех сферах
		бизнеса, защищая своих клиентов
		от любых штрафов и доначисления
		налогов</p>
						</article>
					</div>
					<div class="col-md-4 col-sm-6">
						<article class="item">
							<i class="num">2</i>
							<h5 class="title">Полная безопасность</h5>
							<p class="descr">
		Мы застрахуем Ваш бизнес от<br>
		любых рисков! Полная<br>
		конфиденциальность и<br>
		материальная ответственность<br>
		для каждого клиента<br>
		гарантируется</p>
						</article>
					</div>
					<div class="col-md-4 col-sm-6">
						<article class="item">
							<i class="num">3</i>
							<h5 class="title">Квалифицированная
		поддержка</h5>
							<p class="descr">
		Моментально отвечаем на<br>
		любые вопросы. Служба<br>
		поддержки работает без<br>
		перерывов и<br>
		выходных</p>
						</article>
					</div>
					<div class="col-md-4 col-sm-6">
						<article class="item">
							<i class="num">4</i>
							<h5 class="title">Все лицензии</h5>
							<p class="descr">
		«Рубикон» имеет все<br>
		соответствующие лицензии и<br>
		сертификаты, а также официальное<br>
		программное обеспечение<br>
		для работы</p>
						</article>
					</div>
					<div class="col-md-4 col-sm-6">
						<article class="item">
							<i class="num">5</i>
							<h5 class="title">Максимальное удобство</h5>
							<p class="descr">
		Вся отчётность направляется в<br>
		контролирующие органы клиента<br>
		независимо от региона его реги-<br>
		страции по электронной системе<br>
		ТКС, а работа ведется в учетной<br>
		системе 1:С последнего поколения.</p>
						</article>
					</div>
					<div class="col-md-4 col-sm-6">
						<article class="item">
							<i class="num">6</i>
							<h5 class="title">Внимание к<br>
		каждому клиенту</h5>
							<p class="descr">
		Полное погружение в тонкости<br>
		Вашего бизнеса и, как следствие,<br>
		проработка оптимальной схемы его<br>
		работы (налоги, документооборот<br>
		и прочее)</p>
						</article>
					</div>
				</div>
			</div>
		</section>
		
		<section class="sect10">
			<h2 class="sect-title">Наши сертификаты и благодарности</h2>
			<div class="container">
				<div id="frame" class="frame">
					<ul class="slidee  clearfix">
						<li>
							<div class="paper">
								<img src="img/sect10-slider-img-1.jpg" alt="">
							</div>
							<div class="descr">
								<h4 class="title">Почетная грамота</h4>
								<p>За добросовестный труд и<br>
								  высокий профессионализм</p>
							</div>
						</li>
						<li>
							<div class="paper">
								<img src="img/sect10-slider-img-5.jpg" alt="">
							</div>
							<div class="descr">
								<h4 class="title">Международный диплом</h4>
								<p>Защитил диплом по <br>
								 международным стандартам<br>
								 финансовой отчетности (МСФО)</p>
							</div>
						</li>
						<li>
							<div class="paper">
								<img src="img/sect10-slider-img-2.jpg" alt="">
							</div>
							<div class="descr">
								<h4 class="title">Почетная грамота</h4>
								<p>От Администрации города <br> Ижевска</p>
							</div>
						</li>
						<li>
							<div class="paper">
								<img src="img/sect10-slider-img-3.jpg" alt="">
							</div>
							<div class="descr">
								<h4 class="title">Удостоверение</h4>
								<p>О повышении квалификации</p>
							</div>
						</li>
						<li>
							<div class="paper">
								<img src="img/sect10-slider-img-4.jpg" alt="">
							</div>
							<div class="descr">
								<h4 class="title">Сертификат</h4>
								<p>о прохождении курсов<br>
								гланый бухгалтер - топ-менеджер современного предприятия</p>
							</div>
						</li>
						
					</ul>
				</div>
				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea">
							
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="sect11">
			<h2 class="sect-title">ОТВЕЧАЕМ НА ВОПРОСЫ,<br>
		интересующие НАШИХ КЛИЕНТОВ</h2>
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-1 div col-lg-10 col-xs-12">
						<ul class="accordion">
							<li class="question clearfix">
								<div class="descr">
									Как именно будет происходить процесс удаленного бухгалтерского обслуживания?
								</div>
								<div class="btn">
									<span class="res">Прочесть ответ</span>
									<i class="arr-down"></i>
								</div>
								<div class="answer">
									<div class="answer-text">
										<b>Первичные документы:</b>
										<ul>
											<li>После того как все Ваши документы поступают к нам, мы тщательно<br>
												 проверяем их на соответствие действующим нормам законодательства. Если<br>
												 нами будут выявлены ошибки, мы укажем Вам на них и поможем исправить.</li>
											
											<li>После тщательной проверки все документы вносятся в базу 1С. При <br>
												 необходимости делаются проводки, рассчитываются налоги, сдается отчетность<br> 
												 в налоговые органы и фонды.</li>
											 
											<li>По истечении отчётного периода все документы должным образом<br>
												 оформляются и сшиваются. После этого они передаются Вам обратно, если они <br>
												 больше не нужны для проведения других операций. Если есть необходимость в <br>
												 ответственном хранении документов у нас – мы дополнительно оказываем и эту<br>
												  услугу (в зависимости от количества документов и времени хранения).</li>
			 							 </ul>
		
										<b>Расчёт зарплаты:</b>
										<ul>
											<li>Для правильного составления нам необходима достоверная информация<br>
													 обо всех кадровых изменениях, которые происходят на Вашем предприятии. Вы <br>
													 должны своевременно информировать нас о том, кто заболел, кто вышел на<br>
													  работу после болезни, кто берет отгул, а кто уезжает в командировку.</li>
		
												<li>После этого мы производим расчёт зарплаты и её начисление. Вам<br>
													необходимо только выдать её в установленный срок или перечислить на<br> 
													банковские карточки.</li>
		
												<li>При расчёте зарплаты Вашим сотрудникам, мы также рассчитываем все <br>
													необходимые взносы во внебюджетные фонды. Мы составляем для Вас<br> 
													платёжное поручение по каждому взносу или налогу. Вы можете оплатить их<br> 
													самостоятельно или же доверить эту функцию нам (при выборе соответствующего<br>
													 пакета услуг и открытии расчетного счета в нашем банке-партнере).</li>
		
												<li>После выплаты зарплаты, мы аккуратно складываем все зарплатные<br>
													 ведомости в соответствующую папку. Отчётность во внебюджетные фонды и в <br>
													 налоговую инспекцию подшивается отдельно.</li>
										 </ul>
		
										Вся отчётность по доходам сотрудников формируется и сдаётся в <br>
										контролирующие органы в предусмотренные законодательством сроки.<br>
										 При необходимости мы предоставляем нашим клиентам подтверждение того, <br>
										 что отчётность была своевременно сдана и принята к проверке.<br><br>
		
										<b>Расчет и уплата налогов</b><br><br>
										Мы рассчитываем все необходимые обязательные платежи на <br>
										основании тех документов, которые Вы нам предоставляете.<br>
										Примерно за неделю до начала срока уплаты обязательных платежей и <br>
										сборов, мы информируем Вас об их величине. Мы также предлагаем Вам<br>
										 возможные варианты оптимизации налогов.<br>
		
										 Все рассчитанные суммы мы согласовываем с Вами. Только после этого <br>
										 формируется отчётность для сдачи. На её основании мы формируем <br>
										 платёжные документы и предоставляем их Вам для оплаты. В указанные <br>
										 законом сроки мы сдаём всю необходимую отчётность в налоговую инспекцию и внебюджетные фонды<br><br>
		
										 <b>Подготовка и сдача отчётности</b><br><br>
		
										 В зависимости от того, являетесь Вы ИП или юридическим лицом, а <br>
										 также от того, какую систему налогообложения Вы выбрали, зависит <br>
										 состав вашей отчётности. Для нас эти факторы роли не играют, так как <br>
										 мы готовим всю необходимую бухгалтерскую и налоговую отчётность.<br>
										Мы готовим и сдаём отчётность во все контролирующие органы:
										<ul>
										<li>В налоговую инспекцию;</li>
											<li>В пенсионный фонд;</li>
											<li>В фонд социального страхования;</li>
											<li>В органы статистики.</li>
											</ul>
										Если Вы являетесь плательщиком НДС, то мы сдаем отчетность в <br>
										электронном виде, подключая Вас к своему электронному оператору или<br>
										 используя уже подключенного у Вас оператора.<br>
										Если отчётность будет сдана не в срок и в этом будет наша вина, то все<br>
										 штрафы и пени за несвоевременную сдачу мы будем выплачивать за <br>
										 счёт своих средств.
		
									</div>
								</div>
							
							</li>
							
							<li class="question clearfix">
								<div class="descr">
									Смогу ли я восстановить у Вас бухгалтерский учёт?
								</div>
								<div class="btn">
										<span class="res">Прочесть ответ</span>
										<i class="arr-down"></i>
								</div>
								<div class="answer">
									<div class="answer-text">
										Да, конечно, Вы сможете с помощью наших специалистов восстановить бух учет Вашего<br>
										 предприятия.<br>
		Рано или поздно многие предприятия сталкиваются с необходимостью<br>
		
		 восстановления бухгалтерского учета за предыдущие отчетные периоды. Причинами<br>
		  необходимости этого могут стать вынужденный перерыв в деятельности предприятия, смена<br>
		   главного бухгалтера, многочисленные бухгалтерские ошибки, допущенные ранее, утеря первичных <br>
		   документов и другие факторы. 
		Восстановление бухгалтерского учета направлено на корректировку ранее сданной отчетной <br>
		документации, пересчет налогов и сборов с последующей доплатой или возвратом налоговых <br>
		сумм. Эту работу каждый руководитель стремится провести грамотно и с минимально возможными<br>
		 потерями.<br>
		Алгоритм восстановления бухучета состоит из анализа существующей документации, проведения<br>
		 банковских документов, сверки с контрагентами, запросом недостающих документов у <br>
		 контрагентов. Также он включает в себя пошаговое составление отчетности и уточненных<br>
		  деклараций за пропущенные периоды и сдачу бухгалтерской документации в налоговые органы, <br>
		  различные фонды и органы статистики.<br>
		Профессиональное восстановление бухгалтерского учета подразумевает воспроизведение <br>
		синтетических и аналитических бухгалтерских регистров по имеющимся в наличии первичным<br>
		 документам.
									</div>
								</div>
							</li>
							
							<li class="question clearfix">
								<div class="descr">
									Мне придется ходить по налоговым инстанциям самому?
								</div>
								<div class="btn">
									<span class="res">Прочесть ответ</span>
										<i class="arr-down"></i>
								</div>
								<div class="answer">
									<div class="answer-text">
										ТОЛЬКО ПРЕДСТАВЬТЕ, ЧТО ВАМ БОЛЬШЕ НИКОГДА НЕ ПРИДЕТСЯ Ходить в:
		<ul><li>- Налоговую инспекцию (ФНС)</li>
		<li>- Пенсионный Фонд (ПФР)</li>
		<li>- Фонд социального страхования (ФСС)</li>
		<li>- Отделение статистики (Росстат)</li>
		</ul>
		
		Наша команда берет всю заботу о подготовке и сдаче отчетности в <br>
		контролирующие органы по средствам телекоммуникационных каналов связи (ТКС)<br><br>
		
		По факту сдачи отчетности мы предоставим вам соответствующее подтверждение.
									</div>
									<div class="btn"></div>
								</div>
							</li>
							
							<li class="question clearfix">
								<div class="descr">
									Как я могу быть уверен, что у Вас работают квалифицированные специалисты?
								</div>
								<div class="btn">
									<span class="res">Прочесть ответ</span>
										<i class="arr-down"></i>
								</div>
								<div class="answer">
									<div class="answer-text">
										Все специалисты нашей компании имеют высшее образование с опытом работы в<br>
										 области экономики и бухгалтерского учета не менее 5 лет не ниже уровня<br>
										  заместителя главного бухгалтера. Согласитесь, чтобы набрать и содержать такую<br>
										   команду Вам самостоятельно потребуется довольно много времени и сил. С нами Вы<br> 
										   получаете готовое решение.
									</div>
								</div>
							</li>
							
							<li class="question clearfix">
								<div class="descr">
									Какую ответственность Вы несете передо мной?
								</div>
								<div class="btn">
									<span class="res">Прочесть ответ</span>
									<i class="arr-down"></i>
								</div>
								<div class="answer">
									<div class="answer-text">
										Наша ответственность четко закреплена договором на бухгалтерское<br>
										 обслуживание, в рамках которого мы отвечаем буквально «головой» за все<br>
										  ошибки и недочеты. Кроме того, мы застраховали свою профессиональную<br>
										   ответственность на 1 млн. руб. Это значит, что любые штрафы и пени, которые<br>
										    могут возникнуть по нашей вине будут 100% компенсированы.
									</div>
									<div class="btn"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section class="sect12">
			<h2 class="sect-title">не ответили на ваш вопрос?<br>
			задайте его алексею петрову</h2>
			<div class="parallax-back">
				<div class="container">
					<div class="row">
						<div class="answer-form">
							<form action="php/submit.php" method="POST" >
								<input type="text" placeholder="Ваше имя" name="name">
								<input type="text" placeholder="Ваш e-mail" name="phone">
								<textarea name="question" id="" cols="30" rows="10" placeholder="Ваш вопрос?"></textarea>
								<input name="utm_medium" class="utm_medium" value="<? echo $utm_medium;?>"
								type="hidden">
								<input name="utm_source" class="utm_source" value="<? echo $utm_source;?>"
								type="hidden">
								<input name="utm_campaign" class="utm_campaign" value="<? echo $utm_campaign;?>"
								type="hidden">
												<input name="utm_term" class="utm_term" value="<? echo $utm_term;?>" type="hidden">
								<input name="utm_content" class="utm_content" value="<? echo $utm_content;?>"
								type="hidden">
								<input name="block" class="block" value="<? echo $block;?>" type="hidden">
								<input name="keyword" class="keyword" value="<? echo $keyword;?>" type="hidden">
								<input name="position" class="position" value="<? echo $position;?>" type="hidden">
								<button type="submit" class="btn">Задать вопрос Алексею</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="contact" id="contacts">
			<h2 class="sect-title">Контактная информация</h2>
			<div class="maps">
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=KTlhK6zVURFF8TedLOJtPJbFCzJQdKg5&width=100%&height=500&lang=ru_RU&sourceType=constructor"></script>
				<div class="container">
					<div class="b-contact">
						<ul class="list">
							<li class="list__item location">г. Ижевск, ул. Воткинское шоссе,<br>
					170, В-1, офис 312</li>
							<li class="list__item call">
								<a href="tel:83412919541">Звоните нам: <b>8 (3412) 93-95-41</b></a>						</li>
							<li class="list__item mail">
								<a href="mailto:zakaz@buhbr.ru">zakaz@buhbr.ru</a>
							</li>
						</ul>
						<div class="center-inner">
							<ul class="list-social">
								<li class="list-social__item vk"><a href=""></a></li>
								<li class="list-social__item insta"><a href=""></a></li>
								<li class="list-social__item facebook"><a href=""></a></li>
								<li class="list-social__item twitter"><a href=""></a></li>
							</ul>
							<button class="btn" href=""><i class="pdf"></i>Скачать подробный прайс</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		
			<footer class="page-footer hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4">
							<div class="logo">
								<a href="/"><img src="img/logo.png" height="73" width="222" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-md-offset-1 col-sm-4">
							<div class="logo-market"><a href="http://www.spb.marketingtime.ru/" target="_blank">
								<img src="img/market-logo.png" height="81" width="180" alt="">
							</a></div>
						</div>
						<div class="col-md-4 col-md-offset-1 col-sm-4">
							<div class="contacts">
								<div class="phone clearfix">
									<a href="tel:8412939541"><i class="icon-phone"></i>
										<span class="phone-link">8 (3412) 939-541</span></a>
									<span class="descr">Ежедневно с 9:00 до 19:00</span>
								</div>						</div>
						</div>
					</div>
				</div>
			</footer>
	</div>



	<div style="display: none;">
		<div class="gift-popup">
			<div class="close-btn"></div>
			<h3 class="title">Запишитесь на первый<br>
		<b>бесплатный месяц аутсорсинга sad</b><br>
		прямо сейчас</h3>
			<p class="descr">Заполните форму ниже, и мы внесем Вас в список уже через 30 минут </p>
			<div class="form-img clearfix">
				<form class="pull-left">
					<input type="text" placeholder="Введите ваше имя" name="name">
					<input type="text" placeholder="Введите ваш телефон" name="phone">
					<input type="email" placeholder="Введите ваш e-mail" name="email">
					<input name="utm_medium" class="utm_medium" value="<? echo $utm_medium;?>"
				type="hidden">
				<input name="utm_source" class="utm_source" value="<? echo $utm_source;?>"
				type="hidden">
				<input name="utm_campaign" class="utm_campaign" value="<? echo $utm_campaign;?>"
				type="hidden">
								<input name="utm_term" class="utm_term" value="<? echo $utm_term;?>" type="hidden">
				<input name="utm_content" class="utm_content" value="<? echo $utm_content;?>"
				type="hidden">
				<input name="block" class="block" value="<? echo $block;?>" type="hidden">
				<input name="keyword" class="keyword" value="<? echo $keyword;?>" type="hidden">
				<input name="position" class="position" value="<? echo $position;?>" type="hidden">
					<button type="submit" class="btn">Получите пошаговую инструкцию</button>
				</form>
				
				<figure class="photo-gift pull-right">
					<img src="img/gift.png" height="255" width="457" alt="">
				</figure>
			</div>
		
			<div class="center-inner">
				<div class="data">Оставленные данные будут использоваться только для связи с Вами</div>
				<div class="left">Сегодня записались уже <span class="left-num">Сегодня записались уже <span class="res-clients">16</span></span> организаций</div>
			</div>
		
		
		</div>
	</div>

	<div style="display: none;">
		<div class="question-popup">
			<div class="close-btn"></div>
			<h2 class="title">задайте вопрос<br>
			нашему эксперту</h2>
			<div class="descr">в форме ниже, и мы ответим<br>
			на него в течение 15 минут</div>
			<form action="php/submit.php" method="POST">
				<input type="text" placeholder="Введите ваш телефон" name="phone">
				<textarea name="question" id="" cols="30" rows="10" placeholder="Чем мы можем Вам помочь?"></textarea>
				<input name="utm_medium" class="utm_medium" value="<? echo $utm_medium;?>"
				type="hidden">
				<input name="utm_source" class="utm_source" value="<? echo $utm_source;?>"
				type="hidden">
				<input name="utm_campaign" class="utm_campaign" value="<? echo $utm_campaign;?>"
				type="hidden">
								<input name="utm_term" class="utm_term" value="<? echo $utm_term;?>" type="hidden">
				<input name="utm_content" class="utm_content" value="<? echo $utm_content;?>"
				type="hidden">
				<input name="block" class="block" value="<? echo $block;?>" type="hidden">
				<input name="keyword" class="keyword" value="<? echo $keyword;?>" type="hidden">
				<input name="position" class="position" value="<? echo $position;?>" type="hidden">
				<div class="center"><button type="submit" class="btn">Отправить вопрос!</button></div>
			</form>
		</div>
	</div>

	<div style="display: none;">
		<div class="connect-form">
			<div class="close-btn"></div>
			<div class="title"><span>Заполните форму ниже,<br>
			и мы свяжемся с вами</span></div>
			<img src="img/popup-pig-img.png" class="pull-left" height="380" width="318" alt="">
		
			<form action="php/submit.php" method="POST" class="">
				<input type="text" placeholder="Введите ваше имя" name="name">
				<input type="text" placeholder="Введите ваш телефон" name="phone">
				<input type="email" placeholder="Введите ваш e-mail" name="email">
				<input name="utm_medium" class="utm_medium" value="<? echo $utm_medium;?>"
				type="hidden">
				<input name="utm_source" class="utm_source" value="<? echo $utm_source;?>"
				type="hidden">
				<input name="utm_campaign" class="utm_campaign" value="<? echo $utm_campaign;?>"
				type="hidden">
								<input name="utm_term" class="utm_term" value="<? echo $utm_term;?>" type="hidden">
				<input name="utm_content" class="utm_content" value="<? echo $utm_content;?>"
				type="hidden">
				<input name="block" class="block" value="<? echo $block;?>" type="hidden">
				<input name="keyword" class="keyword" value="<? echo $keyword;?>" type="hidden">
				<input name="position" class="position" value="<? echo $position;?>" type="hidden">
				<div class="center-inner"><button type="submit" class="btn">Cэкономить на аутсорсинге бухгалтерии</button></div>
			</form>
			<div class="footer">
				Нажимая на кнопку «сэкономить на аутсорсинге бухгалтерии»,<br>
		я даю согласие на обработку персональных данных и соглашаюсь с<br>
		политикой конфиденциальности и обработки данных
			</div>
		</div>
	</div>

	<div style="display: none;">
		<div class="price-list-popup">
			<div class="close-btn"></div>
			<h4 class="title">Скачайте прайс-лист</h4>
			<p class="descr">
				Заполните форму ниже,<br>
		и прайс-лист будет автоматически<br>
		выслан на почту
			</p>
			<form action="php/sumbit.php">
				<input type="text" name="phone" placeholder="Введите ваш телефон">
				<input type="text" name="email" placeholder="Введите ваш e-mail">
				<input name="utm_medium" class="utm_medium" value="<? echo $utm_medium;?>"
				type="hidden">
				<input name="utm_source" class="utm_source" value="<? echo $utm_source;?>"
				type="hidden">
				<input name="utm_campaign" class="utm_campaign" value="<? echo $utm_campaign;?>"
				type="hidden">
								<input name="utm_term" class="utm_term" value="<? echo $utm_term;?>" type="hidden">
				<input name="utm_content" class="utm_content" value="<? echo $utm_content;?>"
				type="hidden">
				<input name="block" class="block" value="<? echo $block;?>" type="hidden">
				<input name="keyword" class="keyword" value="<? echo $keyword;?>" type="hidden">
				<input name="position" class="position" value="<? echo $position;?>" type="hidden">
					<button class="btn" type="submit">
					<i class="pdf"></i>Скачать подробный прайс
				</button>
			</form>
		</div>
	</div>



	<div class="hidden"></div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->



<!-- Load Scripts -->
<script>
	function addScript(src){
 	 var script = document.createElement('script');
  	script.src = src;
  	script.async = false; // чтобы гарантировать порядок
  	document.head.appendChild(script);
	}
	function addLink(src){
 	 var script = document.createElement('link');
  	script.href = src;
  	script.rel = 'stylesheet';
  	 // чтобы гарантировать порядок
  	document.head.appendChild(script);
	}

addLink('main.css');
addScript('libs/modernizr/modernizr.js')
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="bundle.js" async></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36914476 = new Ya.Metrika({
                    id:36914476,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36914476" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



</body>
</html>