<?php get_header(); ?>
<img class="about-page-image" src="<?php echo bloginfo('template_url') ?>/assets/img/banner-packages.png">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 no-padding">
			<div class="pacotes-assets">
				<h3>
					Pacotes
				</h3>
			</div>
		</div>
	</div>
</div>
<section id="pacotes">
	<div class="row">
		<div class="col-lg-12 no-padding">
			<div class="pacotes-wrapper">
				<div class="row" id="moreCourses">
					<div class="thumbnails">
						<div class="col-xs-6 col-md-4 col-lg-4 col-lg-offset-2 col-md-offset-2">							
							<div class="thumbnail">
								<img class="img-responsive" src="
								<?php echo bloginfo('template_url') ?>/assets/img/luademel.jpg">								
								<div class="label label-success price">
									<span class="glyphicon glyphicon-tag"></span> 
									<sup>R$</sup> 150
								</div>					
								<div class="caption">									
									<h3>Lua de Mel</h3>									
									<p>Desfrute desse momento único ao lado do seu Amor. O <span class="span-orange">Divi-</span><span class="span-green">Divi</span> garante surpeende-lo(a)!</p>									
									<p>
										<a href="lua-de-mel" class="buy-now">Saiba Mais</a> 
									</p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-6 -->
						<div class="col-xs-6 col-md-4 col-lg-4">							
							<div class="thumbnail">
								<img class="img-responsive" src="
								<?php echo bloginfo('template_url') ?>/assets/img/reveilon.jpg">
								<div class="label label-info price">
									<span class="glyphicon glyphicon-tag">
									</span> Esgotado!
								</div>								
								<div class="caption">									
									<h3>Reveilon</h3>
									<p>Venha passar o ano novo no <span class="span-orange">Divi-</span><span class="span-green">Divi</span>!</p>

									<p>
										<a href="#" class="buy-now">Compre Já!</a> 
									</p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-6 -->
					</div><!-- end row -->
				</div><!-- end moreCourses -->
				<h4><i>*todos os pacotes são cobrados como uma taxa adicional ao preço final da reserva.</i></h4>
			</div>
		</div><!-- col-12 -->
	</div><!-- row -->
</section>
<?php include 'includes/pre-footer.php'; ?>
<?php get_footer(); ?>
