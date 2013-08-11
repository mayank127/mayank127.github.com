<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Mayank Meghwanshi | CSE, IITB</title>
		<meta name="keywords" content="Mayank, Meghwanshi, IIT Bombay, CSE, 110050012, mayank_meghwanshi">
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link href="css_pirobox/style_5/style.css" rel="stylesheet" type="text/css" />


	</head>

	<body >
		<div id="container">
			<section id="intro"><?php include 'html/intro.html';?></section>
			<section id="about-me"><?php include 'html/about-me.html';?></section>
			<section id="acads"><?php include 'html/acads.html';?></section>
			<section id="projects"><?php include 'html/projects.html';?></section>
			<section id="resume">
				<div class="constraint">
					<div id="resume-image">
					</div>
					<object data="files/resume.pdf" type="application/pdf" width="900px" height="800px">If you don't have the Adobe Reader plugin, you should see what's between the OBJECT tags, which should include a <a href="files/resume.pdf">link</a> to the file in the first place.</object>
				</div>
			</section>
			<section id="books"><?php include 'html/books.html';?></section>
			<section id="contact"><?php include 'html/contact.html';?></section>
			<ul id="social-icons" onmouseout="logo(0)">
				<li id="skype" onmouseover="logo(6)">
					<a href="skype:mayankmeghwanshi" 
name="Chat with me on Skype"> </a>
				</li>
				<li id="twitter" onmouseover="logo(7)">
					<a href="http://www.twitter.com/mayank_127" name="Follow me on twitter"> </a>
				</li>
				<li id="facebook" onmouseover="logo(8)">
					<a href="http://www.facebook.com/mayank127" name="Add me on Facebook"> </a>
				</li>
				<li id="linkedin" onmouseover="logo(6)">
					<a href="http://www.linkedin.com/in/mayank127" name="Join me on LinkedIn"> </a>
				</li>
			</ul>
			<a href="#intro" id="to-top" name="to-top" onclick="smoothscroll('intro')"> </a>
			<footer id="footer">
				Created By :  Mayank Meghwanshi   <br>Project Browser by Pirobox : http://www.pirolab.it/pirobox/
			</footer>
		</div>
	</body>
	
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/jquery_1.5-jquery_ui.min.js"></script>
	<script type="text/javascript" src="js/pirobox_extended_feb_2011.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-43090666-2', 'iitb.ac.in');
		    ga('send', 'pageview');

	</script>
	<?php 
		if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$my_file = 'messages.txt';
		$data = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message . "\n\n";
		$fh = fopen($my_file, 'a') or die("can't open file");
		fwrite($fh, $data);
		fclose($fh);
		}
	?>

</html>
