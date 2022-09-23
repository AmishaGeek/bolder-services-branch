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
                        <a href="<?php the_field('contact_us'); ?>" class="sec-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s" title="Contact Us">Contact US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF BANNER -->
</div>