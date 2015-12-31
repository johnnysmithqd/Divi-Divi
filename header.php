<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>

<!--

-->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-1.11.3.min.js"></script>
<link href="<?php echo get_template_directory_uri() ?>/assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">


</head>


<body <?php body_class(); ?>>
	<!-- site-header -->
	<!-- Modal -->
	<div class="modal fade" id="myModalmsg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 class="modal-title" id="myModalLabel">Contato</h1>
				</div>
				<div class="modal-body">
					<?php include 'contact-form.php'; ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 class="modal-title" id="myModalLabel">Reserva</h1>
				</div>
				<div class="modal-body">
					<?php include 'includes/omnibees.php'; ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

	<nav id="fixedbar" class="navbar navbar-default navbar-fixed-top main-nav" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<a class="navbar-brand"><img class="brand-logo" src="<?php echo bloginfo('template_url') ?>/assets/img/divihighresglow2.png"></a>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav navbar main-nav-links">
				<li class="link-effect"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Principal</a></li>
				<li class="link-effect"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/about">Hotel</a></li>
				<li class="link-effect"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/acomodacoes">Acomodações</a></li>
				<li class="link-effect"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/packages">Pacotes</a></li>
				<li class="link-effect"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/natal">Natal</a></li>
				<li class="link-effect"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">Contato</a></li>
				<li class="pull-right"><!-- Button trigger modal -->
					<a class="btn-acmd-1" href="" data-toggle="modal" data-target="#myModal">Reserve Já!</a>
					<!-- <a class="btn-acmd-1 toggle-button">Reserve Já!</a> -->
				</li>


			</ul>

		</div><!-- /.navbar-collapse -->
	</nav>
	<div class="contact-fixed-button">
		<a class="hvr-grow-rotate" href="" data-toggle="modal" data-target="#myModalmsg"><img class="contact-icon img-responsive" src="<?php echo bloginfo('template_url') ?>/assets/img/contact-icon.png"></a>
	</div>