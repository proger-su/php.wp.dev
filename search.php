<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h1>Search result:</h1>
			<?php
			$s = filter_input(INPUT_GET, 's');
			if ($s) {
				get_template_part('partials/loop');
			} else {
				?>
				<p class="text-danger">You type an empty request!</p>
			<?php } ?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar('inner'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>