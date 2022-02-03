<!DOCTYPE html>
<html dir="ltr" lang="uk">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Raleway:wght@400;500;700&display=swap"
		rel="stylesheet">

	<!-- Stylesheets
	============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />

	<link rel="stylesheet" href="css/common.css" type="text/css" />
	<link rel="stylesheet" href="css/block.road.css" type="text/css" />
	<link rel="stylesheet" href="css/block.success_stories.css" type="text/css" />
	<link rel="stylesheet" href="css/footer.css" type="text/css" />
	<link rel="stylesheet" href="css/header.css" type="text/css" />
	<link rel="stylesheet" href="css/block.hero-image.css" type="text/css" />
	<link rel="stylesheet" href="css/block.finish.css" type="text/css" />
	<link rel="stylesheet" href="css/block.cards.css" type="text/css" />
	<link rel="stylesheet" href="css/block.resoult.css" type="text/css" />
	<link rel="stylesheet" href="css/block.write_to_us.css" type="text/css" />
	<link rel="stylesheet" href="css/block.start.css" type="text/css" />
	<link rel="stylesheet" href="css/intlTelInput.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>QAX Camp</title>
	<link rel="icon" type="image/png" href="favicon.png">

	<link rel="apple-touch-icon" sizes="57x57" href="favicon-57x57.png" />

	<link rel="apple-touch-icon" sizes="72x72" href="fav72x72.png" />

	<link rel="apple-touch-icon" sizes="114x114" href="favicon-114x114.png" />

	<link rel="apple-touch-icon" sizes="144x144" href="favicon-144x144.png" />
		<script src="https://unpkg.com/spacingjs" defer></script>
		<script src="https://cdn.jsdelivr.net/npm/spacingjs" defer></script>
	<script>
		function readTextFile(file, callback) {
			var rawFile = new XMLHttpRequest();
			rawFile.overrideMimeType("application/json");
			rawFile.open("GET", file, true);
			rawFile.onreadystatechange = function () {
				if (rawFile.readyState === 4 && rawFile.status == "200") {
					callback(rawFile.responseText);
				}
			}
			rawFile.send(null);
		}

		//usage:
		readTextFile("env.json",
			function (text) {
				var data = JSON.parse(text);
				/* console.log(data); */
				sessionStorage.setItem('facebookLink', data.facebookLink);
				sessionStorage.setItem('envName', data.envName);
				sessionStorage.setItem('tokenID', data.telega.tokenID);
				sessionStorage.setItem('chatID', data.telega.chatID);
			});
	</script>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header>
			<div class="header-menu" id="header-block">
				<a href="index.php"><img src="images/Logo_Small.svg" alt="Logo" id="logo"></a>

				<a href="cources.php?cource=qa&name=qa_practice" class="header-menu header-menu-links">курси</a>

				<a href="about_us.php"  class="header-menu header-menu-links ">про нас</a>

				<a href="our_trainers.php"  class="header-menu header-menu-links">наші тренери</a>

				
				<!--
				<div><a href="#" class="language">UA|RU</a></div>
				-->

				<a href="#write_to_us">
					<!-- <a href="https://t.me/RecrutMan"> -->
					<div id="sendButtonText">Записатися</div></a>
					
				<div id="letter-icon"><a href="#write_to_us"><img src="images/letter-icon.svg" alt="letter"></a></div>

				<div class="burger-icon" onclick="myFunction(this)">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
				</div>

				<div id="mobile-menu-fullscreen">
					<a href="cources.php?cource=qa&name=qa_practice" class="header-menu-mobile">Курси</a>

					<a href="about_us.php" class="header-menu-mobile">Про нас</a>

					<a href="our_trainers.php" class="header-menu-mobile">Наші тренери</a>

					<a href="#write_to_us">
					<!-- <a href="https://t.me/RecrutMan"> -->
					<div id="sendButtonText-mobile" onclick="goToForm()">Записатися</div></a>
		    	</div>
			</div>

				

		</header><!-- #header end -->
		
		

		
			<div id="heroImage-block">
						
						<div id="hero-text-block">
							<h1 id="hero-text">
								До оферу залишився один QAX
							</h1>
							<h4 id="hero-text-longread">
							Вдосконалення через практику на реальних<br> проєктах та менторство 
							</h4>
						</div>
						<div id="hero-img-block">
							<img src="images/Image_1.svg">
						</div>
					</div>
			
		


		<!-- Page Title
		============================================= -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div >
					
			

					<!-- ========================================= -->
					<section id="start">

						<div id="start-block" >
							<div id="start-img-block">
								<img src="images/start.svg">
							</div>
							<div id="start-text-block">
								<h3 id="start-title">СТАРТ</h3>
								<h4 id="start-text">Раді вітати тебе у нашому наметному містечку.
									Тут ти зможеш випробувати свої знання , знайти нових друзів , 
									збагатити свій досвід та кинутися в бій у реальному житті. 
								</h4>
							</div>
						</div>

					</section>
					<!-- ============================================ -->
					<section id="road">
						
						<div id="road-block" >
							
							<div id="road-text-block">
								<h3 id="road-title">Напрямок</h3>
								<div id="road-text">
									<p class="road-p">
										Ми розробили для тебе два напрямки навчання 
										які допоможуть покращити твої навички 
										та відшукати роботу про яку ти так довго мріяв 
									</p>
									<h4 class="road-small-title">Практичні курси</h4>
									<p class="road-p">
										Ми розробили для тебе два напрямки навчання які 
										допоможуть покращити твої навички та відшукати 
										роботу про яку ти так довго мріяв
									</p>
									<h4 class="road-small-title">Класичні курси</h4>
									<p class="road-p"> 
										Курс, що складається з основ програмування на Java, 
										а також базових засад написання UI-автотестів для Web-додатків. 
									</p>
								</div>
							</div>
							<div id="road-img-block">
								<img src="images/road.svg">
							</div>
						</div>

					</section>

					<!-- ================================== -->
					<section id="resoult">

						<div id="resoult-block" >
							<div id="resoult-img-block">
								<img src="images/resoult.svg">
							</div>
							<div id="resoult-text-block">
								<h3 id="resoult-title">РЕЗУЛЬТАТ</h3>
								<h4 id="resoult-text">Пам’ятай навіть якщо ти не маєш базових навичок для виживання 
									у ІТ світі , ми допоможемо тобі з цим після чого 
									ти впевнено зможеш обрати один з напрямкім і залишити наш кемп справжнім воїном 
								</h4>
							</div>
						</div>

					</section>

					<!-- ========================================== -->

					<section id="finish">
						
						<div id="finish-block" >
							
							<div id="finish-text-block">
								<h3 id="finish-title">ОФЕР</h3>
								<h4 id="finish-text">
								Наш успіх це твій офер , ми докладаємо максимально зусиль аби ти
								 отримав найкращі знання у своїй сфері 
								 та міг випробувати їх у справжній роботі .
								</h4>
								<div id="counter">
								<div class="bl">
									<div id="counter-text">Кількість підготовлених бійців</div>
									<div id="counter-numbers">
										<div data-num="0" class="number">0</div>
										<div data-num="3" class="number">0</div>
										<div data-num="9" class="number">0</div>
									</div>
								</div>
								

								</div>
							</div>
							<div id="finish-img-block">
								<img src="images/finish.svg">
							</div>
						</div>

					</section>
					<!-- ========================================== -->
						
					<section id="success-stories">
						
						<div id="success-stories-block" >
							
							<div id="success-stories-text-block">
								<h3 id="success-stories-title">Історії успіху</h3>
								<h4 id="success-stories-text">
								Хочемо розповісти тобі про людей 
								які довірились нам і досягли поставлених цілей :
								</h4>
								<table id="success-stories-table">
										<tr class="success-stories-student">
											<td><img src="images/linkedin_logo_home.svg"></td>
											<td>Alexander Bezeliuk</td> 
											<td><ul>
												<li>Працював 3 роки на посаді “Заступника дероктора магазину електроніки”<br></li>
												<li>Навчався у нас протягом 3 місяців на курсі : QA Практика<br></li>
												<li>Зараз працює на позиції QA engineer в компанії Playtech<br></li>
											</ul></td> 
										</tr>

										<tr class="success-stories-student">
											<td><img src="images/linkedin_logo_home.svg"></td>
											<td>Max Lapaichuk</td> 
											<td> <ul>
												<li>Працював 4 роки на посаді “Офіціант - адміністратор”<br></li>
												<li>Навчався у нас протягом 3 місяців на курсі : QA Практика <br></li>
												<li>Зараз працює на позиції Manual QA в компанії Leeloo<br></li>
											</ul></td> 
										</tr>
										
										<tr class="success-stories-student">
											<td><img src="images/linkedin_logo_home.svg"></td>
											<td>Pavel Karnasenko</td> 
											<td><ul>
												<li>Працював 4 роки на посаді “Інженер-конструктор”<br></li>
												<li>Навчався у нас протягом 1,5 місяців на курсі : QA Практика <br></li>
												<li>Зараз працює на позиції QA Engineer в компанії 	PixelTeh<br></li>
											</ul></td> 
										</tr>
								</table>
							</div>
							<div id="success-stories-img-block">
								<img src="images/success_stories.svg">
							</div>
						</div>

					</section>
					<!-- ========================================== -->
					<section id="cards">
						
						<div id="cards-block" >
							
							<div id="cards-text-block">
								<h3 id="cards-title">Обери свій напрямок</h3>
							</div>
							<div id="cards-img-block">
								<div class="course-card"><img src="images/QA_card.svg"></div>
								<div class="course-card"><img src="images/PM_card.svg"></div>
								<div class="course-card"><img src="images/BA_card.svg"></div>
								<div class="course-card"><img src="images/HR_card.svg"></div>
							</div>
						</div>

					</section>
					
					<?php include 'components/form.html'?>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php include 'components/footer.html'?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-chevron-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/include.js"></script>

	<!-- <script src="js/jquery.js"></script> -->


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="js/plugins.min.js"></script>
	

	<script>
		$("#leftside-navigation .sub-menu > a").click(function (e) {
			$("#leftside-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
				e.stopPropagation()
		})
	</script>


	<script>
function myFunction(x) {
  x.classList.toggle("change");
  var y = document.getElementById("header-block");
    if (y.className === "header-menu") {
        y.className += " responsive";
		$("body").css({ "overflow": "hidden" });
		$("#footer-block").css({ "display": "none" });
		$("#cources").css({ "display": "none" });
		$("#content").css({ "display": "none" });
		
    } else {
        y.className = "header-menu";
		$("body").css({ "overflow": "visible" });
		$("#footer-block").css({ "display": "flex" });
		$("#cources").css({ "display": "block" });
		$("#content").css({ "display": "block" });
    }
}
function goToForm(){
		$(".burger-icon").removeClass("change");
		$("#header-block").removeClass("responsive");
	    $("body").css({ "overflow": "visible" });
		$("#footer-block").css({ "display": "flex" });
		$("#cources").css({ "display": "block" });
		$("#content").css({ "display": "block" });
		

}

	</script>

	

	<!-- Footer Scripts
	============================================= -->
	<!-- for phone mask -->
	
	
	<script src="js/intlTelInput.min.js"></script>
	<script src="js/intlTelInput-jquery.min.js"></script>
	<script src="js/form.js"></script>
	<script src="js/functions.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

	<script>
		var block_show = false;
 
 function scrollTracking(){
	 if (block_show) {
		 return false;
	 }
  
	 var wt = $(window).scrollTop();//количество пикселей, прокрученных от верха 
	 var wh = $(window).height();//высота окна
	 var et = $('#finish').offset().top;//позволяет получить текущее положение элемента относительно документа.
	 var eh = $('#finish').outerHeight();//высота блока с/без отступов
	 var dh = $(document).height();//высота документа 
  
	 if (wt + wh >= et || wh + wt == dh || eh + et < wh){
					 block_show = true;
					 var time = 2,
					 cc = 1;
					 
					 $('#counter').each(function() {
						 var
						 cPos = $(this).offset().top,
						 topWindow = $(window).scrollTop();
						 if (cPos < topWindow + 200) {
						 if (cc < 2) {
							 $(".number").addClass("viz");
							 $('div').each(function() {
							 var
								 i = 1,
								 num = $(this).data('num'),
								 step = 500 * time / num,
								 that = $(this),
								 int = setInterval(function() {
								 if (i <= num) {
									 that.html(i);
								 } else {
									 cc = cc + 2;
									 clearInterval(int);
								 }
								 i++;
								 }, step);
							 });
						 }
						 }
					 });
					 
				 }
			 }
	$(window).scroll(function(){
				 scrollTracking();
	});
				 
	$(document).ready(function(){ 
				 scrollTracking();
	});		
 
	</script>
	
</body>

</html>