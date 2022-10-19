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
	<link rel="stylesheet" href="css/block.courses.css" type="text/css" />
	<link rel="stylesheet" href="css/block.feedback.css" type="text/css" />
	<link rel="stylesheet" href="css/footer.css" type="text/css" />
	<link rel="stylesheet" href="css/header.css" type="text/css" />
	<link rel="stylesheet" href="css/block.hero-image.css" type="text/css" />
	<link rel="stylesheet" href="css/block.why_we.css" type="text/css" />
	<link rel="stylesheet" href="css/block.write_to_us.css" type="text/css" />
	<link rel="stylesheet" href="css/block.courses_detailes.css" type="text/css" />
	<link rel="stylesheet" href="css/block.courses_detailes.accordion.css" type="text/css" />
    <link rel="stylesheet" href="css/block.our_trainers.css" type="text/css" />
	<link rel="stylesheet" href="css/intlTelInput.css">

	<!-- Document Title
	============================================= -->
	<title>QAX Camp - Our Trainers</title>
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
				<div class="container clearfix trainers-main-block">
					<div id="trainers-start-block">
						<div id="trainers-main-text">
							<h3 id="trainers-main-title">Наші тренери</h3>
							<div class="trainers-main-description">Команда справжніх професіоналів, яка допоможе тобі здобути новітні знання та практичні
								 навички, що стануть вирішальними для отримання оферу твоєї мрії!</div>
						</div>
						<div id="trainers-main-img">
							<img src="images/trainers.svg" alt="main_img">
						</div>
					</div>

                    <div class="trainers-block ">
					    <div class="trainer ">
                            <div class="trainer-photo">
                                <img class="trainer-img" src="images/DS-trainer.svg" alt="trainer">
                            </div>
							<div class="trainer-photo-mob">
                                <img class="trainer-img-mob" src="images/DS-trainer-mob.svg" alt="trainer">
                            </div>
                            <div class="trainer-info ">
								<div class="linkedin-logo">
									<a target="_blank" href="https://www.linkedin.com/in/denis-scholokov-37735765/" class="trainers_linkedin_icon_link">
									<!--<img src="images/LinkedIn.svg" alt="trainer">--></a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Денис Щолоков</div>
									
									<div class="trainer-post">Founder, Trainer</div>
										<div class="trainer-name-block-tab">
											<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/denis-scholokov-37735765/" class="trainers_linkedin_icon_link">
													<!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
												</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Денис Щолоков</div>
												<div class="trainer-post-tab">Founder, Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 18 років:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
										<tr class="experience-tr"><td>2020</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Head Of QA в Django Stars<br></td></tr>
										<tr class="experience-tr"><td>2017</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Founder, Head Of QA в QAX<br></td></tr>
										<tr class="experience-tr"><td>2020</td> <td>–</td> <td>2020</td>  <td>–</td> <td>Head Of QA в MangoSoft / Kevuru Games<br></td></tr>
										<tr class="experience-tr"><td>2019</td> <td>–</td> <td>2019</td> <td>–</td>  <td>Head Of QA в Leap-Gaming<br></td></tr>
										<tr class="experience-tr"><td>2017</td> <td>–</td> <td>2019</td> <td>–</td>  <td>Head Of QA в TSI<br></td></tr>
										<tr class="experience-tr"><td>2015</td> <td>–</td> <td>2016</td>  <td>–</td> <td>Head Of QA в Lucky-Labs<br></td></tr>
										<tr class="experience-tr"><td>2007</td> <td>–</td> <td>2015</td>  <td>–</td> <td>QA Manager в 2K-Group</td></tr>
										<tr class="experience-tr"><td>2004</td> <td>–</td> <td>2007</td> <td>–</td>  <td>QA в “Парус”</tr></td>
									</table>	
									</p>
									<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
										<tr class="experience-tr"><td>2020</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Trainer в QAX Camp</td></tr>
										<tr class="experience-tr"><td>2018</td> <td>–</td> <td>2020</td> <td>–</td> <td>Trainer в QALight</td></tr>
										<tr class="experience-tr"><td>2017</td> <td>–</td> <td>2018</td> <td>–</td> <td>Trainer в Main Academy</td></tr>
									</table>
									</p>
									</div>
									
								</div>
                            </div>
						
						</div>

                        <div class="our-trainers-line2"></div>
