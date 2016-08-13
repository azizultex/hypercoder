<?php 
	$ppm_options = get_option('hypercoder_setting');
	$copyright_text = $ppm_options['copyright_text'];
	$logo = $ppm_options['ppm_logo'][0];
?>	
		<footer>
			<div class="container">
				<div class="row">
					<div class="footer_top">
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="push " style="height:65px"></div>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logofooter.png" class="img-responsive" alt="" /></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="push " style="height:80px"></div>
							<a href="#"><span class="fa fa-shopping-cart pull-left"></span><h4>Our Shop</h4></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="push " style="height:80px"></div>
							<a href="#"><span class="fa fa-database pull-left"></span><h4>Our Portfolio</h4></a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="push " style="height:80px"></div>
							<a href="#"><span class="fa fa-shopping-cart pull-left"></span><h4>Our Shop</h4></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="footer_widget">
						<?php dynamic_sidebar( 'footer' ); ?>
					</div>
				</div>
			</div>
			<div class="footer_copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php echo $copyright_text; ?>
						</div>
					</div>
				</div>
			</div>
		</footer>
    	<?php wp_footer(); ?>
	</body>
</html>
