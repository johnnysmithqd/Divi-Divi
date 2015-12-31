<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>

	<!-- Owl Carousel Assets -->
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/owl.theme.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<!-- site-header -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div id="owl-demo" class="owl-carousel">
				<div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/fullimage1.jpg" alt="The Last of us"></div>
				<div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/fullimage2.jpg" alt="GTA V"></div>
				<div class="item"><img src="<?php echo get_template_directory_uri() ?>/assets/img/fullimage3.jpg" alt="Mirror Edge"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="main-nav"
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Profile</a>
					</li>
					<li class="disabled">
						<a href="#">Messages</a>
					</li>
					<li class="dropdown pull-right">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>