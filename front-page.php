<?php
the_post();
get_header();

$hero['image'] = get_option('ics_hero_image');
$hero['overlay'] = get_option('ics_hero_overlay');
$hero['title'] = get_option('ics_hero_title');
$hero['subtitle'] = get_option('ics_hero_subtitle');

$hero['image'] = $hero['image'] ? $hero['image'] : get_template_directory_uri() . '/img/hero.jpg';
$hero['overlay'] = $hero['overlay'] ? $hero['overlay'] : '#000';
?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div id="hero-section" style="background-image: url('<?php echo $hero['image']; ?>');">
				<div class="overlay" style="background-color: <?php echo $hero['overlay']; ?>;"></div>
				<div class="addit">
					<div class="hero-container">
						<?php if (!empty($hero['title'])) { ?>
							<h2><?php echo $hero['title']; ?></h2>
						<?php } ?>
						<?php if (!empty($hero['subtitle'])) { ?>
							<p><?php echo $hero['subtitle']; ?></p>
						<?php } ?>
					</div>
				</div>
			</div>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar('home'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

