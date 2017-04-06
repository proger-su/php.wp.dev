<?php
$is_submit = filter_input(INPUT_POST, 'product-by');

if($is_submit){
	$product_id = filter_input(INPUT_POST, 'product-id', FILTER_SANITIZE_NUMBER_INT);
	$product_name = filter_input(INPUT_POST, 'product-name', FILTER_SANITIZE_STRING);
	$order_comment = filter_input(INPUT_POST, 'order-comment', FILTER_SANITIZE_STRING);
}



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
			if ($product) {
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
				<form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
					<div class="row">
						<div class="col-sm-6">
							<div class="thumbnail">
								<?php echo get_the_post_thumbnail($product->ID); ?>
								<div class="caption">
									<h3><?php echo $product->post_title; ?></h3>
									<?php echo get_the_excerpt($product->ID); ?>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<input type="hidden" name="product-name" value="<?php echo $product->post_title; ?>">
							<input type="hidden" name="product-id" value="<?php echo $product->ID; ?>">
							<div class="form-group">
								<label>Комментарий</label>
								<textarea class="form-control" name="order-comment" rows="15"></textarea>
							</div>
							<input type="submit" class="btn btn-primary btn-block" name="product-by" value="Купить">
						</div>
					</div>
				</form>
				<?php
			}
			?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar('inner'); ?>
		</div>
	</div>
</div>
<?php
get_footer();

