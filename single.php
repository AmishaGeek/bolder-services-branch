<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bolder_Services
 */

get_header();
?>
<section class="main-banner inner-banenr rest-banner" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/09/banner-img-min.jpg');">
	<div class="sec-wp">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="inner-banenr-wp white-text">
						<div class="inner-banenr-content wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
							<h1 class="h2-title"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="inner-page-text">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="content-area">
					<main id="primary" class="site-main">

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bolder-services' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bolder-services' ) . '</span> <span class="nav-title">%title</span>',
								)
							);

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
					</div><!-- #primary -->
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
