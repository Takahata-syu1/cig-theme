<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="email=no,telephone=no,address=no" />
	<title>
		<?php if (is_home()) { // トップページ
		?>
			<?php bloginfo('name'); ?>
		<?php } else { // その他
		?>
			<?php wp_title(''); ?> | <?php bloginfo('name'); ?>
		<?php } ?>
	</title>

	<!-- style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!-- fontawesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<h1 class="header__logo">
			<!--- サイトロゴ --->
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/top-logo.svg" alt="<?php bloginfo('name'); ?>">
			</a>
		</h1>
		<div class="header__arche-wrap">
			<img class="change arche-img" src="<?php echo get_template_directory_uri(); ?>/img/header-arche_pc.svg">
		</div><!--arche-wrap-->

		<?php if (is_home() || is_front_page()) : ?>
			<div class="header__toppage">
				<div class="body">
					<div class="inner">
						<h2><img class="top-main-copy change" src="<?php echo get_template_directory_uri(); ?>/img/top-main-copy_pc.svg"></h2>
						<figure><img class="top-swing-man" src="<?php echo get_template_directory_uri(); ?>/img/top-swing-man.png"></figure>
					</div><!--inner-->
				</div><!--body-->
				<img class="top-main-img" src="<?php echo get_template_directory_uri(); ?>/img/top-main-img.jpg">
			</div>
		<?php endif; ?>

		<nav class="header__nav-wrap">
			<div class="inner">
				<?php get_template_part('template-parts/nav'); ?>
			</div>
		</nav>
		<div class="header__burge-nav-warap">
			<?php get_template_part('template-parts/sp-nav'); ?>
		</div>
		<!--burge-nav-->
	</header>
