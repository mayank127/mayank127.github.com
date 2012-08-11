<!DOCTYPE html>

<html lang="en">
<head>
	<title>Mayank Meghwanshi | CSE, IITB</title>
	<meta name="keywords" content="Mayank, Meghwanshi, IIT Bombay, CSE, 110050012, mayank_meghwanshi">
	<link rel="stylesheet" type="text/css" href="main.css"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script src="main.js"></script>
</head>

<body >
	<div id="container">
    	<section id="intro">
        	<div class="constraint">
        		<div id="top-intro">
                	<div id="logo"> </div>
            		<h1 id="introline"> </h1>
        			<h2 id="some-info"> I'm Student of Computer Science Engineering at IIT Bomabay. Interested in web designing, app making, listening music and learning different programming languages.</h2>
            	</div>
                <div id="navigation" onmouseover="logosad()" onmouseout="logohappy()">
                	<ul>
                		<li id="link-about-me"><a href="#about-me"onclick="smoothscroll('about-me')">About Me</a></li>
                    	<li id="link-acads"><a href="#acads" onclick="smoothscroll('acads')">Acads</a></li>
                    	<li id="link-projects"><a href="#projects" onclick="smoothscroll('projects')">Projects</a></li>
                    	<li id="link-gallery"><a href="#gallery" onclick="smoothscroll('gallery')">Gallery</a></li>
                    	<li id="link-contact"><a href="#contact" onclick="smoothscroll('contact')">Contact Me</a></li>
                	</ul>
                </div>
            </div>
        </section>
        <section id="about-me">
        	<div class="constraint">
            	<div id="top-about">
                	<div id="about-image"> </div>
                    <div id="about-me-data">
                    	<div id="myimage"> </div>
                    	<div id="myinfo">
                    		<p class="question">Introduction</p>
                    	    <p class="answer">Hey I'm Mayank, Studying in CSE,IIT Bombay, sophomore year. I'm from Ajmer, Rajasthan.I started programming in my freshie year and now I'm kind of addicted to it.(Sort of geek :P) Except coding I like to watch rom-com movies, listening senti songs and watching comic TV serieses. </p>
                    	    <p class="question">What do I Know?</p>
                        	<p class="answer">I know c++,java,python,android,html,css,javascript,php and I know syntax of few more.</p>
                    	</div>
                    </div>
            	</div>
                <div id="life">
                	<span id="nofdays">DAY</span>
                    <ul id="progress-key">
                    	<li class="personal"> PERSONAL</li>
                        <li class="professional">PROFESSIONAL</li>
                    </ul>
                    <span id="start-date">1993</span>
                    <span id="end-date">
					<script>
						var currentdate=new Date();
						document.write(currentdate.getFullYear());
                   </script></span>
                   <div id="progress-bar">
                   		<ul id="events">
                        
                        </ul>
                   </div>
                </div>
            </div>
        </section>
        <section id="acads">
        	<div class="constraint">
        		<div id="acads-image"> </div>
                <div id="semesters">
                	<div id="sem0" class="sem">
                	<div class="right" onclick="next(0)">
                    	<a> </a>
                    </div>
                    <div class="left" onclick="prev(0)">
                    	<a> </a>
                    </div>
                    	<table>
                        	<tr class="heading">
                            	<td colspan="2">Boards</td>
                            </tr>
                        	<tr class="header">
                            	<td class="course">Class</td>
                                <td class="grade">Percentage</td>
                            </tr>
                            <tr>
                            	<td class="course">10th Board</td>
                                <td class="grade"><div>88.4%</div></td>
                            </tr>
                            <tr >
                            	<td class="course">12th Board</td>
                                <td class="grade"><div>90.8%</div></td>
                            </tr>
                        </table>
                    </div>
                	<div id="sem1" class="sem">
                	<div class="right" onclick="next(1)">
                    	<a> </a>
                    </div>
                    <div class="left" onclick="prev(1)">
                    	<a> </a>
                    </div>
                    	<table>
                        	<tr class="heading">
                            	<td colspan="2">Semester 1</td>
                            </tr>
                        	<tr class="header">
                            	<td class="course">Course</td>
                                <td class="grade">Grade</td>
                            </tr>
                            <tr>
                            	<td class="course">MA 105 Calculus</td>
                                <td class="grade"><div style="width:70%">BC</div></td>
                            </tr>
                            <tr>
                            	<td class="course">ME 119 Engineering Graphics & Drawing</td>
                                <td class="grade"><div>BB</div></td>
                            </tr>
                            <tr>
                            	<td class="course">HS 101 Economics</td>
                                <td class="grade"><div>AB</div></td>
                            </tr>
                            <tr>
                            	<td class="course">PH 117 Physics Lab</td>
                                <td class="grade"><div>AA</div></td>
                            </tr>
                            <tr>
                            	<td class="course">PH 105 Modern Phhysics</td>
                                <td class="grade"><div>CC</div></td>
                            </tr>
                            <tr>
                            	<td class="course">CS 101 Computer Programming and Utilization</td>
                                <td class="grade"><div>AB</div></td>
                            </tr>
                            <tr class="header">
                            	<td class="course">SPI</td>
                                <td class="grade"><div>7.94</div></td>
                            </tr>
                            <tr class="header">
                            	<td class="course">CPI</td>
                                <td class="grade"><div>7.94</div></td>
                            </tr>
                        </table>
                    </div>
                	<div id="sem2" class="sem">
                	<div class="right" onclick="next(2)">
                    	<a> </a>
                    </div>
                    <div class="left" onclick="prev(2)">
                    	<a> </a>
                    </div>
                    	<table>
                        	<tr class="heading">
                            	<td colspan="2">Semester 2</td>
                            </tr>
                        	<tr class="header">
                            	<td class="course">Course</td>
                                <td class="grade">Grade</td>
                            </tr>
                            <tr>
                            	<td class="course">CS 152 Abstractions and Paradigms for Programming</td>
                                <td class="grade"><div>AA</div></td>
                            </tr>
                            <tr>
                            	<td class="course">CS 154 Programming Paradigms Laboratory</td>
                                <td class="grade"><div>AA</div></td>
                            </tr>
                            <tr>
                            	<td class="course">IC 102 Data Analysis and Interpretation</td>
                                <td class="grade"><div>BC</div></td>
                            </tr>
                            <tr>
                            	<td class="course">CH 117 Chemistry Lab</td>
                                <td class="grade"><div>AA</div></td>
                            </tr>
                            <tr>
                            	<td class="course">ME 113 Workshop Practice</td>
                                <td class="grade"><div>AB</div></td>
                            </tr>
                            <tr>
                            	<td class="course">MA 108 Differential Equations</td>
                                <td class="grade"><div>BB</div></td>
                            </tr>
                            <tr>
                            	<td class="course">CH 103 Chemistry</td>
                                <td class="grade"><div>CC</div></td>
                            </tr><tr>
                            	<td class="course">MA 106 Linear Algebra</td>
                                <td class="grade"><div>AB</div></td>
                            </tr>
                            <tr class="header">
                            	<td class="course">SPI</td>
                                <td class="grade"><div>8.39</div></td>
                            </tr>
                            <tr class="header">
                            	<td class="course">CPI</td>
                                <td class="grade"><div>8.17</div></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects">
        	<div class="constraint">
        		<div id="projects-image"> </div>
            </div>
        </section>
        <section id="gallery">
        	<div class="constraint">
        		<div id="gallery-image"> </div>
        		<div id="images">
        		</div>
            </div>
        </section>
        <section id="contact">
        	<div class="constraint">
        		<div id="contact-image"> </div>
                <div id="contact-boxes">
                	<div id="data">
                    	<h1>Address:</h1> <p>Room: B/001,Hostel: 13<br/> IIT Bombay,Mumbai,India<br/><br/></p>
                        <h1>Contact:</h1> <p>Mobile: +91-9820713294<br/> Email: mayankmeghwanshi@gmail.com<br/> <br/></p>
                    </div>
                    <div id="form">
			        	<form name="myform" id="myform" action="index.php" method="post">  
                                <label for="name" id="name_label">Name</label>  <br>
                                <input type="text" name="name" id="name" size="30" value=""/>  
                                <br>
                                <label for="email" id="email_label">Email</label>  <br>
                                <input type="text" name="email" id="email" size="30" value=""/> 
                                <br>
                            	<label for="message" id="message_label">Message</label>  <br>
                                <textarea name="message" id="message" rows="8" cols="30" value="" style="resize:none"> </textarea> 
                                <br>    
                                <input type="submit" name="submit" value="Send"> 
                            </form>
                            <div class="error">
		                        <?php
									if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message'])){
		
										$name=$_POST['name'];
										$email=$_POST['email'];
										$message=$_POST['message'];
										$my_file = 'messages.txt';
										$data="Name: ".$name."\nEmail: ".$email."\nMessage: ".$message."\n\n";
										file_put_contents($my_file,$data); 
										if($handle = fopen($my_file, 'a')){
											fwrite($handle,$data);
										}else{
											echo "Not Sent, Try Again Later";
										}
										fclose($handle);
									}
	
								?>
						</div>
                    </div>
                </div>
        	</div>
        </section>
        <ul id="social-icons">
        	<li id="skype"><a href="skype:mayankmeghwanshi" name="Chat with me on Skype"> </a></li>
            <li id="twitter"><a href="http://www.twitter.com/mayank_127" name="Follow me on twitter"> </a></li>
        	<li id="facebook"><a href="http://www.facebook.com/mayank127" name="Add me on Facebook"> </a></li>
            <li id="linkedin"><a href="http://www.linkedin.com/pub/mayank-meghwanshi/25/142/382" name="Join me on LinkedIn"> </a></li>
        </ul>
        <a href="#intro" id="to-top" name="to-top" onclick="smoothscroll('intro')"> </a>
        <div id="footer">Created By :  Mayank Meghwanshi</div>
	</div>
</body>
</html>