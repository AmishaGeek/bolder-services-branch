<?php
/**
 * Template Name: Gallery
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php get_template_part( 'template-parts/content', 'gallery' );?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();