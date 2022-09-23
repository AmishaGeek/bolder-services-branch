<div class="site-wrap">

    <section class="main-banner inner-banner inner-banner-shape" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content inner-banner-content text-center white-text">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('banner_title'); ?></h1>
                        <div class="banner-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <?php the_field('banner_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF BANNER -->

    <div class="site-wrap-content">

        <section class="purpouse-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="purpouse-main-content text-center">
                            <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('title'); ?></h2>
                            <div class="purpouse-main-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <?php the_field('content'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF PURPOSE MAIN -->
        
    </div>

</div>

<?php get_template_part('template-parts/content', 'apprentice-section'); ?>
<!-- END OF APPRENTICE  -->