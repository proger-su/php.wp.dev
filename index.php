<?php
the_post();
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h1><?php the_title(); ?></h1>
			<?php bootstrap_breadcrumb('Home'); ?>
			<?php the_content(); ?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar('inner'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

