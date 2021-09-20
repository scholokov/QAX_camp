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
    <link rel="stylesheet" href="css/block.our_trainers.css" type="text/css" />
	<link rel="stylesheet" href="css/intlTelInput.css">

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

				<a href="cources.php?cource=qa&name=qa_practice"  class="header-menu header-menu-links">курси</a>

				<a href="about_us.php" class="header-menu header-menu-links ">про нас</a>

				<a href="our_trainers.php" class="header-menu header-menu-links" id="menu-link-our-trainers">наші тренери<div id="menu-line-our-trainers"></div></a>

				
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

		<!-- Page Title
		============================================= -->



		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix trainers-main-block">
                    <h3 id="trainers-main-title">Наші тренери</h3>
                    <div class="trainers-main-description">Майстри своєї справи які будуть разом з тобою протягом усієї дороги 
						навчання та радо дадуть ключі на усі твої запитання які ти так довго шукав сам.</div>
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
									<a target="_blank" href="https://www.linkedin.com/in/denis-scholokov-37735765/"><img src="images/LinkedIn.svg" alt="trainer"></a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Денис Щолоков</div>
									
									<div class="trainer-post">Founder, Trainer</div>
										<div class="trainer-name-block-tab">
											<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/denis-scholokov-37735765/">
													<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">
												</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Денис Щолоков</div>
												<div class="trainer-post-tab">Founder, Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 17 років:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
										<tr><td>2020</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Head Of QA в Django Stars<br></td></tr>
										<tr><td>2017</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Founder, Head Of QA в “QAX”<br></td></tr>
										<tr><td>2020</td> <td>–</td> <td>2020</td>  <td>–</td> <td>Head Of QA в MangoSoft / Kevuru Games<br></td></tr>
										<tr><td>2019</td> <td>–</td> <td>2019</td> <td>–</td>  <td>Head Of QA в “Leap-Gaming” <br></td></tr>
										<tr><td>2017</td> <td>–</td> <td>2019</td> <td>–</td>  <td>Head Of QA в “TSI”<br></td></tr>
										<tr><td>2015</td> <td>–</td> <td>2016</td>  <td>–</td> <td>Head Of QA в “Lucky-Labs”<br></td></tr>
										<tr><td>2007</td> <td>–</td> <td>2015</td>  <td>–</td> <td>QA Manager в “2K-Group”</td></tr>
										<tr><td>2004</td> <td>–</td> <td>2007</td> <td>–</td>  <td>QA в “Парус”</tr></td>
									</table>	
									</p>
									<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
										<tr><td>2020</td> <td>–</td> <td>зараз</td> <td>–</td> <td>Trainer в QAX Camp</td></tr>
										<tr><td>2018</td> <td>–</td> <td>2020</td> <td>–</td> <td>Trainer в QALight</td></tr>
										<tr><td>2017</td> <td>–</td> <td>2018</td> <td>–</td> <td>Trainer в Main Academy</td></tr>
									</table>
									</p>
									</div>
									
								</div>
                            </div>
						
						</div>

                        <div class="our-trainers-line2"></div>

                        <div class="trainer">
                            <div class="trainer-photo">
                                <img class="trainer-img" src="images/AL-trainer.png"  alt="trainer">
                            </div>
							<div class="trainer-photo-mob">
                                <img class="trainer-img-mob" src="images/AL-trainer-mob.svg"  alt="trainer">
                            </div>
                            <div class="trainer-info" >
								<div class="linkedin-logo">
									<a target="_blank" href="https://www.linkedin.com/in/alesya-lomenko/"><img src="images/LinkedIn.svg" alt="trainer"></a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Олеся Ломенко</div>
									<div class="trainer-post">Trainer</div>
										<div class="trainer-name-block-tab">
											<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/alesya-lomenko/">
													<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">
												</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Олеся Ломенко</div>
												<div class="trainer-post-tab">Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 9 років:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
										<tr><td>2017</td> <td>-</td> <td>зараз</td> <td>–</td> <td>Project Manager/Project Team Lead в AMERIA<br></td></tr>
										<tr><td>2014</td> <td>-</td> <td>2017</td> <td>–</td> <td>QA Engineer / QA Lead в  AMERIA<br></td></tr>
										<tr><td>2013</td> <td>-</td> <td>2014</td> <td>–</td> <td>QC Engineer в Wolters Kluwer/Aspen Publishers<br></td></tr>
										<tr><td>2012</td> <td>-</td> <td>2013</td> <td>– </td><td>Software Testing Specialist в LIGA:ZAKON</td></tr>
									</table>
									</p>
									<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
									<tr><td>2021</td> <td>-</td>  <td>зараз</td>  <td>–</td> <td>Trainer в QAX Camp</td></tr>
									</table>
								</p>
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
									<a target="_blank" href="https://www.linkedin.com/in/andrey-samoilenko-59667a157/"><img src="images/LinkedIn.svg" alt="trainer"></a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Андрій Самойленко</div>
									<div class="trainer-post">Founder, Trainer </div>
									<div class="trainer-name-block-tab">
										<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/andrey-samoilenko-59667a157/">
													<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">
												</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Андрій Самойленко</div>
												<div class="trainer-post-tab">Founder, Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 6 років:</p>
									<p class="trainer-experience">
										<table id="trainer-experience-table">	
										<tr><td>2021</td> <td>–</td> <td>зараз</td><td>-</td> <td>Tech Recruiter в Squro<br></tr></td>

										<tr><td>2018</td> <td>–</td> <td>зараз</td> <td>-</td> <td>Tech Recruiter в QAX<br></tr></td>

										<tr><td>2019</td><td>-</td><td>2021</td><td>-</td><td> Tech Recruiter в D2<br></tr></td>

										<tr><td>2017</td><td>-</td><td>2018</td><td>-</td><td> Tech Recruiter в Ajax Systems</tr></td>
										</table>
									</p>
									<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
									<p class="trainer-experience">
									<table id="trainer-experience-table">
									<tr><td>2018</td> <td>–</td> <td>зараз</td> <td>-</td><td>Tech Recruiter/Trainer в QAX</tr></td>
									</table>
								</p>

									</div>
                            </div>
		</div>

                        </div>
						<div class="trainer ">
                            <div class="trainer-photo">
                                <img class="trainer-img" src="images/UR-trainer.svg"  alt="trainer">
                            </div>
							<div class="trainer-photo-mob">
                                <img class="trainer-img-mob" src="images/UR-trainer-mob.svg"  alt="trainer">
                            </div>
                            <div class="trainer-info ">
							<div class="linkedin-logo">
									<a target="_blank" href="https://www.linkedin.com/in/yuliya-rudchenko-94317a152"><img src="images/LinkedIn.svg" alt="trainer"></a>
								</div>
								<div class="trainer-info_text">
									<div class="trainer-name">Юлія Рудченко</div>
									<div class="trainer-post">Trainer</div>
									<div class="trainer-name-block-tab">
										<div class="linkedin-logo-tablet">
												<a target="_blank" href="https://www.linkedin.com/in/yuliya-rudchenko-94317a152">
													<img class="linked-logo-img-tab" src="images/LinkedIn.svg" alt="trainer">
												</a>
											</div>
											<div class="">
												<div class="trainer-name-tab">Юлія Рудченко</div>
												<div class="trainer-post-tab">Trainer</div>
											</div>
										</div>
									<div class="trainer-experience">
									<p class="trainer-experience-title">Досвід роботи 4 роки:</p>
									<p class="trainer-experience">2019 - зараз Middle+ QA Engineer в Innovecs <br>

										2018 - 2019 QA Engineer в DOIT Software <br>

											2018 - QA Engineer в TSI</p>
									<p class="trainer-experience-title">Досвід викладацької діяльності:</p>
									<p class="trainer-experience">
									2021 - зараз - Trainer в QAX Camp</p>

									</div>
                            </div>
                            

                        </div>
						</div>
                    </div>
					<?php include 'components/form.html'?>
				</div>
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
		var pages=window.location.pathname.slice(1);
	var url="cources.php?cource=qa&name=qa_practice";
	var link = $('a.header-menu.header-menu-links').attr('href');

	if (link==url && pages=="cources.php"){
		document.getElementById("menu-line-cources").style.display="block";
		document.getElementById("menu-link-courses").style.color='#F66F5D';
	}else if(pages=="about_us.php"){
		document.getElementById("menu-line-about-us").style.display="block";
		document.getElementById("menu-link-about-us").style.color='#F66F5D';
	}else if(pages=="our_trainers.php"){
		document.getElementById("menu-line-our-trainers").style.display="block";
		document.getElementById("menu-link-our-trainers").style.color='#F66F5D';
	}else{
		document.getElementById("menu-line-cources").style.display="none";
		document.getElementById("menu-line-about-us").style.display="none";
		document.getElementById("menu-line-our-trainers").style.display="none";

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
		$("body").css({ "overflow": "hidden" });
		$("#footer-block").css({ "display": "none" });
		$("#content").css({ "display": "none" });
		$("#write_to_us").css({ "display": "none" });
		
    } else {
        y.className = "header-menu";
		$("body").css({ "overflow": "visible" });
		$("#footer-block").css({ "display": "flex" });
		$("#content").css({ "display": "block" });
		$("#write_to_us").css({ "display": "block" });
    }
}
function goToForm(){
		$(".burger-icon").removeClass("change");
		$("#header-block").removeClass("responsive");
	    $("body").css({ "overflow": "visible" });
		$("#footer-block").css({ "display": "flex" });
		$("#content").css({ "display": "block" });
		$("#write_to_us").css({ "display": "block" });

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
