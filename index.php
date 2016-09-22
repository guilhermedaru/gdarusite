<!-- HEADER -->
<?php include('header.php') ?>
<!-- !END HEADER -->
<div class="container">	

	<div class="row">
		<div class="col-md-3 cardHeader3">
			<a href="http://www.github.com/gdaru" target="_blank"><i class="fa fa-github fa-3x fa-inverse"></i></a>
			<a href="https://github.com/guilhermedaru" target="_blank"><i class="fa fa-linkedin fa-3x fa-inverse"></i></a>
		</div>
		<div class="col-md-9 cardHeader">

			<h1>Guilherme R Daru</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 card">
			<div class="row row-eq-height">
				<div class="col-md-4 left">
					<img class="foto" src="imgs/foto.jpg" alt="guilherme daru" />
					<h3 class="noline">Based In</h3>
					<h3 class="red">Vancouver</h3>
				</div>
				<div class="col-md-4 left">
					<h2>Current</h2>
					<a href="http://www.maiszoom.net" target="_blank"><img src="imgs/maiszoom.png" alt="maiszoom tour virtual"/></a>
					<br /><br />
					<h3>MaisZoom Corporative Images</h3>
					<br /><br />
				</div>
				<div class="col-md-4 right">
					<h2>Developer</h2>
					<h2>WebDeveloper</h2>
				</div>
			</div>
			
		</div>

	</div>
	
	<div class="row">
		<div class="navbar navbar-inverse menuBottom">	
				<div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#"></a>
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
		            <li id="homeLi" class="active"><a href="#" id="homeButton2">Home</a></li>
		            <li id="aboutLi"><a href="#about" id="aboutButton">About Me</a></li>
		            <li id="testimonialLi"><a href="#testimonials" id="testimonialsButton">Recommendations</a></li>
		            <li id="resumeLi"><a href="#resume" id="resumeButton">Résumé</a></li>
		            <li id="portLi"><a href="#portfolio" id="portButton">Portfolio</a></li>
		            <li id="contactLi"><a href="#contact" id="contactButton2">Contact</a></li>
		          </ul>
		        </div>
		      </div>	
		</div>
	</div>
	<!-- About me -->
	<div class="row">
		<div class="col-md-12 contactDiv" id="AboutMe">
			<?php include("about.php"); ?>
		</div>
		<div class="col-md-12 contactDiv" id="Testimonials">
			<h2>Recommendations</h2>
			<?php include('testimonials.php'); ?>

		</div>
		<div class="col-md-12 contactDiv" id="Resume">
			<?php include("resume.php") ?>
		</div>
		
		<div class="col-md-12 contactDiv" id="Portfolio">
			<?php include("portfolio.php") ?>
		</div>
		<div class="col-md-12 contactDiv" id="Contact">
			<form id="contato" method="POST">
				<h2>Contact Me!</h2>
				<fieldset>
					<input type="text" name="name" placeholder="Name" class="form" required /><br />
					<input type="email" name="email" placeholder="E-Mail" class="form" required /><br />
					<input type="sub" name="sub" placeholder="Subject" class="form" required /><br />
					<textarea name="desc" placeholder="Text" class="form" required></textarea><br />
					<input type="submit" class="submit" value="Send"/>
				</fieldset>
			</form>
		</div>
	</div>	
</div>
<!-- FOOTER -->
<?php include('footer.php') ?>
<!-- END FOOTER -->