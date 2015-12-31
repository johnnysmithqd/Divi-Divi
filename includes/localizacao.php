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
<section id="localizacao">
	<div class="row">
		<div class="col-lg-7 no-padding">
			<div class="localizacao-assets">
				<h3>
					Localização
				</h3>
				<a href="" data-toggle="modal" data-target="#myModal-localizacao">
					<ul class="grid2 cs-style-3 no-padding">
						<li>
							<figure>
								<div><img class="localizacao-map" src="<?php echo bloginfo('template_url') ?>/assets/img/dividivimap.png"></div>
								<figcaption>
									<h2>Divi-Divi</h2>
									<span>Localização</span>
									<button class="btn-acmd-3 pull-right">Clique para abrir o mapa!</button>
								</figcaption>
							</figure>
						</li>
					</ul>
				</a>
			</div>
		</div>
		<div class="col-lg-5 no-padding">
			<div class="localizacao-assets">
				<h3>
					Galeria
				</h3>
				<a href="#">
					<ul class="grid2 cs-style-3 no-padding">
						<li>
							<figure>
								<div><img class="localizacao-map" src="<?php echo bloginfo('template_url') ?>/assets/img/g29.jpg"></div>
								<figcaption>
									<h2>Divi-Divi</h2>
									<span>Galeria</span>
									<button class="btn-acmd-3 pull-right">Clique para ir a Galeria!</button>
								</figcaption>
							</figure>
						</li>
					</ul>
				</a>
			</div>
		</div>
	</div>
</section>
