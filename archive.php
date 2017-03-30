<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h1><?php single_cat_title(); ?></h1>
			<ul class="list-group">
				<?php
				while (have_posts()) {
					the_post();
					?>
					<li class="list-group-item">
						<h4 class="list-group-item-heading">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<?php
							$labels = wp_get_post_tags(get_the_ID());
							$colors = array('label-default', 'label-primary', 'label-success', 'label-info', 'label-warning', 'label-danger');
							if (is_array($labels) && !empty($labels)) {
								foreach ($labels as $label) {
									?>
									<a href="<?php echo get_tag_link($label->term_id); ?>" class="label <?php echo $colors[array_rand($colors)]; ?>"><?php echo $label->name; ?></a>
									<?php
								}
							}
							?></h4>
						<?php if (has_post_thumbnail()) { ?>
							<a href="<?php the_permalink(); ?>">
								<?php
								the_post_thumbnail('thumbnail', array(
									'class' => 'alignleft img-thumbnail'
								));
								?>
							</a>
							<?php
						}
						the_excerpt();
						?>
						<p><em><?php the_time('F jS, Y'); ?></em></p>
						<div class="clearfix"></div>
					</li>
				<?php } ?>
			</ul>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar('inner'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>