<div class="trainer ">
                            <div class="trainer-photo">
                                <img class="trainer-img" src="images/AS-trainer.svg"  alt="trainer">
                            </div>
							<div class="trainer-photo-mob">
                                <img class="trainer-img-mob" src="images/AS-trainer-mob.svg"  alt="trainer">
                            </div>
                            <div class="trainer-info ">
							<div class="linkedin-logo">
									<a target="_blank" href="https://www.linkedin.com/in/andrey-samoilenko-59667a157/" class="trainers_linkedin_icon_link">
									<!--<img src="images/LinkedIn.svg" alt="trainer">-->
								</a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Андрій Самойленко</div>
									<div class="trainer-post">Founder, Trainer </div>
									<div class="trainer-name-block-tab">
										<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/andrey-samoilenko-59667a157/" class="trainers_linkedin_icon_link">
													<!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
												</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Андрій Самойленко</div>
												<div class="trainer-post-tab">Founder, Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 5 років:</p>
									<p class="trainer-experience">
										<table id="trainer-experience-table">	
										<tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз</td><td>–</td> <td>Tech Recruiter в Squro<br></tr></td>

										<tr class="experience-tr"><td>2018</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Tech Recruiter в QAX<br></tr></td>

										<tr class="experience-tr"><td>2019</td><td>–</td><td>2021</td><td>–</td><td> Tech Recruiter в D2<br></tr></td>

										<tr class="experience-tr"><td>2017</td><td>–</td><td>2018</td><td>–</td><td> Tech Recruiter в Ajax Systems</tr></td>
										</table>
									</p>
									<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
									<tr class="experience-tr"><td>2020</td> <td>–</td> <td>зараз</td> <td>–</td><td>Trainer в QAX Camp</tr></td>
									<tr class="experience-tr"><td>2018</td> <td>–</td> <td>2020</td> <td>–</td><td>Trainer в QALight</tr></td>
									</table>
								</p>

									</div>
                            </div>
		</div>

                        </div>
                        <!--<div class="trainer">
                            <div class="trainer-photo">
                                <img class="trainer-img" src="images/AL-trainer.png"  alt="trainer">
                            </div>
							<div class="trainer-photo-mob">
                                <img class="trainer-img-mob" src="images/AL-trainer-mob.svg"  alt="trainer">
                            </div>
                            <div class="trainer-info" >
								<div class="linkedin-logo">
									<a target="_blank" href="https://www.linkedin.com/in/alesya-lomenko/" class="trainers_linkedin_icon_link">
									
								</a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Олеся Ломенко</div>
									<div class="trainer-post">Trainer</div>
										<div class="trainer-name-block-tab">
											<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/alesya-lomenko/" class="trainers_linkedin_icon_link">
													
												</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Олеся Ломенко</div>
												<div class="trainer-post-tab">Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 10 років:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
										<tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Project Manager в FFW Agency <br></td></tr>
										<tr class="experience-tr"><td>2017</td> <td>–</td> <td>2021</td> <td>–</td> <td>Project Manager/Project Team Lead в AMERIA<br></td></tr>
										<tr class="experience-tr"><td>2014</td> <td>–</td> <td>2017</td> <td>–</td> <td>QA Engineer / QA Lead в  AMERIA<br></td></tr>
										<tr class="experience-tr"><td>2013</td> <td>–</td> <td>2014</td> <td>–</td> <td>QC Engineer в Wolters Kluwer/Aspen Publishers<br></td></tr>
										<tr class="experience-tr"><td>2012</td> <td>–</td> <td>2013</td> <td>– </td><td>Software Testing Specialist в LIGA:ZAKON</td></tr>
									</table>
									</p>
									<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
									<tr class="experience-tr"><td>2021</td> <td>–</td>  <td>зараз</td>  <td>–</td> <td>Trainer в QAX Camp</td></tr>
									</table>
								</p>
									</p>
									</div>
                            </div>
						</div>
                        </div>-->

                        <div class="our-trainers-line2"></div>

                        
						<div class="trainer ">
                            <div class="trainer-photo">
                                <img class="trainer-img" src="images/UR-trainer.svg"  alt="trainer">
                            </div>
							<div class="trainer-photo-mob">
                                <img class="trainer-img-mob" src="images/UR-trainer-mob.svg"  alt="trainer">
                            </div>
                            <div class="trainer-info ">
							<div class="linkedin-logo">
									<a target="_blank" href="https://www.linkedin.com/in/yuliya-rudchenko-94317a152" class="trainers_linkedin_icon_link">
									<!--<img src="images/LinkedIn.svg" alt="trainer">-->
								</a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Юлія Рудченко</div>
									<div class="trainer-post">Trainer</div>
									<div class="trainer-name-block-tab">
										<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/yuliya-rudchenko-94317a152" class="trainers_linkedin_icon_link">
													<!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
												</a>
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
                        </div>
						</div>



						<div class="trainer">
                            <div class="trainer-photo">
                                <img class="trainer-img" src="images/OK-trainer.png"  alt="trainer">
                            </div>
							<div class="trainer-photo-mob">
                                <img class="trainer-img-mob" src="images/OK-trainer-mob.svg"  alt="trainer">
                            </div>
                            <div class="trainer-info" >
								<div class="linkedin-logo">
									<a target="_blank" href="https://www.linkedin.com/in/olga-kompanets/" class="trainers_linkedin_icon_link">
									<!--<img src="images/LinkedIn.svg" alt="trainer">-->
								</a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Ольга Компанець </div>
									<div class="trainer-post">Trainer</div>
										<div class="trainer-name-block-tab">
											<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/olga-kompanets/" class="trainers_linkedin_icon_link">
													<!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
												</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Ольга Компанець</div>
												<div class="trainer-post-tab">Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 6 років:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
										<tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Senior Technical Recruiter в UPC<br></td></tr>
										<tr class="experience-tr"><td>2020</td> <td>–</td> <td>2021</td> <td>–</td> <td>Team Lead of Technical Recruitment в Squro<br></td></tr>
										<tr class="experience-tr"><td>2019</td> <td>–</td> <td>2019</td> <td>–</td> <td>Recruitment Consultant в Ciklum<br></td></tr>
										<tr class="experience-tr"><td>2018</td> <td>–</td> <td>2019</td> <td>– </td><td>Team Lead of Recruitment Department в Ignite LLC<br></td></tr>
										<tr class="experience-tr"><td>2016</td> <td>–</td> <td>2018</td> <td>– </td><td>Head of HR в Zakaz.ua<br></td></tr>
										<tr class="experience-tr"><td>2015</td> <td>–</td> <td>2016</td> <td>– </td><td>Business and HR administrator в GVMachines Inc.</td></tr>
									</table>
									</p>
									<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
									<tr class="experience-tr"><td>2021</td> <td>–</td>  <td>зараз</td>  <td>–</td> <td>Trainer в QAX Camp</td></tr>
									</table>
								</p>
									</p>
									</div>
                            </div>
						</div>
                        </div>


						<div class="trainer ">
                            <div class="trainer-photo">
                                <img class="trainer-img" src="images/DK-trainer.png"  alt="trainer">
                            </div>
							<div class="trainer-photo-mob">
                                <img class="trainer-img-mob" src="images/DK-trainer-mob.svg"  alt="trainer">
                            </div>
                            <div class="trainer-info ">
							<div class="linkedin-logo">
									<a target="_blank" href="https://www.linkedin.com/in/dariyakazarinova/" class="trainers_linkedin_icon_link">
									<!--<img src="images/LinkedIn.svg" alt="trainer">-->
								</a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Дарія Казарінова</div>
									<div class="trainer-post">Trainer</div>
									<div class="trainer-name-block-tab">
										<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/dariyakazarinova/" class="trainers_linkedin_icon_link">
													<!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
												</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Дарія Казарінова</div>
												<div class="trainer-post-tab">Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 10 років:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table"><tr class="experience-tr">
										<tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз </td> <td>–</td> <td>Recruitment Team Lead в Tango Me <br></td></tr>
										<tr class="experience-tr"><td>2021</td> <td>–</td> <td>2021 </td> <td>–</td> <td>Team Lead of Product & Marketing Recruitment team в Squro<br></td></tr>

										<tr class="experience-tr"><td>2020</td> <td>–</td> <td>2021</td><td>–</td> <td>Talent Acquisition Team Lead Art Division в Room 8 Studio<br></td></tr>

										<tr class="experience-tr"><td>2017</td> <td>–</td> <td>2020</td><td>–</td><td>Senior IT Recruiter та Talent Acquisition Team Lead в 8allocate <br></td></tr>
										<tr class="experience-tr"><td>2016</td> <td>–</td> <td>2017</td><td>–</td> <td>Senior IT Recruiter в Playtini  <br></td></tr>
										<tr class="experience-tr"><td>2015</td> <td>–</td> <td>2016</td><td>–</td> <td>Recruitment Specialist в Kyivstar  <br></td></tr>
										<tr class="experience-tr"><td>2014</td> <td>–</td> <td>2014</td><td>–</td> <td>HR Manager в OMD Ukraine  <br></td></tr>
										<tr class="experience-tr"><td>2010</td> <td>–</td> <td>2014</td><td>–</td> <td>Research Analyst та Recruitment Officer в Ward Howell International  <br></td></tr>
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
                            

                        </div>
						</div>
									<!--	<div class="trainer ">
											<div class="trainer-photo">
												<img class="trainer-img" src="images/EV-trainer.png" alt="trainer">
											</div>
							<div class="trainer-photo-mob">
												<img class="trainer-img-mob" src="images/EV-trainer-mob.svg" alt="trainer">
											</div>
											<div class="trainer-info ">
							<div class="linkedin-logo">
								<a target="_blank" href="https://www.linkedin.com/in/elenavolokhonskaya/" class="trainers_linkedin_icon_link">
							
								</a>
								</div>
								<div class="trainer-info_text">
								<div class="trainer-name">Олена Волохонська</div>
								<div class="trainer-post">Trainer</div>
								<div class="trainer-name-block-tab">
									<div class="linkedin-logo-tablet">
										<a target="_blank" href="https://www.linkedin.com/in/elenavolokhonskaya/" class="trainers_linkedin_icon_link">
										
										</a>
									</div>
									<div class="">
										<div class="trainer-name-tab">Олена Волохонська</div>
										<div class="trainer-post-tab">Trainer</div>
									</div>
									</div>
								<div class="trainer-experience">
								<p class="trainer-experience-title">Досвід роботи 8 років:</p>
								<p class="trainer-experience">
								</p><table id="trainer-experience-table"><tbody>
														<tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз </td> <td>–</td> <td>Manual QA Engineer в Luxoft  <br></td></tr>
									<tr class="experience-tr"><td>2020</td> <td>–</td> <td>2021 </td> <td>–</td> <td>Manual QA Engineer в Zira1<br></td></tr>

									<tr class="experience-tr"><td>2016</td> <td>–</td> <td>2019</td><td>–</td> <td>Recruitment Specialist в GlobalLogic<br></td></tr>

									<tr class="experience-tr"><td>2015</td> <td>–</td> <td>2016</td><td>–</td><td>Recruitment Specialist в Wargaming.net <br></td></tr>
									
								</tbody></table>
								<p></p>
								<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
								<p class="trainer-experience">
								</p><table id="trainer-experience-table">
								<tbody><tr class="experience-tr"><td>2022</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Trainer в QAX Camp</td></tr>
								</tbody></table>
								<p></p>

								</div>
											</div>
											

										</div>
							</div> -->
                    
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
              </div>
						
				
			  			
			<div class="trainer ">
                      <div class="trainer-photo">
                        <img class="trainer-img" src="images/KK-trainer.svg" alt="trainer">
                      </div>
              <div class="trainer-photo-mob">
                        <img class="trainer-img-mob" src="images/KK-trainer-mob.svg" alt="trainer">
                      </div>
                      <div class="trainer-info ">
              <div class="linkedin-logo">
                <a target="_blank" href="https://www.linkedin.com/in/kateryna-koteleva-11391b1ab/?midToken=AQHlPupaJBU3Vg&midSig=2QVB2aMzJ2Yag1&trk=eml-email_job_alert_digest_01-header-48-profile&trkEmail=eml-email_job_alert_digest_01-header-48-profile-null-dm8usf%7El4dxrpdy%7En7-null-neptune%2Fprofile%7Evanity%2Eview" class="trainers_linkedin_icon_link">
                <!--<img src="images/LinkedIn.svg" alt="trainer">-->
                </a>
                </div>
                <div class="trainer-info_text">
                <div class="trainer-name">Катерина Котелева</div>
                <div class="trainer-post">English trainer </div>
                <div class="trainer-name-block-tab">
                  <div class="linkedin-logo-tablet">
                    <a target="_blank" href="https://www.linkedin.com/in/kateryna-koteleva-11391b1ab/?midToken=AQHlPupaJBU3Vg&midSig=2QVB2aMzJ2Yag1&trk=eml-email_job_alert_digest_01-header-48-profile&trkEmail=eml-email_job_alert_digest_01-header-48-profile-null-dm8usf%7El4dxrpdy%7En7-null-neptune%2Fprofile%7Evanity%2Eview" class="trainers_linkedin_icon_link">
                    <!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
                    </a>
                  </div>
                  <div class="">
                    <div class="trainer-name-tab">Катерина Котелева</div>
                    <div class="trainer-post-tab">English trainer </div>
                  </div>
                  </div>
                <div class="trainer-experience">
				<p class="trainer-experience-title">Кваліфікація:</p>
                <p class="trainer-experience">
                </p><table id="trainer-experience-table"><tbody>
                            
                  <tr class="experience-tr"><td>2021</td> <td>–</td> <td style="max-width:750px">Cambridge Certificate of Proficiency in English (Level C2)<br></td></tr>
                  
                  <tr class="experience-tr"><td>2013</td> <td>–</td> <td style="max-width:750px">Doctor of Philosophy in Linguistics (the English language)<br></td></tr>

                  <tr class="experience-tr"><td>2006</td> <td>–</td> <td style="max-width:750px">Master’s Degree in Teaching English <br></td></tr>
        
                </tbody></table>
                <p></p>
                <p class="trainer-experience-title">Досвід викладацької діяльності 16 років:</p>
                <p class="trainer-experience">
                </p><table id="trainer-experience-table">
                <tbody>
                  <tr class="experience-tr"><td>2022</td> <td>–</td> <td>зараз</td> <td>–</td> <td>English Teacher в QAX Camp</td></tr>
				  <tr class="experience-tr"><td>2022</td> <td>–</td> <td>зараз</td> <td>–</td> <td>English Teacher в SLVC ‘English 4 Refugees’</td></tr>
				  <tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз</td> <td>–</td> <td>English Teacher, ICAO Rater в Flight School ‘Chas Aero’</td></tr>
				  <tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз</td> <td>–</td> <td>English Teacher в Cargo Air Charter ‘Avem Aero’</td></tr>
				  <tr class="experience-tr"><td>2014</td> <td>–</td> <td>зараз</td> <td>–</td> <td>English Teacher в UkSATSE (Ukrainian State Air Traffic Service Enterprise)</td></tr>
				  <tr class="experience-tr"><td>2014</td> <td>–</td> <td>2022</td> <td>–</td> <td>English Teacher, ICAO Rater в Flight School ‘Condor’</td></tr>
				  <tr class="experience-tr"><td>2014</td> <td>–</td> <td>2014</td> <td>–</td> <td> English Teacher в National Aviation University</td></tr>
				  <tr class="experience-tr"><td>2013</td> <td>–</td> <td>2014</td> <td>–</td> <td>Deputy Director, English Teacher в Dniproavia Airlines Training Center</td></tr>
				  <tr class="experience-tr"><td>2009</td> <td>–</td> <td>2013</td> <td>–</td> <td>English Teacher в Dniproavia Airlines Training Center</td></tr>
				  <tr class="experience-tr"><td>2006</td> <td>–</td> <td>2008</td> <td>–</td> <td>English Teacher в State Flight Academy of Ukraine</td></tr>

                </tbody></table>
                <p></p>

                </div>
                      </div>
                      

                    </div>
              </div>


					<!-- #trainer end -->

					
					<div class="trainer ">
                      <div class="trainer-photo">
                        <img class="trainer-img" src="images/DM-trainer.png" alt="trainer">
                      </div>
              <div class="trainer-photo-mob">
                        <img class="trainer-img-mob" src="images/DM-trainer-mob.png" alt="trainer">
                      </div>
                      <div class="trainer-info ">
              <div class="linkedin-logo">
                <a target="_blank" href="https://www.linkedin.com/in/dmytro-m-585384200/" class="trainers_linkedin_icon_link">
                <!--<img src="images/LinkedIn.svg" alt="trainer">-->
                </a>
                </div>
                <div class="trainer-info_text">
                <div class="trainer-name">Дмитро Маркулич</div>
                <div class="trainer-post">Trainer</div>
                <div class="trainer-name-block-tab">
                  <div class="linkedin-logo-tablet">
                    <a target="_blank" href="https://www.linkedin.com/in/dmytro-m-585384200/" class="trainers_linkedin_icon_link">
                    <!--<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">-->
                    </a>
                  </div>
                  <div class="">
                    <div class="trainer-name-tab">Дмитро Маркулич</div>
                    <div class="trainer-post-tab">Trainer</div>
                  </div>
                  </div>
                <div class="trainer-experience">
                <p class="trainer-experience-title">Досвід роботи 4 роки:</p>
                <p class="trainer-experience">
                </p><table id="trainer-experience-table"><tbody>
                            
                  <tr class="experience-tr"><td>2021</td> <td>–</td> <td>зараз </td> <td>–</td> <td>QA engineer в GG4L<br></td></tr>
                  
                  <tr class="experience-tr"><td>2019</td> <td>–</td> <td>2021 </td> <td>–</td> <td>Software engineer в ATENA<br></td></tr>

        
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
              </div>
						<!-- #trainer end -->



				</div>
			</div>
		</section>
        
        <?php include 'components/form.html'?>


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
		var pages=window.location.pathname.slice(1);
	var url="courses.php?course=qa&name=qa_practice";
	var link = $('a.header-menu.header-menu-links').attr('href');

	if (link==url && pages=="courses.php"){
		document.getElementById("menu-link-courses").style.color='#F66F5D';
	}else if(pages=="about_us.php"){
		document.getElementById("menu-link-about-us").style.color='#F66F5D';
	}else if(pages=="our_trainers.php"){
		document.getElementById("menu-link-our-trainers").style.color='#F66F5D';
	}else{

		document.getElementById("menu-link-courses").style.color='white';
		document.getElementById("menu-link-about-us").style.color='white';
		document.getElementById("menu-link-our-trainers").style.color='white';
	};
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
