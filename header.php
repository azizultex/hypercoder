<?php 
	$ppm_options = get_option('hypercoder_setting');
	$favicon = $ppm_options['favicon'][0];
	$logo = $ppm_options['ppm_logo'][0];
	$top_phone = $ppm_options['top_phone'];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p class="pull-left">Stay Connected:</p>
						<?php echo hypercoder_social_media(); ?>
					</div>
					<div class="col-md-offset-5 col-md-3">
						<div class="phone text-right">
							<p><span class="fa fa-phone"></span>Call us now:<a href="tel:<?php echo $top_phone; ?>"><?php echo $top_phone; ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header>
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hypercoder" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
							<img alt="hypercoder" src="<?php echo $logo; ?>">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="hypercoder">
						<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'container'		=> 'ul',
							'menu_class' 	=> 'nav navbar-nav navbar-right',
							'menu_id' 	=> '',
							'fallback_cb'	=> 'wp_page_menu'
							//'items_wrap'      => '<ul>%3$s</ul>'
							) ); 
						?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>