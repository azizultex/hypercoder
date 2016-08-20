<?php
/*
Template name: FrontPage
*/
 get_header(); ?>
		<section id="home_banner">
			<div class="container">
				<div class="row title">
					<div class="col-md-12">
						<h2 class="text-center">What we do</h2>
						<h4 class="text-center">Eleifend mi iaculis parturient etiam volutpat pulvinar eleifend</h4>
					</div>
				</div>	

				<div class="row">
					<div class="col-md-4">
						<div class="banner_item btn-primary" data-wow-offset="10">
		                    <div class="col-md-3">
		                   		<i class="fa fa-cogs fa-3x"></i>
		                    </div>
		                    <div class="col-md-9">
		                   		<h4>Development</h4>
		                    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item btn-success" data-wow-offset="10">
                        	<div class="col-md-3">
		                   		<i class="fa fa-paint-brush fa-3x"></i>
		                    </div>
		                    <div class="col-md-9">
		                   		<h4>UI/UX</h4>
		                    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item btn-info" data-wow-offset="10">
                      		<div class="col-md-3">
		                   		<i class="fa fa-bullhorn fa-3x"></i>
		                    </div>
		                    <div class="col-md-9">
		                   		<h4>Social Marketing</h4>
		                    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item btn-warning" data-wow-offset="20">
							<div class="col-md-3">
		                   		<i class="fa fa-database fa-3x"></i>
		                    </div>
		                    <div class="col-md-9">
		                   		<h4>System Design</h4>
		                    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item btn-danger" data-wow-offset="20">
							<div class="col-md-3">
		                   		<i class="fa fa-align-left fa-3x"></i>
		                    </div>
		                    <div class="col-md-9">
		                   		<h4>Copywriting</h4>
		                    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item btn-warning" data-wow-offset="20">
                      		<div class="col-md-3">
		                   		<i class="fa fa-camera fa-3x"></i>
		                    </div>
		                    <div class="col-md-9">
		                   		<h4>Photography</h4>
		                    </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="easy_steps">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-center">Easy Steps</h2>
					</div>
				</div>	
				
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="step_box">
							<div class="wrap">
								<span class="fa fa-calendar"></span>
								<div class="content">
									<h3>Choose</h3>
									<p>Choose any date and time thats best for you!</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="step_box">
							<div class="wrap">
								<span class="fa fa-mouse-pointer"></span>
								<div class="content">
									<h3>Select</h3>
									<p>Select what type best fits your situation.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="step_box">
							<div class="wrap">
								<span class="fa fa-bed"></span>
								<div class="content">
									<h3>Sit Back & Relax</h3>
									<p>Sit back and relax while our highly trained professional do all of the work.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="service_box">
							<div class="service_icon">
								<i class="fa fa-ambulance"></i>
							</div>
							<h3>Best Quality</h3>
							<p>Our professional cleaners are highly trained and have years of experience.</p>
						</div> 
					</div>
					<div class="col-sm-4">
						<div class="service_box">
						   <div class="service_icon">
							  <i class="fa fa-lock"></i>
						   </div>
							<h3>Secure</h3>
							<p>Securly pay online on our easy to-use booking system.</p>
						</div> 
					</div>
					<div class="col-sm-4">
						<div class="service_box">
							<div class="service_icon">
								<i class="fa fa-shield"></i>
							</div>
							<h3>Safety</h3>
							<p>All of our cleaners undergo background checks and in-person interviews.</p>
						</div> 
					</div>
				</div>
			</div>
		</section>

		<section id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-center">Portfolio</h2>
					</div>
				</div>	
		        <div class="row">
	                <div class="works-filter">
	                    <a href="javascript:void(0)" class="filter active" data-filter="mix">All</a>
	                    <a href="javascript:void(0)" class="filter" data-filter="branding">Branding</a>
	                    <a href="javascript:void(0)" class="filter" data-filter="web">Web</a>
	                    <a href="javascript:void(0)" class="filter" data-filter="art">Art</a>
	                    <a href="javascript:void(0)" class="filter" data-filter="logos">Logo</a>
	                </div>
	                <div id="work-grid" class="js-masonry">
	                    <!-- Begin of Thumbs Portfolio -->
	                    <div class="col-md-3 col-sm-3 col-xs-12 mix branding">
	                        <div class="img masonry-height">
	                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/image_1.png" alt="Portfolio Item">
	                            <div class="hover-overlay">
	                                <div class="hover-overlay-inner">
	                                    <div class="overlay-view">
	                                        <a href="single-project.html">
	                                            <span class="project-name">Olive Orange</span>
	                                            <hr class="split-line">
	                                            <span class="category-description">WordPress</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-3 col-xs-12 mix web">
	                        <div class="img masonry-height">
	                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/image_2.jpg" alt="Portfolio Item">
	                            <div class="hover-overlay">
	                                <div class="hover-overlay-inner">
	                                    <div class="overlay-view">
	                                        <a href="single-project.html">
	                                            <span class="project-name">PROJECT NAME</span>
	                                            <hr class="split-line">
	                                            <span class="category-description">Branding Design</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-3 col-xs-12 mix art">
	                        <div class="img masonry-height">
	                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/image_3.jpg" alt="Portfolio Item">
	                            <div class="hover-overlay">
	                                <div class="hover-overlay-inner">
	                                    <div class="overlay-view">
	                                        <a href="single-project.html">
	                                            <span class="project-name">PROJECT NAME</span>
	                                            <hr class="split-line">
	                                            <span class="category-description">Branding Design</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-3 col-xs-12 mix logos">
	                        <div class="img masonry-height">
	                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/image_4.png" alt="Portfolio Item">
	                            <div class="hover-overlay">
	                                <div class="hover-overlay-inner">
	                                    <div class="overlay-view">
	                                        <a href="single-project.html">
	                                            <span class="project-name">Viz360</span>
	                                            <hr class="split-line">
	                                            <span class="category-description">WordPress</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-3 col-xs-12 mix logos">
	                        <div class="img masonry-height">
	                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/image_6.png" alt="Portfolio Item">
	                            <div class="hover-overlay">
	                                <div class="hover-overlay-inner">
	                                    <div class="overlay-view">
	                                        <a href="single-project.html">
	                                            <span class="project-name">Dsolution</span>
	                                            <hr class="split-line">
	                                            <span class="category-description">WordPress</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-3 col-xs-12 mix branding">
	                        <div class="img masonry-height">
	                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/image_7.png" alt="Portfolio Item">
	                            <div class="hover-overlay">
	                                <div class="hover-overlay-inner">
	                                    <div class="overlay-view">
	                                        <a href="single-project.html">
	                                            <span class="project-name">Smartfleece</span>
	                                            <hr class="split-line">
	                                            <span class="category-description">WordPress</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-3 col-xs-12 mix art">
	                        <div class="img masonry-height">
	                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/image_5.jpg" alt="Portfolio Item">
	                            <div class="hover-overlay">
	                                <div class="hover-overlay-inner">
	                                    <div class="overlay-view">
	                                        <a href="single-project.html">
	                                            <span class="project-name">PROJECT NAME</span>
	                                            <hr class="split-line">
	                                            <span class="category-description">Branding Design</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-3 col-xs-12 mix branding">
	                        <div class="img masonry-height">
	                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/image_8.jpg" alt="Portfolio Item">
	                            <div class="hover-overlay">
	                                <div class="hover-overlay-inner">
	                                    <div class="overlay-view">
	                                        <a href="single-project.html">
	                                            <span class="project-name">PROJECT NAME</span>
	                                            <hr class="split-line">
	                                            <span class="category-description">Branding Design</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
		        </div>
		    </div>
		</section>

		<section id="call_to_action" class="booking_btn">
			<div class="container">
				<div class="row">
					<div class="call_item col-md-6 col-sm-6 col-xs-12">
						<div class="col-md-1">
							<span class="fa fa-book"></span>
						</div>
						<div class="col-md-7">
							<h3>Brochure</h3>
							<p class="desc">Ut wisi enim ad minim veniam,<br>ea commodo consequat.</p>
						</div>
						<div class="col-md-4">
							<a href="#" class="btn custom_btn">Download</a>
						</div>
					</div>
					<div class="call_item col-md-6 col-sm-6 col-xs-12">
						<div class="col-md-1">
							<span class="fa fa-envelope-o"></span>
						</div>
						<div class="col-md-7">
							<h3>MEET & ASK</h3>
							<p class="desc">Ut wisi enim ad minim veniam,<br>ea commodo consequat.</p>
						</div>
						<div class="col-md-4">
							<a href="#" class="btn custom_btn">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>