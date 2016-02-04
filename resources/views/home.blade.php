<!DOCTYPE HTML>

@include('partials/cssReference')
@include('partials/jsReference')

<html>
	<link rel="icon"  href="images/me.jpg">

	<head>
		<title>Derek's Resume</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">Derek</a></h1>
				<nav id="nav">
					<ul >
						<li><a href="#banner">Home</a></li>
						<li><a href="#education">Education</a></li>
						<li><a href="#experience">My Skills</a></li>
						<li><a href="#aboutme">More about me</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Derek Yeong</h2>
					<p>Graduate of Information Technology </p>

					<div class="test"><span>Contact me</span></div>
					<br>
					<p> <i class="fa fa-envelope"></i> derek.yeong8@gmail.com</p>
					<p> <i class="fa fa-phone-square"></i> +65 9060 4860</p>
					<a href="#education" class="button alt">Education</a>
					<a href="#experience" class="button alt">My Skills</a>
				</div>
			</section>


		<!-- One -->
			<section id="education" class="wrapper style1">
				<header class="major">
					<h2>Education</h2>
					<p>My latest qualifications</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="12u">
							<section class="special">
								<a href="#" ><img src="images/uq.jpg" class="img-responsive" style="margin:0 auto;" alt="" /></a>
								<br><br>
								<h3>University of Queensland, Australia</h3>
								<span style="display:inline-block;">
									<h5>Bachelor of Information Technology</h5>
								</span>
								<br>
								<p>Having studied overseas, it has exposed me a different type of culture and way of working. It has definitely given me a edge
									in dealing with a wide array of future clients.  </p>
								<ul class="actions">
									<li><a class="button alt" role="button" style="background-color:#BDC3C7;" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
									<p style="color:white;">View some of my projects here</p></a></li>
								</ul>

								<div class="collapse" id="collapseExample">
								  <div class="well" style="background-color:#fff;">
								    	<div style="text-align:left;">

				                            <h2 > <i class="fa fa-graduation-cap"></i>My Projects </h2>
				                            
				                            <br>

				                           
				                            <h5> Development </h5>

				                            <div class="row">
											<div class="3u">
												<section class="special box">
													<h3>ATEST</h3>

													<a href="#" ><img src="images/final_logo.png" style="width:40%;"/></a>
													<br><br>

													<a class="button alt" style="background-color:#3498db;" href="http://128.199.244.148" target="_blank"><p style="color:white;">View Live Demo</p></a>

												</section>
											</div>
											<div class="9u">
													<p>My main role in this project was the <strong> Back-End Developer</strong>. <br><br>
													I dealt extensive with <strong>Laravel</strong>. I also contributed to the front-end development by implementing <strong>AngularJS</strong> and other components such as 
													<strong>Bootstrap</strong>. Best viewed on Google Chrome.
													<br><br>
						
													Please log in as a <strong>Practitioner</strong> account using this set of credentials:
													<br><br>
													<strong>Username:</strong> mvptester@uqatest.com
													<br>
													<strong>Password:</strong> deco3801
													<p>.
											</div>
											</div>

											<hr>

											<h5> Design </h5>

											<div class="row">
											<div class="3u">
												<section class="special box">
													<h3>Design Portfolio</h3>

													<a href="#" ><img src="images/portfolioThumb.jpg" style="width:40%;"/></a>
													<br><br>

													<a class="button alt" style="background-color:#3498db;" href="PortfolioResume.pdf" target="_blank"><p style="color:white;">View my works</p></a>

												</section>
											</div>

											<div class="9u">
													<p>This is a portfolio of my design work that I had done in the course of my years at University of Queensland.<br><br>
													This is a short snippet of my 24 years, showcasing the places I have been and also my abilities. The main focus was on the summary of design course 
													works that I worked on during my time here. The software used to accomplish this was a combination of Adobe <strong> Illustrator </strong>, 
													<strong> Photoshop </strong> and <strong> InDesign </strong>.
													<br><br><br>
													<small> *Please note that this is a portable version. </small>
													<p>
											</div>
				                           
				                            
				                            </div>
				                           
						                </div>
						                
								  </div>
								</div>
							</section>
						</div>
					</div>
				</div>	
			</section>
			
		<!-- Two -->
			<section id="experience" class="wrapper style2">
				<header class="major">
					<h2>My Skills</h2>
					<p>What I can bring to your organization</p>
				</header>
				<div class="container">
					<div class="row">
					<div class="3u">
						<section class="special box">
							<h3>Development</h3>

							<ul style="list-style-type: none;margin: 0;padding: 0;">
								<li>PHP</li>
								<li>C#</li>
								<li>CSS3</li>
								<li>Javascript</li>
							</ul>
							<br>

							<a class="button alt" data-toggle="popover" data-html="true" data-trigger="hover" data-content="I am very familiar with the concept of the MVC framework having worked extensively on <strong>Laravel</strong> for my latest project. <br><br>
							I also worked on other frameworks such as <strong>AngularJS</strong> and dabbled a little on <strong>Meteor</strong>">More Info</a>

						</section>
					</div>
					<div class="3u">
						<section class="special box">
							<h3>Administrative</h3>

							<ul style="list-style-type: none;margin: 0;padding: 0;">
								<li>MySQL</li>
								<li>Web servers</li>
								<li>GitHub</li>
							</ul>
							<br>

						</section>
					</div>
					<div class="3u">
						<section class="special box">
							<h3>Design</h3>
							
							<ul style="list-style-type: none;margin: 0;padding: 0;">
								<li>Illustrator</li>
								<li>Photoshop</li>
								<li>InDesign</li>
							</ul>
							<br>

						</section>
					</div>
					<div class="3u">
						<section class="special box">
							<h3>Theories</h3>
							
							<ul style="list-style-type: none;margin: 0;padding: 0;">
								<li>Design patterns</li>
								<li>SDLC</li>
								<li>OO concepts</li>
								<li>Design theories</li>
							</ul>
							<br>

						</section>
					</div>
				</div>
				</div>
			</section>

			<section id="aboutme" class="wrapper style1">
				<header class="major">
					<h2>Qualities</h2>
					<p>A summary of characteristics that defines me</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box">
								<i class="icon fa-bolt major"></i>
								<h3>Adaptable</h3>
								<p>I enjoyed being mentally challenged. I find it easy to work around issues and quick to pick up new skills. </p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<i class="icon fa-users major"></i>
								<h3>Sociable</h3>
								<p>I am easy to get along with. I enjoy working with people and make an excellent team member. </p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<i class="icon fa-unlock major"></i>
								<h3>Hardworking</h3>
								<p>I am always trying ways to unlock my full potential and improve the world around me.</p>
							</section>
						</div>
					</div>
				</div>
			</section>		
			
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<p style="text-align:center;"> Thanks for reading through. Please feel free to contact me if you have any queries. </p>
				</div>
				
			</footer>

	</body>
</html>