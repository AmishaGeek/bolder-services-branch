<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bolder_Services
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary" title="Skip to content"><?php esc_html_e('Skip to content', 'bolder-services'); ?></a>

		<header id="masthead" class="site-header">
			<div class="header-top-bar for-des">
				<div class="container">
					<div class="head-wp">
						<div class="row">
							<div class="col-lg-6">
								<div class="header-top-icon">
									<?php
										$phone = get_field('phone_number','option');
										$phone_link = preg_replace("/[^0-9]/","",$phone);
									?>
									<a href="tel:<?php echo $phone_link; ?>" title="Call to <?php echo $phone; ?>">
										<span>
											<img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/phone-icon.svg" width="30" height="30" alt="Phone icon">
										</span>
										<span class="callus"><?php echo $phone; ?></span>
									</a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="header-top-icon text-right">
									<a href="<?php the_field('facebook_link','option'); ?>" title="Follow On Facebook" target="_blank">
										<span>
											<img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/facebook-icon.svg" width="30" height="30" alt="Facebook icon">
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-nav">
				<div class="container">
					<div class="head-wp">
						<div class="row">
							<div class="col-lg-12">
								<div class="site-branding for-mob">
									<?php
									the_custom_logo();
									?>
								</div>
								<div class="header-menu">
									<nav id="site-navigation" class="main-navigation">
										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
											<span></span>
											<span></span>
											<span></span>
										</button>
										<div class="header-mobile-menu">
											<?php
											wp_nav_menu(
												array(
													'theme_location' => 'menu-1',
													'menu_id'        => 'primary-menu',
												)
											);
											?>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>