<?php
the_post();
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<?php
			$purchased = filter_input(INPUT_GET, "purchased");
			if ($purchased) {
				?>
				<div class="alert alert-success alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<strong>Спасибо!</strong> Заказ отправлен. С вами свяжутся в ближайшее время!
				</div>
			<?php } ?>
			<div class="thumbnail product-thumb">
				<?php the_post_thumbnail(); ?>
				<div class="caption">
					<h3><?php the_title(); ?></h3>
					<?php echo the_excerpt(); ?>
				</div>
			</div>
			<?php the_content(); ?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar('inner'); ?>
		</div>
	</div>
</div>
<?php
get_footer();

