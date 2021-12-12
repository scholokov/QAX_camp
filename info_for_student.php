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
	<link rel="stylesheet" href="css/header.css" type="text/css" />
	<link rel="stylesheet" href="css/block.privacy_policy.css" type="text/css" />
    <link rel="stylesheet" href="css/info_for_student.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>QAX Camp - Privacy Policy</title>
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
			</div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->



		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap" id="info_for_student">
				<div class="info_for_student_main_block container clearfix">
					<div id="info_for_student_content">

					<img id="info_for_student_main_img" src="images/stud_info_main.svg">

					 <p ><b>Вітаємо тебе у нашій крутій команді QAX! </b></p>

                     <p>Аби зробити твій старт максимально комфортним ми підготували докладну інструкцію! </p>

                   
                    <div id="info_for_student_steps_block">
                        <ol>
                            <li>Для спілкування з командою, а також, щоб 
                                не пропустити важливі повідомлення, приєднуйся до нашого Telegram-чату</li>
                            <li>Відправ свій Gmail в особисті повідомлення Denis Scholokov.
                                (Важко знайти? Тоді клікай Denis Scholokov)</li>
                            <li>Перевір свою Gmail – пошту, знайди лист з інвайтом на календар QAX та клікай додати Google Календар
                                <img class="info_for_student_steps_img" src="images/info1.png"></li>
                            <li>В своєму Google-акаунті відкрий меню сервісів Google
                                <img class="info_for_student_steps_img" src="images/info2.svg"> </li>
                            <li>Перейди у додаток Google Календар</li>
                            <li>Обов’язково перевір, чи є відмітка навпроти QAX Camp Schedule. Вітаємо! 
                                Тепер Календар синхронізовано!
                                <img class="info_for_student_steps_img" src="images/info3.svg"></li>
                            <li>Щоб спілкування було комфортним, не забудь перевірити свою камеру та мікрофон перед підключенням. 
                                Зручно це зробити тут: Webcam test - Check camera online   </li>
                            <li>У відповідний час клікай на зустріч у Календарі та вибирай “Приєднатися” через Google Meet. 
                                Кожна зустріч має свій окремий лінк! <br>
                                Після закінчення зустрічі повернись в Google Календар та обирай наступну зустріч. 
                                (Докладніше про Google Meet можеш почитати тут: Google Meet Довідка )
                                <img class="info_for_student_steps_img" src="images/info4.svg"></li>
                            <li>Бажано відвідати всі зустрічі, але якщо не можеш бути присутнім, не хвилюйся, після тестового періоду у   
                                тебе буде доступ до всіх архівів зустрічей.</li>
                                
                        </ol>
                    </div>
                    <p>Сподіваємось, в тебе все вийшло! До зустрічі! Якщо ні, звернись до Denis Scholokov</p>
					</div>
                    
					
				</div>
			
			</div>
		</section><!-- #content end -->

		

		<!-- Footer
		============================================= -->
	

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

			

	<!-- Footer Scripts
	============================================= -->
	<!-- for phone mask -->

	<script src="js/intlTelInput.min.js"></script>
	<script src="js/intlTelInput-jquery.min.js"></script>
	<script src="js/functions.js"></script>

</body>

</html>