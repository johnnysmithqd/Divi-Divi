<?php
get_header();
the_post();
?>

<section id="checkout-page">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5">
			</div>
			<div class="col-lg-5 col-lg-offset-2">
				<?php echo apply_filters("the_content", "[woocommerce_checkout]"); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>



<!--

-->