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
	<link rel="stylesheet" href="css/block.cources.css" type="text/css" />
	<link rel="stylesheet" href="css/block.feedback.css" type="text/css" />
	<link rel="stylesheet" href="css/footer.css" type="text/css" />
	<link rel="stylesheet" href="css/header.css" type="text/css" />
	<link rel="stylesheet" href="css/block.hero-image.css" type="text/css" />
	<link rel="stylesheet" href="css/block.why_we.css" type="text/css" />
	<link rel="stylesheet" href="css/block.write_to_us.css" type="text/css" />
	<link rel="stylesheet" href="css/block.offer_obtention.css" type="text/css" />
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
			<!-- ============================================ -->
			<div>
				<h1 id="hero-text">
					До оферу залишився один QAX
				</h1>
			</div>
			<div>
				<h4 id="hero-text-longread">
				Вдосконалення через практику на реальних проєктах та менторство 
				</h4>
			</div>
		</div>

		<div id="offer-obtention-main-block" >
			
			<!-- ============================================ -->
			<div id="offer-obtention-img-block">
				<img src="images/Walking_Around.svg" alt="hero-img">
			</div>
			<div id="offer-obtention-text-block">
				<div id="offer-obtention-text-qa" class="offer-obtention-text">
					QA Engineer
				</div>

				<div class>
					<img src="images/Arrow-big1.svg" id="offer-obtention-arrow1" alt="arrow1">
						
				</div>

				<div class="offer-obtention-text offer-obtention-text-duration" >
						4 місяці
				</div>

				<div >
					<img src="images/Arrow-big2.svg" id="offer-obtention-arrow2" alt="arrow2">
						
				</div>

				<div id="offer-obtention-text-exp" class="offer-obtention-text">
				Досвід НЕ в ІТ
				</div>
			</div>

			<div id="offer-obtention-text-block-mob">
						
						<div id="offer-obtention-img-mob">
							<img src="images/Arrow_13.svg" id="offer-obtention-arrow-mob" alt="arrow_mobile">	
						</div>

						<div id="offer-obtention-text-mob">
							<div class="offer-obtention-text">
							Досвід <br> НЕ в ІТ 
							</div>

							<div  class="offer-obtention-text offer-obtention-text-duration">
								4<br> місяці
							</div>

							<div class="offer-obtention-text">
								QA <br>Engineer
							</div>
						</div>
			</div>
		</div>

		
			
			
		


		<!-- Page Title
		============================================= -->

		<!-- Content
		============================================= -->
		<section id="content">
		<h3 id="content-title">Title</h3>
			<div class="content-wrap">
				<div class="container clearfix" >

					<section id="cources">
						<!-- ========================================= -->
						<div id="cources-block">

							<div class="text-center">
								<h2>
									Обери професію майбутнього
								</h2>
							</div>

							<div id="cources-cards-block" class="row col-mb-50 mb-1">
								<div class="col-md-4 cources-cards-flex">
									<div class="cources-qa-block">
										<a class="courses-block-a" href="cources.php?cource=qa&name=qa_practice" id="card-qa">
											<div>
												<h3 class="cources-qa-block-title">
														QA Engineer
												</h3>
											</div>
											<div class="line"></div>

											<div >
												<h4 class="cources-qa-text">
													QA займається поліпшенням процесу розробки ПО, 
													запобіганням появи недоліків і виявленням помилок в кінцевому продукті.
												</h4>
											</div>

											<!--<div class="cources-cards-buttons-block">
											<h5 class="cources-cards-buttons">
												1 Курс
											</h5>
											</div>-->
										</a>
									</div>
								</div>

								<div class="col-md-4 cources-cards-flex">
									<div class="cources-qa-block">
										<a class="courses-block-a" href="cources.php?cource=ba&name=ba_practice" id="card-ba">
											<div>
												<h3 class="cources-qa-block-title">
													Business Analyst
												</h3>
											</div>
											<div class="line"></div>

											<div>
												<h4 class="cources-qa-text">
													BA досліджує запит замовника,
													 шукає найбільш оптимальне рішення і оформлює його у вигляді вимог,
													 яких дотримуватимуться інші учасники проєкту.
												</h4>
											</div>


											<!--<div class="cources-cards-buttons-block">
												<h5 class="cources-cards-buttons">
													1 Курс
												</h5>
											</div>-->
										</a>
									</div>
								</div>

								<div class="col-md-4 cources-cards-flex">
									<div class="cources-qa-block">
										<a class="courses-block-a" href="cources.php?cource=pm&name=pm_practice">
											<div>
												<h3 class="cources-qa-block-title">
													Project Manager
												</h3>
											</div>
											<div class="line"></div>

											<div>
												<h4 class="cources-qa-text">
													PM керує проєктом. Його основне завдання – 
													побудувати процес роботи над проєктом з наявними ресурсами в 
													рамках визначених термінів і з обумовленою якістю. 
												</h4>
											</div>


											<!--<div class="cources-cards-buttons-block">
											<h5 class="cources-cards-buttons">
													1 Курс
											</h5>
											</div>--->
										</a>
									</div>
								</div>


							</div>
						</div>
					</section>

					<!-- ================================== -->

					<section id=why_we>
						<div id="why_we-box">
							<div class="text-center">
								<h2>
									Чому круто з нами?
								</h2>
							</div>

							<div id="why_we-card-box">
								<div id="why-we-block" class="row col-mb-50 mb-1">
									<div class="col-md-4 wy_we_card">
										
										<h3 class="why_we-subtitle">1. На хвилі з усім світом</h3>
										<h4 class="why_we-text">
										Використовуємо як нові, так і перевірені часом інструменти та підходи
										</h4>
									</div>
									<div class="col-md-4 wy_we_card">
										
										<h3 class="why_we-subtitle">2. Тут і зараз</h3>
										<h4 class="why_we-text">
										Давно хотів працювати по-іншому? Застосовуй і спостерігай результат, одразу!
										</h4>
									</div>
									<div class="col-md-4 wy_we_card">
										
										<h3 class="why_we-subtitle">3. Менторство</h3>
										<h4 class="why_we-text">
											Наші ментори допомагатимуть тобі зростати швидше 
										</h4>
									</div>
									<div class="col-md-4 wy_we_card">
										
										<h3 class="why_we-subtitle">4. Командний дух</h3>
										<h4 class="why_we-text">
											Великі справи робляться командами. Приєднуйся до однієї з наших!
										</h4>
									</div>
									<div class="col-md-4 wy_we_card">
										
										<h3 class="why_we-subtitle">5. Орієнтованість на результат </h3>
										<h4 class="why_we-text">
											Всі наші зустрічі спрямовані на досягнення певного результату
										</h4>
									</div>
									<div class="col-md-4 wy_we_card">
										
										<h3 class="why_we-subtitle">6. Не словом, а ділом</h3>
										<h4 class="why_we-text">
											Наша найкраща пропозиція досвід, який працевлаштовує
										</h4>
									</div>
								</div>
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
												<div class="feedback-text">Playtech</div>
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

							<div class="feedbackSlides">
							<div id="success-cases-block">
										<div id="success-cases-duration">5 місяці</div>
										
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
												<div class="feedback-text">Playtech</div>
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

							<div id="success-cases-block">
										<div id="success-cases-duration">5 місяці</div>
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