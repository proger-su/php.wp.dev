<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h1><?php
				if (is_archive()) {
					the_archive_title();
				} else {
					single_cat_title();
				}
				?></h1>
			<?php bootstrap_breadcrumb('Home'); ?>
			<?php get_template_part('partials/loop') ?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar('inner'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>