<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bolder_Services
 */

get_header();
?>
<!-- Banner Start -->
<section class="main-banner inner-banner rest-banner sec-1920" style=" background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/09/banner-img-min.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="banner-content">
					<h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bolder-services' ); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->

<!-- 404 Page Section Start -->
<div class="inner-page-text error-404 not-found text-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img width="1200" height="937" src="<?php echo home_url(); ?>/wp-content/themes/bolder-services/assets/images/404.svg" width="570" height="484" alt="404 Not Found!">
			</div>
		</div>
	</div>
</div>
<!-- 404 Page Section End -->

<?php
get_footer();
