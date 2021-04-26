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
				<a href="index.php"><img src="images/logo.svg" alt="Logo" id="logo"></a>

				<a href="cources.php?cource=qa&name=qa_practice" id="menuCources" class="header-menu">курси</a>

				<a href="about_us.php" id="menuCources" class="header-menu">про нас</a>

				<a href="our_trainers.php" id="menuCources" class="header-menu">наші тренери</a>


				<!--
				<div><a href="#" class="language">UA|RU</a></div>
				-->

				<a href="#write_to_us">
					<!-- <a href="https://t.me/RecrutMan"> -->
					<div id="sendButtonText">Записатися</div>
				</a>


				<div id="letter-icon"><a href="#write_to_us"><img src="images/letter-icon.svg"></a></div>

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

					<div id="about-us-border">
						<div id="about-us-text">
							Привіт.<br>
							<br>

							Менє звати Денис Щолоков. У сфері розробки вже 18-й рік.
							Працював у багатьох компаніях, багато чого бачив: Аутсорс, Аутстаф, Продукт.
							Це для мене не пустий звук. На собі відчув різниці у розробці ПЗ.
							Також довгий час займаюся підбором QA, тобто э розуміння “якими повинні бути QA”.
							Довго займався тренуванням QA на базі компаній, де працював. І якось (а якщо бути точним то
							у 2017 році) вирішив,
							що мені цікаво попробувати себе у якості тренера. І я пішов у MainAcademy, а потім у
							QALight.
							Це був дуже цікавий досвід. Але все це була теорія. А мені завтжди чогось не хватало.
							Особливо відповіді на риторичне питання
							“як потрапити на роботу, якщо на неї беруть тільки людей с досвідом”. І я почав
							єкспериментувати ще будячи там тренером:
							став на своєму курсі теорію частково заміщувати на практику.
							І побачив, що людям це подабається. Вигадував практичні проекти, або заходили “реальні”
							проекти. Але це все було разово:
							тобто на тестування потрапляв продукт, його перевіряли, відписували баги і все, ніякого
							зворотнього зв'язку по фіксам.
							Перепробував декілька варіантів - але все було “не то”. Також завжди були рамки, які тобі
							ставили власники курсів. Тому, в
							якийсь момент, прийшла думка, а як щодо ідеї відкрити свої курси, де можна буде вільно
							експериментувати, та давати людям те,
							що вони більше всього хочуть. Так і народився QAX Camp…<br>
							<br>

							Тут також почали зі свого проекту, але теж він був статичним, тобто він не розвивався.
							Так, існували версіі продукти, але це не був “живий” продукт… І тоді з'явилася нова ідея - а
							як щодо того щоб не робити
							“як у реальному проекті”, а зробити “реальний проект”.
							І тут почалася новітня історія QAX Camp:<br>
							<br>

							У нас э декілька проектів, навколо яких все і крутиться. І в першу чергу ми розробляємо
							проєкти!
							Над ними працюють продуктові команди, у составі PO, PM, Dev, Ui-UX, QA. Вони всі працюють
							разом,
							і кожен може вносити свої ідеі у продукт і вчитися їх відстоювати. Кожен відповідає за свою
							ділянку роботи,
							і вчиться робити свою роботу максимально ефективно.
							І в цьому йому допомагає ми всі. Тобто в нас немає “вигаданих” задач, домашок і т.д. Тільки
							реальні задачі на проекті.
							І виконуючи їх, помиляючись, та виправляючи свої помилки ми і навчаємося.
							А якщо поточних знань не вистачає для виконання поточної задачі - ми допомагаємо, пояснюємо.
						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<?php include 'components/form.html'?>

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