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
	<link rel="stylesheet" href="css/footer.css" type="text/css" />
	<link rel="stylesheet" href="css/base_course.css" type="text/css" />
	<link rel="stylesheet" href="css/intlTelInput.css">

	<!-- Document Title
	============================================= -->
	<title>QAX Camp - Base Course</title>
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

				<a href="courses.php?course=qa&name=qa_practice"  class="header-menu header-menu-links">Курси</a>

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
							<h3 id="new-course-main-title">Базовий курс QA</h3>
							<div class="new-course-main-description">Друзі!
                                Маємо, що вам розповісти цікавого про курс “Теорія QA“
                                На курсі Вас чекає:
                                <ul>
                                    <li>первинне знайомство з тим що таке quality assurance;</li>
                                    <li>види тестування;</li>
                                    <li>як працювати з вимогами та документами;</li>
                                    <li>які існують ролі в проектних командах;</li>
                                </ul>
                                І ще багато цікавого.
                                Після проходження курсу “Теорія QA“ Ви зможете повністю зрозуміти 
                                з чого складається напрям тестування
                                програмного забезпечення та пройти до практичних занять з QA.
                            </div>
						</div>
						
					</div>


                    <div id="course-plan-block">
                        <h3 class="course-plan-main-title">Програма курсу</h3>
						<div id="course-plan-steps">
                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson1.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 1.Тестувальник. Хто це?</h5>
                                    <div class="descriotion-step">Дізнаємось хто такий тестувальник, чим він займається кожного дня, 
                                        які перспективи розвитку, оцінка рівня зарплат,
                                         які є плюси і мінуси даної професії.</div>
                                       <!-- <a href="" class="spoiler_links">Читати повністю</a>
                                    <div class="spoiler_body">
                                        <ol>
                                            <li>Зрозуміємо, для чого потрібен Trello, які в нього є можливості. 
                                            Створимо Dashboard, To Do лист. Створимо задачу та оформимо її, а також перемістимо задачу по дошці. </li>

                                            <li>Дізнаємося для чого потрібен Confluence. Розглянемо приклад опису вимог. 
                                            Також спробуємо основні функції в Confluence. </li>

                                            <li>Розберемося з можливостями Miro. Розглянемо, що таке MindMap та як правильно її складати. 
                                            Зробимо це у Miro на прикладі відомого сайту. </li>
                                        </ol>
                                    </div>-->
                                </div>

                            </div>


                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson2.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 2. Види тестування.</h5>
                                    <div class="descriotion-step">Поспілкуємось про види тестування, які 
                                        вони бувають, за яким принципом їх розділяють, чим вони відрізняються 
                                        один від одного.</div>
                                       <!-- <a href="" class="spoiler_links">Читати повністю</a>
                                    <div class="spoiler_body">
                                        <ol>
                                            <li>Дізнаємось, що таке Jira. Які основні функції має. Створимо проєкт. 
                                                Розберемося з Kanban-дошкою. Додамо тип issue. Створимо task, bug. Додамо скриншот. 
                                                Навчимося редагувати задачу та переміщати її у інший проєкт.</li>

                                            <li>Дізнаємось, що таке TestRail. Які основні функції має. 
                                                Створимо тест-кейс у проєкті. Навчимося запускати тест-кейси.</li>
                                        </ol>
                                    </div>-->
                                </div>

                            </div>


                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson3.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 3. Рівні тестування.</h5>
                                    <div class="descriotion-step">Ознайомимось з рівнями тестування, розглянемо на прикладі що вони означають, 
                                        Дізнаємось які тесті входять до кожного рівня.</div>
                                       <!-- <a href="" class="spoiler_links">Читати повністю</a>
                                    <div class="spoiler_body">
                                        <ol>
                                            <li>Дізнаємося, що таке Figma. Розглянемо макет сайту та навчимося тестувати верстку.</li>

                                            <li>Розглянемо, що таке PICT. Дізнаємось, де його можна знайти та вирішимо задачу за допомогою PICT.</li>

                                            <li>Розберемося, що таке DataGrip та для чого потрібен. Встановимо DataGrip. 
                                                Підключимося до DB. Дізнаємось про основні можливості цього інструменту.</li>
                                        </ol>
                                    </div>-->
                                </div>

                            </div>



                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson4.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 4. Дефект</h5>
                                    <div class="descriotion-step">Дізнаємось що таке дефект, що є важливим при
                                         оформленні баг репорту, структуру баг репорта, що і як 
                                         варто зазначати в ньому.</div>
                                        <!--<a href="" class="spoiler_links">Читати повністю</a>
                                    <div class="spoiler_body">
                                        <ol>
                                            <li>Дізнаємось, для чого нам потрібен DevTools. Як в нього потрапити у різних браузерах. Розглянемо можливості кожної таби. 
                                                Таби Elements, Console та Network розглянемо детально.</li>

                                            <li>Розберемося, що таке Swagger та як використовується. На практиці відправимо запити.</li>

                                        </ol>
                                    </div>-->
                                </div>

                            </div>



                            <div class="course-step" id="step-5">
							<div class="img-step"><img src="images/lesson5.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 5. Тестова документація: тест-кейси та чеклісти</h5>
                                    <div class="descriotion-step">Обговоримо для чого потрібна тестова документація, 
                                        дізнаємось що таке тест-кейс, які його особливості, яка структура тест-кейсу. 
                                        Також, поговорим про чеклісти, коли варто їх використовувати, 
                                        в чому різниця чеклістів і тест-кейсів.</div>
											<!--<a href="" class="spoiler_links">Читати повністю</a>
										<div class="spoiler_body">
											Поговоримо трохи про клієнт-сервер. Згадаємо CRUD. Згадаємо статус - коди відповідей. Встановимо Postman. 
                                            Навчимося відправляти запити на тестову API.
												Також створимо колекцію запитів. 
													Завантажимо колекцію запитів Trello. 
													Напишемо декілька простих тестів (Snippets). Навчимося запускати колекцію.
                                    	</div> -->
                                       
                                </div>

                            </div>




                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson6.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 6. Вимоги: навіщо їх тестувати?</h5>
                                    <div class="descriotion-step">
                                        <p>На занятті визначимо які бувають вимоги, як проходить процес
                                             збору вимог, чому добре описані вимоги економлять час і
                                              гроші, як це впливає на команду розробки, дізнаємось що
                                               таке гарні і погані вимоги.

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson7.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 7. Тестування вимог</h5>
                                    <div class="descriotion-step">
                                        <p>Розглянемо види тестування вимог, як ми можемо їх протестувати, 
                                            розглянемо приклади, коли маємо найбільші 
                                            помилки і як ці помилки впливають на роботу команди і продукт.

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson8.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 8. Ролі та артефакти в проєктній команді.</h5>
                                    <div class="descriotion-step">
                                        <p>Дізнаємось, хто ще працює в команді, чим вони займаються і за що відповідають. 

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson9.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 9. Task/issue flow</h5>
                                    <div class="descriotion-step">
                                        <p>Дізнаємось що таке задача, який її життєвий цикл. Які етапи задача проходить 
                                            від її відкриття (створення) до закриття.
                                             В яких випадках задача може повертатися на інший етап.

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="course-step">
                                <div class="img-step"><img src="images/lesson10.svg" alt="step"></div>
                                <div class="text-step">
                                    <h5 class="title-step">Заняття 10. SDLC/STLC</h5>
                                    <div class="descriotion-step">
                                        <p>Познайомимось з процесом розробки, дізнаємось які основні
                                             етапи виділяють, що відбувається на кожному з етапів. А також, поспілкуємось 
                                            про процес тестування і дізнаємось як можна розробляти програмне забезпечення. 

                                        </p>
                                    </div>
                                </div>

                            </div>

							



                         </div>
                    
                    </div>


                    <div  id="course-price">
								<h3 class="course-plan-main-title">Оплата</h3>
                                <div class="new-course-main-description">
                                        Всі ми пристосовуємось до нових реалій і робимо максимально можливий 
                                        внесок до наближення нашої перемоги. На сьогоднішній день ми хочемо ще 
                                        більше збільшувати кількість курсів і, як наслідок, кваліфікованих спеціалістів в сфері ІТ. 
                                        Тому повна вартість курсу складатиме 100$, але
                                        остаточна вартість буде залежити від Ваших можливостей!<br><br>
                                        Ми пропонуємо наступні варіанти:
                                </div>
								<div class="course-price-block">
                                     Я можу оплатити повну вартість  - 100$
								</div>			
                                <div class="course-price-block">
                                    Я можу оплатити половину - 50$
								</div>	
                                <div class="course-price-block">
								    Я можу оплатити частину - 25$
								</div>														

					</div>

					
                    <div class="trainers-block ">

						<h3 class="course-plan-main-title">Тренер курсу</h3>
					  <div class="trainer ">
                      <div class="trainer-photo">
                        <img class="trainer-img" src="images/MP-trainer.svg" alt="trainer">
                      </div>
              <div class="trainer-photo-mob">
                        <img class="trainer-img-mob" src="images/MP-trainer-mob.svg" alt="trainer">
                      </div>
                      <div class="trainer-info ">
              <div class="linkedin-logo">
                <a target="_blank" href="https://www.linkedin.com/in/maksplaksa/" class="trainers_linkedin_icon_link">
                <!--<img src="images/LinkedIn.svg" alt="trainer">-->
                </a>
                </div>
                <div class="trainer-info_text">
                <div class="trainer-name">Максим Плакса</div>
                <div class="trainer-post">Trainer</div>
                <div class="trainer-name-block-tab">
                  <div class="linkedin-logo-tablet">
                    <a target="_blank" href="https://www.linkedin.com/in/maksplaksa/" class="trainers_linkedin_icon_link">
                    <!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
                    </a>
                  </div>
                  <div class="">
                    <div class="trainer-name-tab">Максим Плакса</div>
                    <div class="trainer-post-tab">Trainer</div>
                  </div>
                  </div>
                <div class="trainer-experience">
                <p class="trainer-experience-title">Досвід роботи 10 років:</p>
                <p class="trainer-experience">
                </p><table id="trainer-experience-table"><tbody>
                            
                  <tr class="experience-tr"><td>2022</td> <td>–</td> <td>зараз </td> <td>–</td> <td>QA Engineer в King David <br></td></tr>
                  
                  <tr class="experience-tr"><td>2020</td> <td>–</td> <td>2022 </td> <td>–</td> <td>Project manager в ModXart<br></td></tr>

                  <tr class="experience-tr"><td>2018</td> <td>–</td> <td>2022</td><td>–</td> <td>QA Engineer в ModXart<br></td></tr>

                  <tr class="experience-tr"><td>2014</td> <td>–</td> <td>2018</td><td>–</td><td>Assistant Manager в Montazhka<br></td></tr>
                  
                  <tr class="experience-tr"><td>2012</td> <td>–</td> <td>2014</td><td>–</td><td>Web developer, PHP<br></td></tr>

        
                </tbody></table>
                <p></p>
                <p class="trainer-experience-title">Досвід викладацької діяльності:</p>
                <p class="trainer-experience">
                </p><table id="trainer-experience-table">
                <tbody>
                  <tr class="experience-tr"><td>2022</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Trainer в QAX Camp</td></tr>
                </tbody></table>
                <p></p>

                </div>
                      </div>
                      

                    </div>
								<!--<div class="trainer-photo">
                                <img class="trainer-img" src="images/UR-trainer.svg"  alt="trainer">
                            </div>
							<div class="trainer-photo-mob">
                                <img class="trainer-img-mob" src="images/UR-trainer-mob.svg"  alt="trainer">
                            </div>
                            <div class="trainer-info ">
							<div class="linkedin-logo">
									<a target="_blank" href="https://www.linkedin.com/in/yuliya-rudchenko-94317a152" class="trainers_linkedin_icon_link">-->
									<!--<img src="images/LinkedIn.svg" alt="trainer">-->
								<!--</a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Юлія Рудченко</div>
									<div class="trainer-post">Trainer</div>
									<div class="trainer-name-block-tab">
										<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/yuliya-rudchenko-94317a152" class="trainers_linkedin_icon_link">-->
													<!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
												<!--</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Юлія Рудченко</div>
												<div class="trainer-post-tab">Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 4 роки:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table"><tr class="experience-tr">
										<tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз </td> <td>–</td> <td>QA Team Lead в компанії Innovecs <br></td></tr>
										<tr class="experience-tr"><td>2019</td> <td>–</td> <td>2021 </td> <td>–</td> <td>Middle+ QA Engineer в компанії Innovecs <br></td></tr>

										<tr class="experience-tr"><td>2018</td> <td>–</td> <td>2019</td><td>–</td> <td>QA Engineer в компанії DOIT Software  <br></td></tr>

										<tr class="experience-tr"><td>2018</td> <td>–</td> <td>2018</td><td>–</td><td>QA Engineer в компанії TSI </td></tr>
									</table>
								</p>
									<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
									<tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Trainer в QAX Camp</td></tr>
									</table>
								</p>

									</div>
                            </div>
                        </div>-->
							</div>
                    </div>

					<div  id="course-price">
																					

					</div>

					<!-- #trainer end -->
                   



				</div>
               <iframe name="iframe1" id="iframe1" src="https://forms.monday.com/forms/embed/7907437eb478113f6d5159033607ed0e?r=use1"  style="min-height: 1980px; height: 100%; border: 0;"></iframe>
			</div>
		</section>
        


        <!-- #content end -->
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
