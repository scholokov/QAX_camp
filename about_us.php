<!DOCTYPE html>
<html lang="uk">

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
	<link rel="stylesheet" href="css/block.cources_detailes.css" type="text/css" />
	<link rel="stylesheet" href="css/block.cources_detailes.accordion.css" type="text/css" />
	<link rel="stylesheet" href="css/block.about_us.css" type="text/css" />


	<!-- Document Title
	============================================= -->
	<title>QAX Camp - About Us</title>
	<link rel="icon" type="image/png" href="favicon.png">

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
		<header class="header">
			<div class="header-menu" id="header-block">
				<a href="index.php"><img src="images/Logo_Small.svg" alt="Logo" id="logo"></a>

				<a href="cources.php?cource=qa&name=qa_practice" class="header-menu header-menu-links">курси</a>

				<a href="about_us.php"  class="header-menu header-menu-links">про нас</a>

				<a href="our_trainers.php"  class="header-menu header-menu-links">наші тренери</a>


				<!--
				<div><a href="#" class="language">UA|RU</a></div>
				-->

				<a href="#write_to_us">
					<!-- <a href="https://t.me/RecrutMan"> -->
					<div id="sendButtonText">Записатися</div>
				</a>


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

					<a href="index.php#write_to_us">
					<!-- <a href="https://t.me/RecrutMan"> -->
					<div id="sendButtonText-mobile" onclick="goToForm()">Записатися</div></a>
		    	</div>
			</div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->



		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<h3>Що таке Camp ?</h3>

					<div >Camp - це простір для розвитку, де учасники навчаються кожен своїй ролі. Ким ти хотів стати: 
						BA, PM, QA.. ? 
						Обирай професію, ставай частиною продуктової команди і вперед за результатом! :)
					</div>
					<div></div>
					<div>Томас Едісон зробив більш ніж 1000 невдалих спроб, перед тим як винайти лампочку розжарювання</div>
					<div></div>
					<div>Camp - це тренувальна платформа, де ти можеш відточити навички до досконалості, 
						при цьому, не боячись робити помилок! 
						Camp створений саме для цього, ми заохочуємо робити їх чимбільше! :)
					</div>
					<div>Camp - це реальний досвід роботи, про який ти сміливо можеш розповідати під час інтерв'ю. 
						Після Camp, ти вже не “новачок”, 
						а фахівець з досвідом роботи - це крутіше, чи не так? :)
					</div>

					<h3>Як це працює?</h3>

					<div>Ми розробляємо проєкти! </div>
					<div>У нас є декілька проєктів, навколо яких тяжіє решта активностей. 
						Над проєктами працюють продуктові команди у складі 
						PO, BA, PM, Dev, UI-UX, QA.
					</div>
					<div></div>
					<div>Наша ДНК  -  це практика</div>
					<div></div>
					<div>Кожен відповідає за свою ділянку роботи. Тут немає “вигаданих” завдань, домашок… 
						а є лише реальні задачі на проєкті - це твоя робота, від якої залежать інші 
						учасники команди та проєкт в цілому! Виконуючи їх, 
						помиляючись та виправляючи свої помилки, ми і навчаємось - as simple as that   
					</div>
					<div>А якщо наявних знань не вистачає для виконання поточної задачі, то ми допомагаємо, пояснюємо. 
					</div>
					<div>А ще, кожен учасник - це командний гравець, який може вносити свої ідеї у продукт і 
					вчитися їх захищати (так-так, твій майбутній роботодавець це оцінить  
					</div>

					<h3>Як це працює?</h3>

					<div>Camp виник як рішення на одвічне питання: 
						“як потрапити на роботу, якщо на неї беруть тільки людей з досвідом?”.
					</div>
					<div>Ще працюючи QA тренером в різних школах, засновник Camp, Денис Щолоков, вже тоді відчував, 
						що всі ці курси підготовки це завжди якась теорія, яким не вистачало чогось важливого…
					</div>
					<div>З іншої сторони, Денис постійно отримував скарги від студентів, що навіть по закінченню курсів їм складно знайти працевлаштування, 
						бо “в них немає досвіду”... Так і народився QAX Camp! 
					</div>
					<div>У Camp неважливий твій початок (хтось вже з базою, інший - відкриває все з нуля), 
						проте кінцева ціль у всіх одна - працевлаштування. Ми допомагаємо своїм учасникам 
						на всіх етапах цього шляху, як з опановування нової спеціальності, 
						так і з пошуком роботи працевлаштуванням. Тому у нас є лише два KPI: 
					</div>
					<div>1. Кількість отриманих оферів нашими учасниками
						2. Середній час отримання оферу
					</div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>


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
		function footerlink() {
			let telegram_img = $("#Telegram-img");
			let telegram_link = $("#footer-telegram");
			telegram_img.mouseover(function () { telegram_link.attr({ "color": "#F66F5D" }); });
			telegram_img.mouseout(function () { telegram_link.attr({ "color": "#ffffff" }); });
			telegram_link.mouseover(function () { telegram_img.attr({ "src": "images/Telegram-hover.svg" }); });
			telegram_link.mouseout(function () { telegram_img.attr({ "src": "images/Telegram.svg" }) });
		};

		footerlink();
	</script>
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
		$("#content").css({ "display": "none" });
		
    } else {
        y.className = "header-menu";
		$("body").css({ "overflow": "visible" });
		$("#footer-block").css({ "display": "flex" });
		$("#content").css({ "display": "block" });

    }
}
function goToForm(){
		$(".burger-icon").removeClass("change");
		$("#header-block").removeClass("responsive");
	    $("body").css({ "overflow": "visible" });
		$("#footer-block").css({ "display": "flex" });
		$("#content").css({ "display": "block" });

}

	</script>

	<!-- Footer Scripts
	============================================= -->
	<!-- for phone mask -->
	<script src="https://unpkg.com/imask"></script>

	<script src="js/functions.js"></script>
	<script src="js/form.js"></script>

</body>

</html>