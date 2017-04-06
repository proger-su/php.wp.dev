<?php
the_post();
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h1><?php the_title(); ?></h1>
			<?php
			$user = wp_get_current_user();
			$product = (int) filter_input(INPUT_GET, 'product-id', FILTER_SANITIZE_NUMBER_INT);
			if($product){
				$product = get_post($product);
			}
			
			if (!$user->ID) {
				?>
				<p class="text-danger">Вы не авторизированы!!!</p>
				<?php
			} else if (!$product) {
				?>
				<p class="text-danger">Товара не существует, либо он удален!!!</p>
				<?php
			} else {
				?>
				<p class="text-success">Все ок</p>
				<?php
			}
			?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar('inner'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

