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
	<link rel="stylesheet" href="css/base_course.css" type="text/css" />
	<link rel="stylesheet" href="css/intlTelInput.css">

	<!-- Document Title
	============================================= -->
	<title>QAX Camp - API Course</title>
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

				<a href="cources.php?cource=qa&name=qa_practice"  class="header-menu header-menu-links">Курси</a>

				<a href="about_us.php" class="header-menu header-menu-links ">Про нас</a>

				<a href="our_trainers.php" class="header-menu header-menu-links" id="menu-link-our-trainers">Наші Тренери</a>

				
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
				<a href="courses.php?course=qa&name=qa_practice" class="header-menu-mobile">Курси</a>

					<a href="about_us.php" class="header-menu-mobile">Про нас</a>

					<a href="our_trainers.php" class="header-menu-mobile">Наші тренери</a>

					<a href="#write_to_us">
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
				<div class="container clearfix new-course-main-block">
					<div id="new-course-start-block">
						<div id="new-course-main-text">
							<h3 id="new-course-main-title">Тестування API. Postman & Swagger. Від теорії до практики</h3>
						</div>
						
					</div>


                    <div id="course-plan-block">
                        <h3 class="course-plan-main-title">Програма курсу</h3>
						<div id="course-plan-steps">
                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson1.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Урок 1. Вступний урок. Клієнт – серверна архітектура.</h5>
                                    <div class="descriotion-step">
                                                                <ul>
                                                                    <li>Клієнт-серверна архітектура.</li>

                                                                    <li>Що таке HTTP.</li>

                                                                    <li>HTTP методи.</li>

                                                                    <li>HTTP статус коди.</li>

                                                                    <li> ChromeDevTools – вкладка Network.</li>
                                                                </ul>

                                                                
                                    </div>
                                       <a href="" class="spoiler_links">Читати повністю</a>
                                    <div class="spoiler_body">
                                    <ul>
                                                                    <li>Клієнт-серверна архітектура.</li>

                                                                    <li>Що таке HTTP.</li>

                                                                    <li>HTTP методи.</li>

                                                                    <li>HTTP статус коди.</li>

                                                                    <li> ChromeDevTools – вкладка Network.</li>
                                                                </ul>

                                                                   
                                    </div>
                                </div>

                            </div>


                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson2.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Урок 2. Що таке API. Робота зі Swagger.</h5>
                                    <div class="descriotion-step"><ul>
                                                                    <li>Що таке API? Як працює API?</li> 

                                                                    <li>Cпособи інтеграції систем.</li>

                                                                    <li>REST та SOAP – що це і в чому різниця?</li>

                                                                    <li>Навіщо тестувати API?</li>

                                                                    <li>Що таке Swagger і навіщо він потрібний?</li>

                                                                </ul>
                                                                   
                                                                    Практика: показую Swagger 

                                                                    </div>
                                       <a href="" class="spoiler_links">Читати повністю</a>
                                    <div class="spoiler_body">
                                    <ul>
                                                                    <li>Що таке API? Як працює API?</li> 

                                                                    <li>Cпособи інтеграції систем.</li>

                                                                    <li>REST та SOAP – що це і в чому різниця?</li>

                                                                    <li>Навіщо тестувати API?</li>

                                                                    <li>Що таке Swagger і навіщо він потрібний?</li>

                                                                </ul>
                                                                   
																Практика: показую Swagger 
                                    </div>
                                </div>

                            </div>


                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson3.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Урок 3. Заголовки (headers). Тестуємо GET запити.</h5>
                                    <div class="descriotion-step"><ul>
                                                                    <li>Дивимось на заголовки. Які бувають.</li>

                                                                    <li>Що тестуємо у заголовках?<br>
                                                                    – Тестуємо GET запит.</li>

                                                                    <li>Параметризований та не параметризований GET – запит.<br>
                                                                    Практика: показую як завантажити Postman. Показую простий запит на реєстрацію для ресурсу <a href="http://users.bugred.ru/" style="color: #F66F5D">Users</a></li> 

                                                                    Показую як тестувати GET, DELETE - запити (параметризований та ін.).<br>
                                                                </ul>
                                                                    
                                                                </div>
                                       <a href="" class="spoiler_links">Читати повністю</a>
                                    <div class="spoiler_body">
                                    <ul>
                                                                    <li>Дивимось на заголовки. Які бувають.</li>

                                                                    <li>Що тестуємо у заголовках?<br>
                                                                    – Тестуємо GET запит.</li>

                                                                    <li>Параметризований та не параметризований GET – запит.<br>
                                                                    Практика: показую як завантажити Postman. Показую простий запит на реєстрацію для ресурсу <a href="http://users.bugred.ru/">Users</a></li> 

																	
                                                                </ul>
                                                                   Показую як тестувати GET, DELETE - запити (параметризований та ін.).<br>
                                </div>

                            </div>



                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson4.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Урок 4. Тіло повідомлення (Body). Тестуємо POST, PUT запити.</h5>
                                    <div class="descriotion-step">
                                        – Розглянемо формати body.
                                        <ul>
                                            <li>Що ми тестуємо у body?</li>

                                            <li> Well-formed json.</li>

                                            <li> Валідатори json та xml.</li>
                                        </ul>
                                         Показую як тестувати POST – запити.

                                           
                                    </div>
                                        <a href="" class="spoiler_links">Читати повністю</a>
                                    <div class="spoiler_body">
                                    – Розглянемо формати body.
                                    <ul>
                                            <li>Що ми тестуємо у body?</li>

                                            <li> Well-formed json.</li>

                                            <li> Валідатори json та xml.</li>
                                        </ul>
                                         Показую як тестувати POST – запити.<br>

                                           
                                    </div>
                                </div>

                            </div>



                            <div class="course-step" id="step-5">
							<div class="img-step"><img src="images/lesson5.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Урок 5. Колекції, оточення та змінні в Postman.</h5>
                                    <div class="descriotion-step">
                                        <ul>
                                        <li>Що таке колекції?</li>
                                        <li>Що таке оточення?</li>
                                        <li>Що таке змінні?</li>

                                        </ul>
                                       Практика: підвантажимо колекцію Trello. Створимо для неї оточення зі змінними. Заранимо колекцію.<br>

                                         
                                    </div>
											<a href="" class="spoiler_links">Читати повністю</a>
										<div class="spoiler_body">
                                        <ul>
                                        <li>Що таке колекції?</li>
                                        <li>Що таке оточення?</li>
                                        <li>Що таке змінні?</li>

                                        </ul>
                                       Практика: підвантажимо колекцію Trello. Створимо для неї оточення зі змінними. Заранимо колекцію.<br>

                                         
                                    	</div> 
                                       
                                </div>

                            </div>




                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson6.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Урок 6. Основи автоматизації у Postman.</h5>
                                    <div class="descriotion-step">
                                           <ul> 
                                            <li>Основи JavaScript.</li>

                                            <li>Test з snippets на json у відповіді.</li>

                                            <li>Дістанемо значення із простого масиву та простого об'єкта.</li>

                                            <li>Дістанемо значення з JSON.</li>

                                            <li>Рандомні значення у Postman.</li>

                                            <li>Запускаємо один запит кілька разів.</li>

                                            <li>Зчитуємо дані із файлу.</li>
                                        </ul>
                                        Практика: все перелічене вище.<br>
										
                                    </div>
                                    <a href="" class="spoiler_links">Читати повністю</a>
										<div class="spoiler_body">
                                        <ul> 
                                            <li>Основи JavaScript.</li>

                                            <li>Test з snippets на json у відповіді.</li>

                                            <li>Дістанемо значення із простого масиву та простого об'єкта.</li>

                                            <li>Дістанемо значення з JSON.</li>

                                            <li>Рандомні значення у Postman.</li>

                                            <li>Запускаємо один запит кілька разів.</li>

                                            <li>Зчитуємо дані із файлу.</li>
                                        </ul>
                                        Практика: все перелічене вище.<br>
                                    	</div> 
                                </div>

                            </div>

                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson7.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Урок 7. Як ще можна перевірити API? Тест – дизайн для тестування API. </h5>
                                    <div class="descriotion-step">
                                        <ul>
                                            <li>SOAP UI. (Установка та приклад).</li>

                                            <li>CURL.</li>

                                            <li>Тест – дизайн для тестування API. </li> 
                                        </ul>
                                            Практика: все перелічене вище.<br>
                                            
                                       
                                    </div>
                                    <a href="" class="spoiler_links">Читати повністю</a>
										<div class="spoiler_body">
                                        <ul>
                                            <li>SOAP UI. (Установка та приклад).</li>

                                            <li>CURL.</li>

                                            <li>Тест – дизайн для тестування API. </li> 
                                        </ul>
                                            Практика: все перелічене вище.<br>
                                    	</div> 
                                </div>

                            </div>

                            

							



                         </div>
                    
                    </div>


                   

					
                    <div class="trainers-block ">

						<h3 class="course-trainer-main-title">Тренер курсу</h3>
                        <div class="trainer ">
											<div class="trainer-photo">
												<img class="trainer-img" src="images/OL-trainer.svg" alt="trainer">
											</div>
							<div class="trainer-photo-mob">
												<img class="trainer-img-mob" src="images/OL-trainer-mob.svg" alt="trainer">
											</div>
											<div class="trainer-info ">
							<div class="linkedin-logo">
								<a target="_blank" href="https://www.linkedin.com/in/olga-lavrinenko/" class="trainers_linkedin_icon_link">
								<!--<img src="images/LinkedIn.svg" alt="trainer">-->
								</a>
								</div>
								<div class="trainer-info_text">
								<div class="trainer-name">Ольга Лавриненко</div>
								<div class="trainer-post">Trainer</div>
								<div class="trainer-name-block-tab">
									<div class="linkedin-logo-tablet">
										<a target="_blank" href="https://www.linkedin.com/in/olga-lavrinenko/" class="trainers_linkedin_icon_link">
										<!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
										</a>
									</div>
									<div class="">
										<div class="trainer-name-tab">Ольга Лавриненко</div>
										<div class="trainer-post-tab">Trainer</div>
									</div>
									</div>
								<div class="trainer-experience">
								<p class="trainer-experience-title">Досвід роботи 6 років:</p>
								<p class="trainer-experience">
								</p><table id="trainer-experience-table"><tbody>
														
									<tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз </td> <td>–</td> <td>Automation QA Engineer в AutoDoc <br></td></tr>
									
									<tr class="experience-tr"><td>2021</td> <td>–</td> <td>2021 </td> <td>–</td> <td>General QA Engineer в Rozetka<br></td></tr>

									<tr class="experience-tr"><td>2020</td> <td>–</td> <td>2021</td><td>–</td> <td>Automation QA Engineer в AutoDoc <br></td></tr>

									<tr class="experience-tr"><td>2018</td> <td>–</td> <td>2020</td><td>–</td><td>Manual QA Engineer в AutoDoc<br></td></tr>
									
									<tr class="experience-tr"><td>2017</td> <td>–</td> <td>2018</td><td>–</td><td>Manual QA Engineer в CryptoAce<br></td></tr>

									<tr class="experience-tr"><td>2016</td> <td>–</td> <td>2017</td><td>–</td><td> Manual QA Engineer в Freelance<br></td></tr>
								</tbody></table>
								<p></p>
								<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
								<p class="trainer-experience">
								</p><table id="trainer-experience-table">
								<tbody>
									<tr class="experience-tr"><td>2022</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Trainer в QAX Camp</td></tr>

									<tr class="experience-tr"><td>2022</td> <td>–</td> <td>2022</td> <td>–</td> <td>Персональний ментор</td></tr>

									<tr class="experience-tr"><td>2020</td> <td>–</td> <td>2021</td> <td>–</td> <td>Trainer в ActPro</td></tr>
								</tbody></table>
								<p></p>

								</div>
											</div>
											

										</div>
							</div>

                    </div>

					<div  id="course-registrarion">
							<h3 class="course-registrarion-main-title">Реєстрація</h3>
                                <div class="new-course-main-description">
                                    Заповніть, будь ласка, форму нижче : 
                                </div>								
					</div>														
                   

					<!-- #trainer ddd end -->
                   



				</div>
               <iframe name="iframe1" id="iframe1" src="https://forms.monday.com/forms/embed/7907437eb478113f6d5159033607ed0e?r=use1"  style="min-height: 2050px; max-height: 2350px; height: 100%; border: 0; margin-bottom: -10px;"></iframe>
			</div>
		</section>


        


        <!-- #content end -->
		<!-- Footer
		============================================= -->
		<footer>
	

		<div id="footer-block" class="row justify-content-between col-mb-30">

			<div class="col-8 col-8 col-sm-4  footer-box">
				<div class="footer-contatcs-item ">
					<a target="_blank" href="https://t.me/RecrutMan" id="footer-telegram" class="footer-links">
						<!--<img src="images/Telegram.svg" alt="Telegram" id="Telegram-img">-->
				    </a>
					<a target="_blank" href="https://www.facebook.com/qax.camp/" class="footer-links" id="footer-facebook">
						<!--<img src="images/Facebook.svg" alt="Facebook" id="Facebook-img">-->
					</a>
			    </div>
			    <div class="footer-contatcs-item ">
				    <a target="_blank" href="tel:+380933647038" class="footer-links">
				    +38 (093) 364 70 38
			        </a>
				</div>
				<div class="footer-contatcs-item ">
					<a target="_blank" href="mailto:info@qax-camp.com.ua" class="footer-links"> 
					info@qax-camp.com.ua
					</a>
				</div>
			</div>

			<div class="col-4 col-sm-4  footer-box" id="powered_logo-block">

				<div class="footer-powered d-flex align-items-center" id="powered_logo">
					<a target="_blank" href="https://qax.com.ua/ "><img src="images/Powered.svg" alt="powered"></a>
				</div>
			</div>

			<div class="col-12 col-sm-12 footer-box">
				<div class="footer-years d-flex align-items-center">
					<div id="footer-years">2020-2022 © QAX Camp</div>
				</div>
			</div>


	</div>
