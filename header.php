<?php 
	echo '
<!DOCTYPE html>
<html>
	<head>
		<meta author="Guilherme R DARU">
		<meta description="">
		<meta charset="UTF-8">
		<title>Guilherme R Daru - WebDeveloper & Developer</title>
		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href=\'http://fonts.googleapis.com/css?family=Pacifico\' rel=\'stylesheet\' type=\'text/css\'">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- JS -->
		<script src="js/Chart.js"></script>
		<script src="js/jquery-3.1.0.min.js"></script>

		<!-- SCRIPTS -->
		<script>
		$(document).ready(function(){
			$("#Contact").hide();
			$("#Resume").hide();
			$("#Portfolio").hide();
			$("#AboutMe").hide();
			$("#Testimonials").hide();



			$("#homeButton2").click(function(){
				$("#Contact").hide(200);
				$("#Resume").hide(200);
				$("#Portfolio").hide(200);
				$("#Testimonials").hide(200);
				$("#AboutMe").hide(200);	
				document.getElementById("homeLi").className = "active";
				document.getElementById("aboutLi").className = "";
				document.getElementById("testimonialLi").className = "";
				document.getElementById("resumeLi").className = "";
				document.getElementById("portLi").className = "";
				document.getElementById("contactLi").className = "";
			});
			$("#aboutButton").click(function(){
				$("#Contact").hide(200);
				$("#Resume").hide(200);
				$("#Portfolio").hide(200);
				$("#Testimonials").hide(200);
				$("#AboutMe").show(500);	

				document.getElementById("homeLi").className = "";
				document.getElementById("aboutLi").className = "active"
				document.getElementById("testimonialLi").className = "";
				document.getElementById("resumeLi").className = "";
				document.getElementById("portLi").className = "";
				document.getElementById("contactLi").className = "";
			});

			
			$("#testimonialsButton").click(function(){
				$("#Contact").hide(200);
				$("#Portfolio").hide(200);
				$("#AboutMe").hide(200);	
				$("#Resume").hide(200);
				$("#Testimonials").show(500);

				document.getElementById("homeLi").className = "";
				document.getElementById("aboutLi").className = "";
				document.getElementById("testimonialLi").className = "active";
				document.getElementById("resumeLi").className = "";
				document.getElementById("portLi").className = "";
				document.getElementById("contactLi").className = "";
			});

			$("#resumeButton").click(function(){
				$("#Contact").hide(200);
				$("#Portfolio").hide(200);
				$("#AboutMe").hide(200);	
				$("#Testimonials").hide(200);
				$("#Resume").show(500);

				document.getElementById("homeLi").className = "";
				document.getElementById("aboutLi").className = "";
				document.getElementById("testimonialLi").className = "";
				document.getElementById("resumeLi").className = "active";
				document.getElementById("portLi").className = "";
				document.getElementById("contactLi").className = "";
			});
			$("#portButton").click(function(){
				$("#Contact").hide(200);
				$("#AboutMe").hide(200);	
				$("#Resume").hide(200);
				$("#Testimonials").hide(200);
				$("#Portfolio").show(500);
				document.getElementById("homeLi").className = "";
				document.getElementById("aboutLi").className = "";
				document.getElementById("resumeLi").className = "";
				document.getElementById("testimonialLi").className = "";
				document.getElementById("portLi").className = "active"
				document.getElementById("contactLi").className = "";
			});

			$("#contactButton2").click(function(){
				$("#AboutMe").hide(200);	
				$("#Resume").hide(200);
				$("#Portfolio").hide(200);
				$("#Testimonials").hide(200);
				$("#Contact").show(500);
				document.getElementById("homeLi").className = "";
				document.getElementById("aboutLi").className = "";
				document.getElementById("resumeLi").className = "";
				document.getElementById("testimonialLi").className = "";
				document.getElementById("portLi").className = "";
				document.getElementById("contactLi").className = "active";
			});
		});
		</script>

	</head>
	<body>';
?>