		
<?php echo $this->render('header.html',$this->mime,get_defined_vars(),0); ?>
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
						<h2 class="head"> <?php echo $siteName; ?> <span>  <?php echo $title; ?></span></h2>

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
						<a href="home" class="elegant-eleganticons-75">Home</a>
					</div>
				</li>

				<li class="grid-item col-md-2" data-cell="4">
					<div class="col-wrap about-box">
						<a href="withdraw" class="elegant-eleganticons-316">Withdraw</a>
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
						<a href="claim" class="elegant-eleganticons-328">Claim</a>
					</div>
				</li>
				<li class="grid-item col-md-2" data-cell="7">
					<div class="col-wrap resume-box">
						<a href="faq" class="elegant-eleganticons-71">FAQ</a>
					</div>
				</li>
				<li class="grid-item col-md-2" data-cell="8">
					<div class="col-wrap contact-box">
						<a href="lotery" class="elegant-eleganticons-110" >Lotery</a>
					</div>
				</li>
			</ul>
		</div> <!-- End Page-front -->


			

		<?php echo $this->render('menu.html',$this->mime,get_defined_vars(),0); ?>
		<?php echo $this->render('footer.html',$this->mime,get_defined_vars(),0); ?>
		

