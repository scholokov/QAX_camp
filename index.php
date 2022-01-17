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
	<link rel="stylesheet" href="css/block.feedback.css" type="text/css" />
	<link rel="stylesheet" href="css/footer.css" type="text/css" />
	<link rel="stylesheet" href="css/header.css" type="text/css" />
	<link rel="stylesheet" href="css/block.hero-image.css" type="text/css" />
	<link rel="stylesheet" href="css/block.why_we.css" type="text/css" />
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
				<div class="container clearfix" >
					
			

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
					<section id=feedback>

						<div class="text-center">
							<h2 id="feedback_main_title">З нами можна хоч так</h2>
						</div>
						<div class="feedback-slideshow-container col-md-10 offset-md-1">
						<div id="success-cases-arrow">
										<img src="images/Arrow_success.svg" alt=arrow id="success-cases-arrow-img">
						</div>
						<div class="slick-slider-desktop">
						<div class="feedbackSlides">
							<div id="success-cases-block">
										<div id="success-cases-duration">3 місяці</div>
										
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">Valentyna Tipaieva
												<a target="_blank" href="https://www.linkedin.com/in/valentyna-tipaieva-a2316b221/" class="feedback_linkedin_icon_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
											</a>
												</div>
												<div class="feedback-job">QA engineer</div>
												<div class="feedback-text">PNN Soft</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Chief Legal Officer</div>
												<div class="feedback-text">13 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
							</div>
							<div class="feedbackSlides">
							<div id="success-cases-block">
										<div id="success-cases-duration">5 місяців</div>
										
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">Olesia Tychynina
												<a target="_blank" href="https://www.linkedin.com/in/olesia-tychynina-05470b1b7/" class="feedback_linkedin_icon_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
											</a>
												</div>
												<div class="feedback-job">Manual QA</div>
												<div class="feedback-text">Kevuru Games</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Спеціаліст - подолог</div>
												<div class="feedback-text">12 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
							</div>

							<div class="feedbackSlides">
							<div id="success-cases-block">
										<div id="success-cases-duration">4 місяці</div>
										
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">Dmytro Hranovskyi
												<a target="_blank" href="https://www.linkedin.com/in/%D0%B4%D0%BC%D0%B8%D1%82%D1%80%D0%BE-%D0%B3%D1%80%D0%B0%D0%BD%D0%BE%D0%B2%D1%81%D1%8C%D0%BA%D0%B8%D0%B9-7bba0a1b0/" class="feedback_linkedin_icon_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
											</a>
												</div>
												<div class="feedback-job">QA engineer</div>
												<div class="feedback-text">	Playtech</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Гірничий інженер ( добуток корисних копалин)</div>
												<div class="feedback-text">9 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
							</div>

							<div class="feedbackSlides">
							<div id="success-cases-block">
										<div id="success-cases-duration">4 місяці</div>
										
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">Iurii Bugar
												<a target="_blank" href="https://www.linkedin.com/in/iurii-bugar-ba76b553/" class="feedback_linkedin_icon_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
											</a>
												</div>
												<div class="feedback-job">JQA Engineer</div>
												<div class="feedback-text">PJSC BANK VOSTOK</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Бухгалтер в області міжнародної логістики</div>
												<div class="feedback-text">8 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
							</div>
							<div class="feedbackSlides">
							<div id="success-cases-block">
										<div id="success-cases-duration">4 місяці</div>
										
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">Julia Rabovich
												<a target="_blank" href="https://www.linkedin.com/in/julia-rabovich-522b3820b/" class="feedback_linkedin_icon_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
											</a>
												</div>
												<div class="feedback-job">QA engineer</div>
												<div class="feedback-text">Playtech</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Інженер-електронщик</div>
												<div class="feedback-text">9 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
							</div>
						
							<div class="feedbackSlides">
								<div id="success-cases-block">
									<div id="success-cases-duration">4 місяці</div>
									
									<div id="success-cases-info">
										<div id="success-cases-info-block1">
											<div class="feedback-author">Andrey Hryhorchuk
												<a target="_blank" href="https://www.linkedin.com/in/andrey-hryhorchuk-940a58205/?originalSubdomain=ua" class="feedback_linkedin_icon_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
											</a></div>
											<div class="feedback-job">JQA Engineer</div>
											<div class="feedback-text">Zakaz.ua</div>
										</div>
										<div id="success-cases-info-block2">
											<div class="feedback-text">QA Manual</div>
											<div class="feedback-text">QAX Camp</div>
										</div>
										<div id="success-cases-info-block3">
											<div class="feedback-text">L1 support engineer </div>
											<div class="feedback-text">5 year of overall NON-IT Experience</div>
										</div>
									</div>
								</div>
							</div>

							<div class="feedbackSlides">
								<div id="success-cases-block">
										<div id="success-cases-duration">3 місяці</div>
										
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">Alexander Bezeliuk
													<a target="_blank" href="https://www.linkedin.com/in/bezeliuk-alex/?originalSubdomain=ua" class="feedback_linkedin_icon_link">
													<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
												</a></div>
												<div class="feedback-job">QA Еngineer (intern)</div>
												<div class="feedback-text">Playtech</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Заступник директору <br>магазину елекроніки </div>
												<div class="feedback-text">3 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
							</div>

							<div class="feedbackSlides">
							<div id="success-cases-block">
										<div id="success-cases-duration">1,5 місяцi</div>
										
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">Pavel Karnasenko
													<a target="_blank" href="https://www.linkedin.com/in/pavel-karnasenko-a66632207/?originalSubdomain=ua" class="feedback_linkedin_icon_link">
													<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
												</a></div>
												<div class="feedback-job">QA Engineer</div>
												<div class="feedback-text">PixelTeh</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Інженер-конструктор</div>
												<div class="feedback-text">4 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
							</div>

							<div class="feedbackSlides">
							<div id="success-cases-block">
										<div id="success-cases-duration">5 місяців</div>
										
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">Natali Sorokina
												<a target="_blank" href="https://www.linkedin.com/in/natalya-sorokina-a74a7b1a9/" class="feedback_linkedin_icon_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
												</a>
												</div>
												<div class="feedback-job">Junior QA</div>
												<div class="feedback-text">FireKass</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Керуючий банківським<br> відділенням</div>
												<div class="feedback-text">22 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
							</div>

							<div class="feedbackSlides">
							<div id="success-cases-block">
										<div id="success-cases-duration">3 місяці</div>
										
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">Max Lapaichuk
												<a target="_blank" href="https://www.linkedin.com/in/lapaichukmax/?trk=public_profile_browsemap_profile-result-card_result-card_full-click&originalSubdomain=ua" class="feedback_linkedin_icon_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
											</a>
												</div>
												<div class="feedback-job">Manual QA</div>
												<div class="feedback-text">Leeloo</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Офіціант - адміністратор</div>
												<div class="feedback-text">4 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
							</div>

							
						</div>
							<!----<ul id="dots">   
								<li class="active"></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<a class="prev" onclick="plusSlides(-1)"><img src="images/Arrow_left.svg"></a>
							<a class="next" onclick="plusSlides(1)"><img src="images/Arrow_right.svg"></a>-->

						</div>
						<!----<img src="images/Arrow_success.svg" alt=arrow class="success-cases-arrow-mob">-->
						<div class="slick-slider-mob col-md-10 offset-md-1">
						<div id="success-cases-block">
										<div id="success-cases-duration">3 місяці</div>
										<div id="success-cases-arrow-mob">
											<img src="images/Arrow_success.svg" alt=arrow>
										</div>
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
											<div class="feedback-author">
												<div class="feedback_linkedin_name">Valentyna Tipaieva</div>
												<div class="feedback_linkedin_link_block">
													<a target="_blank" href="https://www.linkedin.com/in/valentyna-tipaieva-a2316b221/" class="feedback_linkedin_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
													</a>
												</div>
												</div>
												<div class="feedback-job">QA engineer</div>
												<div class="feedback-text">PNN Soft</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Chief Legal Officer</div>
												<div class="feedback-text">13 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
						<div id="success-cases-block">
										<div id="success-cases-duration">5 місяців</div>
										<div id="success-cases-arrow-mob">
											<img src="images/Arrow_success.svg" alt=arrow>
										</div>
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
											<div class="feedback-author">
												<div class="feedback_linkedin_name">Olesia Tychynina</div>
												<div class="feedback_linkedin_link_block">
													<a target="_blank" href="https://www.linkedin.com/in/olesia-tychynina-05470b1b7/" class="feedback_linkedin_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
													</a>
												</div>
											</div>
												<div class="feedback-job">Manual QA</div>
												<div class="feedback-text">Kevuru Games</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Спеціаліст - подолог</div>
												<div class="feedback-text">12 year of overall NON-IT Experience</div>
											</div>
										</div>
									
							</div>	
							
							<div id="success-cases-block">
										<div id="success-cases-duration">4 місяці</div>
										<div id="success-cases-arrow-mob">
											<img src="images/Arrow_success.svg" alt=arrow>
										</div>
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">
													<div class="feedback_linkedin_name">Dmytro Hranovskyi</div>
													<div class="feedback_linkedin_link_block">
														<a target="_blank" href="https://www.linkedin.com/in/%D0%B4%D0%BC%D0%B8%D1%82%D1%80%D0%BE-%D0%B3%D1%80%D0%B0%D0%BD%D0%BE%D0%B2%D1%81%D1%8C%D0%BA%D0%B8%D0%B9-7bba0a1b0/" class="feedback_linkedin_link">
													<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
														</a>
													</div>
												</div>
												<div class="feedback-job">QA engineer</div>
													<div class="feedback-text">	Playtech</div>
												</div>
												<div id="success-cases-info-block2">
													<div class="feedback-text">QA Manual</div>
													<div class="feedback-text">QAX Camp</div>
												</div>
												<div id="success-cases-info-block3">
													<div class="feedback-text">Гірничий інженер ( добуток корисних копалин)</div>
													<div class="feedback-text">9 year of overall NON-IT Experience</div>
												</div>
											</div>
										
							</div>
							
							<div id="success-cases-block">
										<div id="success-cases-duration">4 місяці</div>
										<div id="success-cases-arrow-mob">
											<img src="images/Arrow_success.svg" alt=arrow>
										</div>
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
											<div class="feedback-author">
												<div class="feedback_linkedin_name">Iurii Bugar</div>
												<div class="feedback_linkedin_link_block">
													<a target="_blank" href="https://www.linkedin.com/in/iurii-bugar-ba76b553/" class="feedback_linkedin_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
													</a>
												</div>
												</div>
												<div class="feedback-job">JQA Engineer</div>
												<div class="feedback-text">PJSC BANK VOSTOK</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Бухгалтер в області міжнародної логістики</div>
												<div class="feedback-text">8 year of overall NON-IT Experience</div>
											</div>
										</div>
									
								</div>

							<div id="success-cases-block">
										<div id="success-cases-duration">4 місяці</div>
										<div id="success-cases-arrow-mob">
											<img src="images/Arrow_success.svg" alt=arrow>
										</div>
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
											<div class="feedback-author">
												<div class="feedback_linkedin_name">Julia Rabovich</div>
												<div class="feedback_linkedin_link_block">
													<a target="_blank" href="https://www.linkedin.com/in/julia-rabovich-522b3820b/" class="feedback_linkedin_link">
												<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
													</a>
												</div>
												</div>
												<div class="feedback-job">QA engineer</div>
												<div class="feedback-text">Playtech</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Інженер-електронщик</div>
												<div class="feedback-text">9 year of overall NON-IT Experience</div>
											</div>
										</div>
									</div>
								
						
						<div class="success-cases-block">
								<div id="success-cases-duration">4 місяці</div>
								<div id="success-cases-arrow-mob">
										<img src="images/Arrow_success.svg" alt=arrow>
								</div>
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">
													<div class="feedback_linkedin_name">Andrey Hryhorchuk</div>
													<div class="feedback_linkedin_link_block">
														<a target="_blank" href="https://www.linkedin.com/in/andrey-hryhorchuk-940a58205/?originalSubdomain=ua" class="feedback_linkedin_link"> 
															<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
														</a>
													</div>
												</div>
												<div class="feedback-job">JQA Engineer</div>
												<div class="feedback-text">Zakaz.ua</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">L1 support engineer </div>
												<div class="feedback-text">5 year of overall NON-IT Experience</div>
										</div>
								</div>
							</div>

							<div class="success-cases-block">
							<div id="success-cases-duration">3 місяці</div>
							<div id="success-cases-arrow-mob">
										<img src="images/Arrow_success.svg" alt=arrow>
								</div>
									<div id="success-cases-info">
									<div id="success-cases-info-block1">
										<div class="feedback-author">
											<div class="feedback_linkedin_name">Alexander Bezeliuk</div>
											<div class="feedback_linkedin_link_block"><a target="_blank" href="https://www.linkedin.com/in/bezeliuk-alex/?originalSubdomain=uaa" class="feedback_linkedin_link">
											<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
											</div></a>
										</div>
										<div class="feedback-job">QA Еngineer (intern)</div>
										<div class="feedback-text">Playtech</div>
									</div>
									<div id="success-cases-info-block2">
										<div class="feedback-text">QA Manual</div>
										<div class="feedback-text">QAX Camp</div>
									</div>
									<div id="success-cases-info-block3">
										<div class="feedback-text">Заступник директору <br>магазину елекроніки </div>
										<div class="feedback-text">3 year of overall NON-IT Experience</div>
									</div>
                			</div>
						</div>

							<div class="success-cases-block">
								<div id="success-cases-duration">1,5 місяцi</div>
								<div id="success-cases-arrow-mob">
										<img src="images/Arrow_success.svg" alt=arrow>
								</div>
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">
													<div class="feedback_linkedin_name">Pavel Karnasenko</div>
													<div class="feedback_linkedin_link_block">
															<a target="_blank" href="https://www.linkedin.com/in/pavel-karnasenko-a66632207/?originalSubdomain=ua" class="feedback_linkedin_link">
															<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
														</a>
													</div>
												</div>
												<div class="feedback-job">QA Engineer</div>
												<div class="feedback-text">PixelTeh</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Інженер-конструктор</div>
												<div class="feedback-text">4 year of overall NON-IT Experience</div>
										</div>
								</div>
							</div>

							<div class="success-cases-block">
								<div id="success-cases-duration">5 місяців</div>
								<div id="success-cases-arrow-mob">
										<img src="images/Arrow_success.svg" alt=arrow>
								</div>
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">
													<div class="feedback_linkedin_name">Natali Sorokina</div>
													<div class="feedback_linkedin_link_block">
													<a target="_blank" href="https://www.linkedin.com/in/natalya-sorokina-a74a7b1a9/" class="feedback_linkedin_link">
														<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
													</a>
													</div>
												</div>
												<div class="feedback-job">Junior QA</div>
												<div class="feedback-text">FireKass</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Керуючий банківським<br> відділенням</div>
												<div class="feedback-text">22 year of overall NON-IT Experience</div>
										</div>
								</div>
							</div>

							<div class="success-cases-block" >
								<div id="success-cases-duration">3 місяці</div>
								<div id="success-cases-arrow-mob">
										<img src="images/Arrow_success.svg" alt=arrow>
								</div>
										<div id="success-cases-info">
											<div id="success-cases-info-block1">
												<div class="feedback-author">
												<div class="feedback_linkedin_name">Max Lapaichuk</div>
												<div class="feedback_linkedin_link_block"><a target="_blank" href="https://www.linkedin.com/in/lapaichukmax/?trk=public_profile_browsemap_profile-result-card_result-card_full-click&originalSubdomain=ua" class="feedback_linkedin_link">
														<!--<img src="images/LinkedIn.svg" class="feedback_linkedin_icon" alt="linkedin">-->
													</a>
												</div>
												</div>
												<div class="feedback-job">Manual QA</div>
												<div class="feedback-text">Leeloo</div>
											</div>
											<div id="success-cases-info-block2">
												<div class="feedback-text">QA Manual</div>
												<div class="feedback-text">QAX Camp</div>
											</div>
											<div id="success-cases-info-block3">
												<div class="feedback-text">Офіціант - адміністратор</div>
												<div class="feedback-text">4 year of overall NON-IT Experience</div>
											</div>
										</div>	
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
		$(document).ready(function(){
      $('.slick-slider-mob').slick({
		dots: true,
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true,
		mobileFirst:true,
		arrows: false
      });
    });
				
	</script>


	<script>
		$('.accordion__answer:first').show();
		$('.accordion__question:first').addClass('expanded');

		$('.accordion__question').on('click', function () {
			var content = $(this).next();

			$('.accordion__answer').not(content).slideUp(400);
			$('.accordion__question').not(this).removeClass('expanded');
			$(this).toggleClass('expanded');
			content.slideToggle(400);
		});
	</script>

	<!-- Feedback -->
	<script>
	$(document).ready(function(){
      $('.slick-slider-desktop').slick({
		dots: true,
		infinite: true,
		speed: 0,
		slidesToShow: 1,
		arrows: true,
		draggable: false,
		//autoplay: true,
		//autoplaySpeed:  3000
      });
    });
		/*var change_img_time=1000;
		var transition_speed=1000;
		var slideIndex = 1;
		showSlides(slideIndex);
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}
		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("feedbackSlides");
			if (n > slides.length) { slideIndex = 1 }
			if (n < 1) { slideIndex = slides.length }
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slides[slideIndex - 1].style.display = "block";
		}
		
				var listItems = $(".feedback-slideshow-container").children('div'),
					dotItems = $('#dots').children('li'),
					listLen = listItems.length,
					current,
					changeTimeout;

				function moveTo(newIndex) {

				var i = newIndex;

				if (newIndex == 'prev') {
					i = (current > 0) ? (current - 1) : (listLen - 1);
				}

				if (newIndex == 'next') {
					i = (current < listLen - 1) ? (current + 1) : 0;
				}

				dotItems.removeClass('active')
						.eq(i).addClass('active');

				/*listItems.fadeOut(transition_speed)
						.eq(i).fadeIn(transition_speed);*/

				/*current = i;*/

				//resets time interval if user clicks on slider dot; then begin automated slider
				/*clearTimeout(changeTimeout);
				changeTimeout = setTimeout(function() { moveTo('next'); }, change_img_time);
				}; 
*/
				
	</script>
	<script>
		// Event handlers
				/*$("#dots li").click(function () {
				var li = $('#dots li').index(this);
				moveTo(i);
				});

				$(".prev").click(function () {
				moveTo('prev');
				});

				$(".next").click(function () {
				moveTo('next');
				});

				//initialize slider on load
				moveTo('next');*/
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
	
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>