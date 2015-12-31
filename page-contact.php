<?php get_header(); ?>
<!-- Modal -->
<div class="modal fade" id="myModal-localizacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="modal-title" id="myModalLabel">Mapa Divi-Divi</h1>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12">	
						<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7937.712002814944!2d-35.1780594!3d-5.8758549!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ff2c6c1fcc3d%3A0xc5682ea46e71de88!2sDIVI-DIVI+Praia+Hotel!5e0!3m2!1spt-BR!2sbr!4v1445363545292" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->

<img class="about-page-image" src="<?php echo bloginfo('template_url') ?>/assets/img/banner-contato.png">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 no-padding">
			<div class="contact-assets">
				<h3>
					Contato
				</h3>
			</div>
		</div>
	</div>
</div>
<section id="contact">
	<div class="row">
		<div class="col-lg-12 no-padding">
			<div class="contact-wrapper">
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href=".tab1" data-toggle="tab">Divi-Divi</a></li>
						<li><a href=".tab2" data-toggle="tab">Dúvidas Frequentes</a></li>
						<li><a href=".tab3" data-toggle="tab">Avalie o Divi-Divi</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active tab1" id="tab1">
							<h2>Informações do Hotel.</h2>
							<table class="contact-tab">
								<tbody>
									<tr>
										<th>Telefone :</th>
										<td><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +55 (84) 4006-3900</td>
									</tr>
									<tr>
										<th>Email :</th>
										<td><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> reservas@dividivi.com.br</td>
									</tr>
									<tr>
										<th>Endereço :</th>
										<td><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Ponta Negra - Rua Élia Barros 248.</td>
									</tr>
									<tr>
										<th>CEP :</th>
										<td><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> 59090-140</td>
									</tr>
									<tr>
										<th>CNPJ :</th>
										<td><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> 003.452.938/0001-30</td>
									</tr>
									<tr>
										<th>Localização :</th>
										<td><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Clique <a class="" href="" data-toggle="modal" data-target="#myModal-localizacao">aqui</a> para ver o mapa.</td>
									</tr>
								</tbody>
							</table>
						</div><!-- end tab-pane -->
						<div class="tab-pane tab2" id="tab1">
						</div><!-- end tab-pane -->
						<div class="tab-pane tab3" id="tab2">
						</div><!-- end tab-pane -->
					</div><!-- end tab-content -->
				</div><!-- end tabbable -->
			</div><!-- contact-wrapper -->
		</div><!-- col-12 -->
	</div><!-- row -->

	<div class="row">
		<div class="col-lg-12 no-padding">
			<div class="contact-assets">
				<h3>
					Fale conosco
				</h3>
			</div>
		</div>
	</div>

	<?php 
	if (isset($_POST['submit'])) {
		?>
		<div class="row">
			<div class="col-lg-12 no-padding">
				<div class="message-sent">
					<div class="alert alert-success message-sent" role="alert">
						Mensagem enviada com Sucesso! entraremos em contato o mais rápido possível!
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	?>
	<?php include 'contact-form.php'; ?>
</section>
<?php include 'includes/pre-footer.php'; ?>
<?php get_footer(); ?>

