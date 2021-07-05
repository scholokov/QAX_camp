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
					QA Enginner
				</div>

				<div class>
					<img src="images/Arrow-big1.svg" id="offer-obtention-arrow1">
						
				</div>

				<div id="offer-obtention-text-duration" class="offer-obtention-text">
						4 місяці
				</div>

				<div >
					<img src="images/Arrow-big2.svg" id="offer-obtention-arrow2">
						
				</div>

				<div id="offer-obtention-text-exp" class="offer-obtention-text">
					NON-IT Experience
				</div>
			</div>

			<div id="offer-obtention-text-block-mob">
						
						<div id="offer-obtention-img-mob">
							<img src="images/Arrow 13.svg" id="offer-obtention-arrow-mob">	
						</div>

						<div id="offer-obtention-text-mob">
							<div class="offer-obtention-text">
								NON-IT <br> Experience
							</div>

							<div id="offer-obtention-text-duration" class="offer-obtention-text">
								4<br> місяці
							</div>

							<div class="offer-obtention-text">
								QA <br>Enginner
							</div>
						</div>
			</div>
		</div>

		
			
			
		


		<!-- Page Title
		============================================= -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

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

											<div class="cources-cards-buttons-block">
											<h5 class="cources-cards-buttons">
												3 Курси
											</h5>
											</div>
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


											<div class="cources-cards-buttons-block">
												<h5 class="cources-cards-buttons">
													1 Курс
												</h5>
											</div>
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


											<div class="cources-cards-buttons-block">
											<h5 class="cources-cards-buttons">
													1 Курс
											</h5>
											</div>
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
									<div class="col-md-4">
										
										<h3 class="text-center why_we-subtitle">1. На хвилі з усім світом</h3>
										<h4 class="text-center why_we-text">
										Використовуємо як нові, так і перевірені часом інструменти та підходи
										</h4>
									</div>
									<div class="col-md-4">
										
										<h3 class="text-center why_we-subtitle">2. Тут і зараз</h3>
										<h4 class="text-center why_we-text">
										Давно хотів працювати по-іншому? Застосовуй і спостерігай результат, одразу!
										</h4>
									</div>
									<div class="col-md-4">
										
										<h3 class="text-center why_we-subtitle">3. Менторство</h3>
										<h4 class="text-center why_we-text">
											Наші ментори допомагатимуть тобі зростати швидше 
										</h4>
									</div>
									<div class="col-md-4">
										
										<h3 class="text-center why_we-subtitle">4. Командний дух</h3>
										<h4 class="text-center why_we-text">
											Великі справи робляться командами. Приєднуйся до однієї з наших!
										</h4>
									</div>
									<div class="col-md-4">
										
										<h3 class="text-center why_we-subtitle">5. Орієнтованість на результат </h3>
										<h4 class="text-center why_we-text">
											Всі наші зустрічі спрямовані на досягнення певного результату
										</h4>
									</div>
									<div class="col-md-4">
										
										<h3 class="text-center why_we-subtitle">6. Не словом, а ділом</h3>
										<h4 class="text-center why_we-text">
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
							<h2>Відгуки наших учнів</h2>
						</div>
						<div class="feedback-slideshow-container col-md-10 offset-md-1">

							<div class="feedbackSlides">
								<h3 class="feedback-author">Elena Volokhonskaya</h3>
								<h5 class="feedback-course">Курс Quality Assurance Engineer Индивидуальные Занятия</h5>
								<h4 class="feedback-text">Спасибо тебе огромное за лекции, мне было очень полезно и
									позновательно. Ты заставил поссмотреть на вещи под другим углом, буду учится
									критическому и аналитическому подходу во всем</h4>
							</div>

							<div class="feedbackSlides">
								<h3 class="feedback-author">Andrey Hryhorchuk</h3>
								<h5 class="feedback-course">Курс Quality Assurance Engineer Practice</h5>
								<h4 class="feedback-text">Привет! меня зовут Андрей, хочу оставить свой отзыв о компании
									QAX. В данном компании мне понравилось то что не "бросают на произвол судьбы", а
									объясняют "что, как, почему, когда и где". Данная компания может служить подробным
									мануалом как должны быть налажены рабочие процессы :) Коллектив приятный, ощущается
									эффект уюта и домашнего комфорта во время митингов :)</h4>
							</div>

							<div class="feedbackSlides">
								<h3 class="feedback-author">Dmytro Tytarenko</h3>
								<h5 class="feedback-course">Курс Quality Assurance Engineer Practice</h5>
								<h4 class="feedback-text">QAX camp! Откровенно говоря, это то что нужно всем начинающим(
									и не только начинающим) QA!<br>

									-Курсы курсами, но реальный проект-это действительно,то что нужно выпускникам после
									теории и «практики».<br>

									-Работа согласно всем процессам тестирования. Это то чего не хватает в багаже
									знаний. Теорию выучили, а
									процессов никто не знает, здесь же все присутствует.<br>

									-Работа в команде! Даже если кто-то где-то в каком-то моменте не отстреливает ни
									грамма, команда и
									кураторы/наставники/менторы всегда объяснят доходчиво и понятно.<br>

									Моя ситуация была такова: Я учился с ментором, теорию выучил, с документацией
									попрактиковался, остаётся вопрос
									«Как все это происходит в реальном проекте?». Я попал в QAX camp и что вы думаете? В
									реальном проекте с
									поддержкой наставников и командой въехать во все тонкости процесса было намного
									легче нежели сидеть смотреть
									видосы на ютубе или читать сотни форумов!<br>

									В общем, всего не расписать, нужно записываться, приходить и получать необходимый
									опыт как теоретический так и
									практический!
									Рекомендую QAX camp!</h4>
							</div>

							<div class="feedbackSlides">
								<h3 class="feedback-author">Yulia Shelton</h3>
								<h5 class="feedback-course">Курс Quality Assurance Engineer Practice</h5>
								<h4 class="feedback-text">Очень ценными были практические знания в работе с
									инструментами Test Management for Jira, анализе требований к проекту, коммуникации
									со всеми членами команды. Отдельная благодарность Денису за очень детальный фидбек
									по всем заданиям! Так держать!</h4>
							</div>

							<div class="feedbackSlides">
								<h3 class="feedback-author">Юрий Звир</h3>
								<h5 class="feedback-course">Курс Quality Assurance Engineer Practice</h5>
								<h4 class="feedback-text">Что мне нравиться в QAX.
									За время работы доводилось иметь дело как с аутсорсными проектами, так и со своим
									продуктом. Кроме собственно работы моделируются различные рабочие ситуации. Причём
									это происходит по типу: "Как правильно. Как должно быть в идеале. Как это
									происходило на моем опыте. Как, зачастую, бывает на практике и что с этим делать".

									Регулярные продуктовые встречи, тестовые собеседования как с рекрутером, так и с
									тимлидом, где вы получаете фитбек и разборы полетов от спецалистов с разным
									беграундом, подходом и точкой зрения. Вы можете задавать любые вопросы по процессам,
									технологиям, инструментам взаимодействию в командах и т. д. - и получаете на них
									качественные развернутые ответы с примерами на реальной практике. Если у вас пробелы
									по какой-то конкретной теме и это будет полезно для большинства, то вполне обычная
									практика, что вам еще и прочитают лекцию на эту тему, дадут ссылки на полезные
									ресурсы ну и, будте готовы, затем допросят с пристрастием).
									Кроме групповых встреч есть индивидуальные созвоны, где идет проработка по вашему
									кейсу и где вы можете обсудить вопросы, которые не хотели озвучить в группе.

									Также - сбор фитбека от студентов. Учитывается критика и пожелания, вплоть до того,
									что если всем хотелось бы поработать с какими-то инструментами или технологиями то
									ребята стараются по возможности включать эти вещи в процесс.

									Ну и пару слов о доброжелательных людях, которые стараются сделать практику
									максимально продуктивной.
									У Дениса 15+ лет опыта работы в сфере QA, огромные знания и опыт по технологиям,
									процессам, формированию и управлению командами и т. д., тысячи собеседований с
									соискателями.
									Андрей, имеющий обширные знания в различных сферах IT, большой опыт работы по поиску
									и найму специалистов разных направлений, который сам ходит на собеседования, чтобы
									держать руку на пульсе и лучше понимать, что и как чувствует человек проходящий
									собеседование.
									Ребята, большое спасибо за вашу работу.</h4>
							</div>

							<div class="feedbackSlides">
								<h3 class="feedback-author">Max Lapaichuk</h3>
								<h5 class="feedback-course">Курс Quality Assurance Engineer Practice</h5>
								<h4 class="feedback-text">Хочу подякувати компанії QAX, вони розробили шикарний курс
									"Отримання досвіду на реальних проектах + менторство" на якому ти береш участь у
									розробці проекту і впливаєш на кінцевий результат вносячи свої пропозиції щодо
									покращення. QAX - це команда професіоналів з багатолітнім досвідом які готові
									допомогти тобі 24/7. Особливо хочу подякувати Денису за його підтримку і роз'яснення
									всіх тонкостей роботи QA, а також Андрію за мотивацію і допомогу з пошуком роботи.
									Якщо ви хочете здобути досвід для працевлаштування, я РЕКОМЕНДУЮ записатися на курс.
								</h4>
							</div>

							<a class="prev" onclick="plusSlides(-1)">❮</a>
							<a class="next" onclick="plusSlides(1)">❯</a>

						</div>

					</section>

					<?php include 'components/form.html'?>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php include 'components/footer.html'?>
		<!-- <div w3-include-html="components\footer.html"></div> -->

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
	</script>

	<script>
		/*function menuBurger() {
    var x = document.getElementById("header-block");
    if (x.className === "header-menu") {
        x.className += " responsive";
    } else {
        x.className = "header-menu";
	
    }
}*/
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
	

</body>

</html>