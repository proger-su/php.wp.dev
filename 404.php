<?php
the_post();
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h1>404</h1>
			<p class="text-danger">Sorry, the requested information is not found</p>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar('inner'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

