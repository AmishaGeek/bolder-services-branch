<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
					<h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->

<div class="inner-page-text">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<main id="primary" class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
