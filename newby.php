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
	<title>QAX Camp - Information For Student </title>
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
				<a href="index.php"><img src="images/new_logo.svg" alt="Logo" id="logo"></a>
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

                   
                    <ol id="info_for_student_steps_block">
                            <li>1. Для спілкування з командою, а також, щоб 
                                не пропустити важливі повідомлення, приєднуйся до нашого <a target="_blank" href="https://t.me/+IFd8fztXs1_FXSfq">Telegram-чату</a></li>
                            <li>2. Відправ свій Gmail в особисті повідомлення Denis Scholokov.
                                (Важко знайти? Тоді клікай <a target="_blank" href="https://t.me/scholokovdenis">Denis Scholokov</a>)</li>
                            <li>3. Перевір свою Gmail – пошту, знайди лист з інвайтом на календар QAX та клікай додати Google Календар
												<div id="accordion" class="accordion">
													<div class="accordion-item">
														<div class="accordion-item-header">
														Заголовок 1
														</div>
														<div class="accordion-item-content">
															<img class="info_for_student_steps_img" src="images/info1.png">
														</div>
													</div>
												</div>
							</li>
                            <li>4. В своєму Google-акаунті відкрий меню сервісів Google
                                <img class="info_for_student_steps_img" src="images/info2.svg"> </li>
                            <li>5. Перейди у додаток Google Календар
                                <img class="info_for_student_steps_img" src="images/info3.svg"></li>
                            <li>6. Обов’язково перевір, чи є відмітка навпроти QAX Camp Schedule. Вітаємо! 
                                Тепер Календар синхронізовано!
                                <img class="info_for_student_steps_img" src="images/info4.svg"></li>
                            <li>7. Щоб спілкування було комфортним, не забудь перевірити свою камеру та мікрофон перед підключенням. 
                                Зручно це зробити тут: <a target="_blank" href="https://webcammictest.com/">Webcam test - Check camera online </a>  </li>
                            <li>8. У відповідний час клікай на зустріч у Календарі та вибирай “Приєднатися” через Google Meet. 
                                Кожна зустріч має свій окремий лінк! <br>
                                Після закінчення зустрічі повернись в Google Календар та обирай наступну зустріч. 
                                (Докладніше про Google Meet можеш почитати тут: <a target="_blank" href="https://support.google.com/meet/?hl=uk#topic=7306097">Google Meet Довідка</a> )
                                <img class="info_for_student_steps_img" src="images/info5.svg"></li>
                            <li>9. Бажано відвідати всі зустрічі, але якщо не можеш бути присутнім, не хвилюйся, після тестового періоду у   
                                тебе буде доступ до всіх архівів зустрічей.</li>
                                
                    </ol>
                    
                    <p>Сподіваємось, в тебе все вийшло! До зустрічі! Якщо ні, звернись до <a target="_blank" href="https://t.me/scholokovdenis">Denis Scholokov</a></p>
					</div >
                    
					
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
			<script>
				var accordion = (function (element) {
  var _getItem = function (elements, className) { // функция для получения элемента с указанным классом
    var element = undefined;
    elements.forEach(function (item) {
      if (item.classList.contains(className)) {
        element = item;
      }
    });
    return element;
  };
  return function () {
    var _mainElement = {}, // .accordion
      _items = {}, // .accordion-item
      _contents = {}; // .accordion-item-content
    var _actionClick = function (e) {
      if (!e.target.classList.contains('accordion-item-header')) { // прекращаем выполнение функции если кликнули не по заголовку
        return;
      }
      e.preventDefault(); // отменям стандартное действие
      // получаем необходимые данные
      var header = e.target,
        item = header.parentElement,
        itemActive = _getItem(_items, 'show');
      if (itemActive === undefined) { // добавляем класс show к элементу (в зависимости от выбранного заголовка)
        item.classList.add('show');
      } else {
        // удаляем класс show у ткущего элемента
        itemActive.classList.remove('show');
        // если следующая вкладка не равна активной
        if (itemActive !== item) {
          // добавляем класс show к элементу (в зависимости от выбранного заголовка)
          item.classList.add('show');
        }
      }
    },
    _setupListeners = function () {
      // добавим к элементу аккордиона обработчик события click
      _mainElement.addEventListener('click', _actionClick);
    };

    return {
      init: function (element) {
        _mainElement = (typeof element === 'string' ? document.querySelector(element) : element);
        _items = _mainElement.querySelectorAll('.accordion-item');
        _setupListeners();
      }
    }
  }
})();
			</script>

</body>

</html>