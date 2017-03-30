<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<title></title>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="container">
			<nav id="header-nav" class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-content">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<?php
				wp_nav_menu(array(
					'menu' => 'Main menu',
					'container_id' => 'main-nav-content',
					'container_class' => 'collapse navbar-collapse',
					'menu_class' => 'nav navbar-nav',
					'walker' => new BootstrapNavMenuWalker()
				));
				?>
			</nav>
		</div>