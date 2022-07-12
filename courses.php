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
	<link rel="stylesheet" href="css/base_course.css" type="text/css" />
	<link rel="stylesheet" href="css/intlTelInput.css">

	<meta property="fb:admins" content="denis.scholokov" />

	<!-- Document Title
	============================================= -->
	<title>QAX Camp - courses</title>
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

			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous"
				src="https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v9.0" nonce="etHa6BVZ"></script>


				<div class="header-menu" id="header-block">
				
				<a href="index.php"><img src="images/Logo_Small.svg" alt="Logo" id="logo"></a>
				
				<a href="courses.php?course=qa&name=qa_practice"  class="header-menu header-menu-links" id="menu-link-courses">Курси</a>

				<a href="about_us.php"  class="header-menu header-menu-links">Про нас</a>

				<a href="our_trainers.php"  class="header-menu header-menu-links">Наші Тренери</a>

				
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
					<div id="sendButtonText-mobile" onclick="goToForm()">Записатися</div></a>
		    	</div>
			</div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->



		<!-- Content
		============================================= -->
		<section id="content">
			<h2 id="courses_title_section">Title</h2>
			<div class="content-wrap">
				<div class="container clearfix">

					<?php include 'components/courses_block.php'?>

					<?php include 'components/form.html'?>

					<!--- FB Comments-->
					<!-- https://scholokov.github.io/" -->


					
					<!--
					<div class="fb-comments" data-href="https://www.qax-camp.com.ua"
						data-width="100%" order_by="reverse_time" data-numposts="2">
					</div>
					-->
					<!-- FB Comments End --> 
				  
					



				</div>

				<div id="comments-course-main-block" class="container-xl no-padding">

							<?	$json = file_get_contents( 'env.json');
								$json_data = json_decode($json,true);	
							?>
							
							<div id="comments-course">
										<div id="fb-comments-title-block">
											<div id="fb-comments-title">Відгуки про курси </div>
										</div>
										<div id="fb-comments-block">	
											<div class="fb-comments container" data-href="<?echo $json_data['facebookLink']?>"  
												data-width="100%"  data-numposts="2" data-colorscheme="dark" data-order-by="reverse_time">
											</div>
										</div>
							</div>
				
					</div>
			</div>
		</section>
		<!-- #content end order_by="reverse_time"-->
		
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
		//$('.accordion__answer:first').show();
		//$('.accordion__question:first').addClass('expanded');

		$('.accordion__question').on('click', function () {
			var content = $(this).next();

			$('.accordion__answer').not(content).slideUp(400);
			$('.accordion__question').not(this).removeClass('expanded');
			$(this).toggleClass('expanded');
			content.slideToggle(400);
		});

	</script>

	
	<!-- Tabs function -->
	<script>
		function openTab(evt, tabName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(tabName).style.display = "block";
			evt.currentTarget.className += " active";
		};
		
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
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
		
    } else {
        y.className = "header-menu";
		$("#header-block").css({ "background": "#3E3B5E" });
		$("body").css({ "overflow": "visible" });
		$("footer").css({ "display": "block" });
		$("#courses").css({ "display": "block" });
		$("#content").css({ "display": "block" });
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