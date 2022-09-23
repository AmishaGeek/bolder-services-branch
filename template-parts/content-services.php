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
        <section class="service-cards-section">
            <div class="container">
                <div class="service-cards-wp">
                    <?php
                        if (have_rows('sub_services_list')) {
                            while (have_rows('sub_services_list')) {
                                the_row(); ?>
                                    <div class="service-card">
                                        <div class="service-card-content">
                                            <div class="service-card-img">
                                                <div class="bg-img" style="background-image: url('<?php the_sub_field('sub_service_image'); ?>');"></div>
                                            </div>
                                            <div class="service-card-data text-center">
                                                <h3 class="h3-title"><?php the_sub_field('sub_service_title'); ?></h3>
                                                <div class="service-card-text">
                                                    <?php the_sub_field('sub_service_content'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
    </div>

</div>

<?php get_template_part('template-parts/content', 'apprentice-section'); ?>
<!-- END OF APPRENTICE  -->