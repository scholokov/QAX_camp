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
	<link rel="stylesheet" href="css/header_black.css" type="text/css" />
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
				<div class="container clearfix new-course-main-block">
					<div id="new-course-start-block">
						<div id="new-course-main-text">
							<h3 id="new-course-main-title">Курс "Практичні інструменти"</h3>
							<div class="new-course-main-description">Майстри своєї справи які будуть разом 
								з тобою протягом усієї дороги навчання
								 та радо дадуть ключі на усі твої запитання які ти так довго шукав сам.</div>
						</div>
						
					</div>

                    <div class="trainers-block ">
					  
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
					<!-- #trainer end -->
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
