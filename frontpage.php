<?php
/*
Template name: FrontPage
*/
 get_header(); ?>
		<section id="home_banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="booking_from_wrap">
							<h1 class="main_title text-center">Profetional maid and cleaning services</h1>
							<div class="booking_from">
								<form method="post" action="demoform.asp">
									<div class="group-control col-md-12">
										<div class="col-md-3">
											<label for="bedroom">Bedrooms: <output></output></label>
										</div>
										<div class="col-md-9">
											<input type="range" name="bedroom" id="bedroom" min="0" max="6" data-rangeslider>
										</div>
									</div>
									<div class="group-control col-md-12">
										<div class="col-md-3">
											<label for="bathrooms">Bathrooms: <output></output></label>
										</div>
										<div class="col-md-9">
											<input type="range" name="bathrooms" id="bathrooms" min="0" max="6" data-rangeslider>
										</div>
									</div>
									<div class="group-control col-md-12">
										<div class="col-md-3">
											<label for="zip">Zip Code:</label>
										</div>
										<div class="col-md-9">
											<input type="number" name="zip" id="zip" placeholder="Zip Code">
										</div>
									</div>
									
									<div class="group-control text-center col-md-12">
										<div class="col-md-3">
											<label for="lcleaning">Select services type:</label>
										</div>
										<div class="col-md-9">
											<div class="radio_btn">
												<input type="radio" name="cleaning" id="lcleaning" value="Light Clean" checked><label for="lcleaning">Light Clean</label>
											</div>
									
											<div class="radio_btn">
												<input type="radio" name="cleaning" id="fcleaning" value="Full Clean"><label for="fcleaning">Full Clean</label>
											</div>
											<div class="radio_btn">
												<input type="radio" name="cleaning" id="dcleaning" value="Deep Clean"><label for="dcleaning">Deep Clean</label> 
											</div>
										</div>
									</div>
									
									<div class="group-control no_padding col-md-12">
										<input type="submit" value="Book Now!" class="btn custom_btn">
									</div>
								</form>
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
		
		
		<section id="call_to_action" class="booking_btn">
			<div class="container">
				<!-- <div class="row">
					<a href="#" class="btn custom_btn">Book Now!</a>
				</div> -->
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
<?php get_footer(); ?>