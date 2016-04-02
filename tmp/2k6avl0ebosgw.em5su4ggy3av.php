<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="SmartAdmin Front-end Portfolio Template">
		<meta name="author" content="solutionportal121">
		<title>SmartAdmin Front-end Portfolio Template</title>
		<link rel="stylesheet" href="fonts/elegant/styles.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- <link rel="stylesheet/less" href="less/main.less"> -->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Full Front page Area -->
		<div class="page-front container">
			<!-- style this ul element with only grid-boxes and not with flip-menu or masonry-grids. -->
			<ul class="grid-boxes list-unstyled flip-menu row" id="masonry-grids">
				<!-- data-cell to remember order -->
				<li class="grid-item col-md-2" data-cell="1">
					<div class="col-wrap user-pic">
						<img src="img/user-pic.jpg" alt="user-pic">
					</div>
				</li>
				<li class="grid-item col-md-8" data-cell="2">
					<div class="col-wrap user-short-info">
						<h2 class="head">MYORANGE INC. <span> Social Engineers!</span></h2>

						<div class="float-right">
							<span class="cv-btn"><a href="#non" class="elegant-eleganticons-98">Download</a></span>
							<ul class="socials list-unstyled">
								<li><a href="#non" class="elegant-eleganticons-242"></a></li>
								<li><a href="#non" class="elegant-eleganticons-241"></a></li>
								<li><a href="#non" class="elegant-eleganticons-251"></a></li>
								<li><a href="#non" class="elegant-eleganticons-249"></a></li>
							</ul>	
						</div>
					</div>
				</li>
				<li class="grid-item col-md-2" data-cell="3">
					<div class="col-wrap blog-box">
						<a href="blog.html" class="elegant-eleganticons-75">View Blog</a>
					</div>
				</li>

				<li class="grid-item col-md-2" data-cell="4">
					<div class="col-wrap about-box">
						<a href="#about-page" class="elegant-eleganticons-316" data-flip-menu="true">About Us</a>
					</div>
				</li>
				<li class="grid-item col-md-8" data-cell="5">
					<!-- Featured Posts -->
					<div class="col-wrap featured-post">
						<div id="owl-carousel">
							<div class="post-1">
								<div class="left col-md-5 col-sm-5 col-xs-4">
									<img src="img/featured/post-1.jpg" alt="featured-post">
								</div>
								<div class="right col-md-7 col-sm-7 col-xs-8">
									<h3 class="head">Galaxy Note II</h3>
									<p class="desc">Aenean sollicitudin, lorem quis endum auctor, nisi elit consequat ipsum, nece sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit beti sei repudiandae sint et molestiae. Sed non neque elit sit amet a augue...</p>
									<div class="bottom">
										<!-- <time datetime="2014-04-20" class="pub-date">20<sup>th</sup> March 2014</time> -->
										<a href="blog-single.html" class="more-btn">Read More</a>
									</div>
								</div>
							</div><!-- End Post 1 -->

							<div class="post-2">
								<div class="left col-md-5 col-sm-5 col-xs-4">
									<img src="img/featured/post-2.jpg" alt="featured-post">
								</div>
								<div class="right col-md-7 col-sm-7 col-xs-8">
									<h3 class="head">Cool Kitten</h3>
									<p class="desc">Aenean sollicitudin, lorem quis endum auctor, nisi elit consequat ipsum, nece sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit beti sei repudiandae sint et molestiae. Sed non neque elit sit amet a augue...</p>
									<div class="bottom">
										<!-- <time datetime="2014-04-20" class="pub-date">20<sup>th</sup> March 2014</time> -->
										<a href="blog-single.html" class="more-btn">Read More</a>
									</div>
								</div>
							</div> <!-- End Post 2 -->
						</div> <!-- End Owl Carousel -->
						<div class="featured-pagination">
							<span class="back elegant-eleganticons-2"></span>
							<span class="next elegant-eleganticons-3"></span>
						</div>
					</div>
				</li>
				<li class="grid-item col-md-2" data-cell="6">
					<div class="col-wrap works-box">
						<a href="#portfolio-page" class="elegant-eleganticons-328" data-flip-menu="true">Accolades</a>
					</div>
				</li>
				<li class="grid-item col-md-2" data-cell="7">
					<div class="col-wrap resume-box">
						<a href="#resume-page" class="elegant-eleganticons-71" data-flip-menu="true">View Skills</a>
					</div>
				</li>
				<li class="grid-item col-md-2" data-cell="8">
					<div class="col-wrap contact-box">
						<a href="#contact-page" class="elegant-eleganticons-110" data-flip-menu="true">Contact Us</a>
					</div>
				</li>
			</ul>
		</div> <!-- End Page-front -->


			

		<nav id="inner-nav" class="inner-nav">
			<ul class="container inside-wrap list-unstyled">
				<li class="elegant-eleganticons-64 menu-btn">
					<ul class="menu-content list-unstyled">
						<li><a href="#about-page">About</a></li>
						<li><a href="#resume-page">Resume</a></li>
						<li><a href="#portfolio-page">Portfolio</a></li>
						<li><a href="#contact-page">Contact</a></li>
					</ul>
				</li>
				<li class="elegant-eleganticons-44 close-btn"></li>
			</ul>
		</nav>

		

		<!-- Don't include this script in production code - Used only for compiling/debugging less to css --> 
		 <!-- // <script src="less/less-1.6.1.min.js"></script>  -->

		<!-- Script at the bottom for faster loading pages -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/snap.svg-min.js"></script>
		<script src="js/debounce.js"></script>
		<script src="js/fastclick.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/magnific-popup.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<!-- // <script src="js/nprogress.js"></script> -->
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/skills.js"></script>
		<script src="js/jquery.smooth-scroll.min.js"></script>
		<script src="js/jquery.keyframes.min.js"></script>
		<script src="js/flip.js"></script>
		<script src="js/custom.js"></script>


		<!-- For IE9 and below -->
		<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
			<script type="text/javascript">
				$('input, textarea').placeholder();
			</script>
		<![endif]-->
	</body>
</html>