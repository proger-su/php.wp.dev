<div class="row">
	<?php
	if (have_posts()) {
		$i = 1;
		while (have_posts()) {
			the_post();
			?>
			<form method="GET" action="<?php echo site_url('/cart') ?>" class="col-sm-12 col-md-6">
				<input type="hidden" name="product-id" value="<?php the_ID(); ?>">
				<div class="thumbnail">
					<?php if (has_post_thumbnail()) { ?>
						<a href="<?php the_permalink(); ?>">
							<?php
							the_post_thumbnail('medium');
							?>
						</a>
					<?php } ?>
					<div class="caption">
						<h4><?php the_title(); ?></h4>
						<?php the_excerpt(); ?>
						<p>
							<a href="<?php the_permalink(); ?>" class="btn btn-xs btn-primary" role="button">Посмотреть</a>
							<input class="btn btn-xs btn-default" type="submit" value="Купить">
						</p>
					</div>
				</div>
			</form>
			<?php
			if ($i % 2 === 0) {
				?>
				<div class="clearfix"></div>
				<?php
			}
			$i++;
		}
	} else {
		?>
		<p class="text-danger">Nothing found at your request</p>
	<?php } ?>
</div>