</footer>

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
	window.onload = function() {
		var cssLink = document.createElement("link");
		cssLink.href = "css/header_black.css"; 
		cssLink.rel = "stylesheet"; 
		cssLink.type = "text/css"; 
		frames['iframe1'].document.head.appendChild(cssLink);
	}
	</script>
    <script>
        /*function showMore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("btn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Показать больше";
        moreText.style.display = "none";
    } else {
    dots.style.display = "none";
    btnText.innerHTML = "Показать меньше";
      moreText.style.display = "inline";
    }
    }*/
    $(document).ready(function(){
        $('.spoiler_links').click(function(){
            $(this).next('.spoiler_body').toggle('normal');
            $(this).css('display', 'none');
            $(this).prev('.descriotion-step').css('display', 'none');
            return false;
        });
    });
        
    </script>

	

<script>
		function footerlink(){
	let telegram_img=$("#Telegram-img");
	let telegram_link=$("#footer-telegram");
	telegram_img.mouseover(function(){telegram_link.attr({"color":"#F66F5D"});});
	telegram_img.mouseout(function(){telegram_link.attr({"color":"#ffffff"});});
	telegram_link.mouseover(function(){telegram_img.attr({"src":"images/Telegram-hover.svg"});});
	telegram_link.mouseout(function(){telegram_img.attr({"src":"images/Telegram.svg"})});
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
		$("#header-block").css({ "background": "#2C2A3F" });
		$("body").css({ "overflow": "hidden" });
		$("footer").css({ "display": "none" });
		$("#courses").css({ "display": "none" });
		$("#content").css({ "display": "none" });
		$("#write_to_us").css({ "display": "none" });
		
    } else {
        y.className = "header-menu";
		$("#header-block").css({ "background": "#3E3B5E" });
		$("body").css({ "overflow": "visible" });
		$("footer").css({ "display": "block" });
		$("#courses").css({ "display": "block" });
		$("#content").css({ "display": "block" });
		$("#write_to_us").css({ "display": "flex" });
    }
}
function goToForm(){
		$(".burger-icon").removeClass("change");
		$("#header-block").removeClass("responsive");
	    $("body").css({ "overflow": "visible" });
		$("footer").css({ "display": "block" });
		$("#courses").css({ "display": "block" });
		$("#content").css({ "display": "block" });
		

}

    </script>

	<!-- Footer Scripts
	============================================= -->
	<!-- for phone mask -->

	<script src="js/intlTelInput.min.js"></script>
	<script src="js/intlTelInput-jquery.min.js"></script>

	<script src="js/functions.js"></script>
	<script src="js/form.js"></script>

</body>

</html>
