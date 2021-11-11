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
	<link rel="stylesheet" href="css/intlTelInput.css">
	<link rel="stylesheet" href="css/block.privacy_policy.css" type="text/css" />

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
		<header>
			<div class="header-menu" id="header-block">
				<a href="index.php"><img src="images/Logo_Small.svg" alt="Logo" id="logo"></a>

				<a href="cources.php?cource=qa&name=qa_practice" class="header-menu header-menu-links">курси</a>

				<a href="about_us.php"  class="header-menu header-menu-links ">про нас</a>

				<a href="our_trainers.php"  class="header-menu header-menu-links">наші тренери</a>

				
				<!--
				<div><a href="#" class="language">UA|RU</a></div>
				-->

					
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

					
		    	</div>
			</div>

				

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->



		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap" id="privacy_policy">
				<div class="privacy_policy_main_block container clearfix">
					<div id="privacy_policy_content">
					<h3 class="privacy_policy_title_text">Політика конфіденційності нашого сайту <a class="privacy_qax_link" href="https://qax-camp.com.ua/">QAX Camp</a>  знаходиться у цілковитій сумісності 
                    з Загальним регламентом про захист даних ЄС (GDPR) та згідно зі статтею 8 Закону 
                    України «Про захист персональних даних». <br>
                    Національний інститут стандартів і технологій (NIST) визначає особисту інформацію, 
                    як:</h3>
                    <p><i>“Будь-яка інформація про особу, яку збирає служба, включаючи (1) будь-яку інформацію,
                    а може використовуватися для розпізнання або відстеження особи, наприклад, ім’я, 
                    номер соціального страхування, дата і місце народження, дівоче прізвище матері 
                    або біометричні записи; і (2) будь-яка інша інформація, яка пов’язана або яку 
                    можна пов’язати з особою, наприклад медична, освітня, фінансова інформація 
                    та інформація про зайнятість.</i></p>

                    <p>Публічні дані визначаються наступним чином:</p>

                    <p><i>“Інформація, яка може відповідати певній особі, обліковому запису або профілю, але 
                    її недостатньо для ідентифікації особи, контакту або пошуку особи, до якої ця інформація
                     відноситься”.</i></p>

                     <h3>I. Вступ</h3>
					 <p>Конфіденційність користувачів нашого веб-сайту має велике значення для нас, 
                    і ми докладаємо всіх зусиль для забезпечення її захисту. Дані правила пояснюють, 
                    як ми використовуємо вашу персональну інформацію.</p>

                    <p>Заповнюючи форму та натискаючи пташку “Погоджуюсь”, 
                    відповідно до положень даних Правил, ви надаєте нам дозвіл 
                    на використання даних виключно для формування запису та зв'язку з вами.</p>

                    <h3>II. Збір персональних даних</h3>
                    <p>Збору, зберіганню та використанню підлягають наступні типи персональних даних:</p>
                        <ol class="privacy_list">
                            <li>Інформація, така, як ваше ім’я, яку ви вказали під час оформлення;</li>

                            <li>Інформація, яка містить ваш мобільний телефон, яку ви вказали під час оформлення;</li>

                            <li>Інформація про адресу вашої електронної пошти, яку ви вказали під час оформлення.</li>

                        </ol>
                    <h3>III. Використання вашої персональної інформації</h3>

                    <p>Персональна інформація, яку ви передані нам через наш веб-сайт, 
                    буде використовуватися задля цілей, зазначених в цих правилах.</p>

                    <ol class="privacy_list">
                            <li>адміністрування нашого веб-сайту та бізнесу;</li>

							<li>надання вам послуг, замовлених через наш веб-сайт;</li>

							<li>надсилання вам повідомлень, рахунків та нагадувань про сплату, </li>
                    та отримання платежів від вас;

					<li>надсилання вам електронною поштою повідомлень, які ви спеціально запросили;</li>

					<li>в інших цілях.</li>
					</ol>

					<p>Без вашої чітко вираженої згоди ми не будемо передавати вашу 
                    персональну інформацію жодній сторонній компанії для прямого 
                    маркетингового використання цією, або будь-якою іншою сторонньою компанією. </p>

                    <h3>IV. Розкриття персональної інформації</h3>

                    <p>Ми лишаємо за собою право розкрити вашу персональну інформацію 
                    для будь-якого з наших працівників, керівників, страхувальників, 
                    професійних радників, агентів, постачальників або субпідрядників,
                     в об’ємі та цілях, визначених в цих правилах.</p>

					 <p>Ми лишаємо за собою право розкрити вашу персональну інформацію:</p>

					 <ol class="privacy_list">
                            <li>в тих випадках, в яких цього від нас вимагає закон;</li>

							<li>у зв’язку з будь-яким поточними або майбутніми судовими процесами;</li>

							<li>з метою встановлення, реалізації або захисту наших законних прав 
                    (включаючи надання інформації іншим сторонам задля запобігання шахрайству
                     або зниження кредитних ризиків);</li>

					 <li>будь-якій особі, яка, як ми обґрунтовано вважаємо, може подати
                     запит до суду або іншого уповноваженого органу про розкриття цих персональних 
                     даних і, на нашу обґрунтовану думку, цей суд або уповноважений орган видасть 
                     розпорядження на розкриття цих персональних даних.</li>
					</ol>

					<p>Ми не будемо розкривати вашу персональну інформацію третім особам, за виключенням 
                    випадків, зазначених в цих правилах.</p>

                    <h3>V. Збереження персональної інформації</h3>

                    <ol class="privacy_list">
                            <li>Розділ V встановлює правила та процедури компанії щодо збереження персональної інформації. 
					Дані правила та процедури призначені для забезпечення виконання нами наших юридичних зобов’язань
					 щодо збереження та видалення персональної інформації.</li>

					 		<li>Персональна інформація, яку ми обробляємо з певною метою або в певних цілях не повинна зберігатися довше, 
					ніж потрібно для досягнення цієї мети або цих цілей.</li>

							<li>Без обмежень положень, зазначених в пункті V-2, ми зазвичай видаляємо
					персональну інформацію, що підпадає у визначені нижче категорії, в дні та час, 
					що визначені нижче:

									<ol class="policy_a_list" type="a">
											<li>персональна інформація буде видалена одразу після 
												закінчення курсу;</li>
									</ol>
							</li>

							<li> Незважаючи на інші положення Розділу V, ми будемо зберігати 
					документи (включаючи електронні   документи), які містять персональну інформацію:

									<ol class="policy_a_list" type="a">
											<li>в тих випадках, в яких цього від нас вимагає закон;</li>

											<li>якщо ми вважатимемо, що ці документи можуть мати відношення 
										до будь-якого поточного або   майбутнього судового розгляду; та</li>

											<li>з метою встановлення, реалізації або захисту наших законних 
											прав (включаючи надання інформації іншим сторонам задля запобігання шахрайству 
											або зниження кредитних ризиків).</li>
									</ol>
							</li>
					</ol>

                    <h3>VI. Захист вашої персональної інформації</h3>

                    
						<ol class="privacy_list">
								<li>Ми будемо вживати достатні технічні та організаційні заходи для попередження 
						втрати, протиправного використання чи підробки вашої персональної інформації.</li>

								<li>Ви підтверджуєте своє ознайомлення з тим фактом, що передача інформації через 
								Інтернет є по суті є незахищеною, і ми не можемо гарантувати захист даних, 
								надісланих через всесвітню мережу.</li>
						</ol>

                    <h3>VII. Зміни та поправки</h3>

                    <p>Ми лишаємо за собою право періодично вносити зміни та поправки в ці правила, 
                    та публікувати їх нову редакцію на нашому сайті. Ви повинні періодично перевіряти 
                    цю веб-сторінку, щоб пересвідчитись, що розумієте зміст змін, внесених до цих правил. 
                    Ми також можемо проінформувати вас про внесення змін до цих правил шляхом надсилання
                     електронної пошти або через систему передачі приватних повідомлень нашого сайту.</p>

                     <h3>VIII. Ваші права</h3>

                     <p>Ви маєте право надати нам вказівку не обробляти вашу персональну інформацію в 
                    маркетингових цілях.</p>

                    <h3>IX. Файли-Cookies</h3>

					<p>Наш веб-сайт використовує файли-cookies. Cookie — це файл, що містить ідентифікатор 
                    (стрічку, яка складається з літер та цифр), і який надсилається веб-сервером 
                    до веб-браузеру, та зберігається браузером. В подальшому, ідентифікатор надсилається 
                    назад на сервер кожного разу, коли браузер запитує веб-сторінку з серверу. 
                    Файли-cookies можуть бути або «постійними» або «сеансові»: постійні будуть 
                    зберігатися браузером та будуть придатними до завершення терміну дії, якщо 
                    тільки не будуть видалені користувачем завчасно; «сеансові» навпаки – будуть 
                    видалятися після завершення сеансу роботи з сайтом або після закриття браузеру. 
                    Файли-cookies зазвичай не містять жодної інформації, яка ідентифікує особу користувача. 
                    Проте, ваша персональна інформація, яку ми маємо, може бути пов’язана з інформацією, 
                    що зберігається та отримана від файлів-cookies. На нашому веб-сайті 
					<a class="privacy_qax_link" href="https://qax-camp.com.ua/">QAX Camp</a> ми використовуємо лише сеансові файли-cookies / лише постійні файли-cookies / 
                    як постійні, так і сеансові файли-cookies. </p>
					</div>
					
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

	<script src="js/intlTelInput.min.js"></script>
	<script src="js/intlTelInput-jquery.min.js"></script>
	<script src="js/functions.js"></script>

</body>

</html>