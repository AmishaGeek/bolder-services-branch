<section class="main-banner sec-1920" style="background-image: url('<?php the_field('banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center white-text">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('banner_title'); ?></h1>
                    <div class="banner-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <p><?php the_field('banner_sub_title'); ?></p>
                    </div>
                    <div class="banner-btn">
                        <?php
                            $phone = get_field('phone_number','option');
                            $phone_link = preg_replace("/[^0-9]/","",$phone);
                        ?>
                        <a href="tel:<?php echo $phone_link; ?>" class="sec-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s" title="Call to <?php echo $phone; ?>">Call <span class="callus"><?php echo $phone; ?></span></a>
                        <a href="<?php the_field('contact_button_page_link'); ?>" class="sec-btn btn-transparent wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.5s" title="Contact Us">Contact US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF BANNER -->

<section class="purpose">
    <div class="purpose-bg bg-img" style="background-image: url('<?php the_field('purpose_background_image'); ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="purpose-content text-center white-text">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('purpose_title'); ?></h2>
                    <div class="purpose-content wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <?php the_field('purpose_content'); ?>
                    </div>
                    <a href="<?php the_field('purpose_page_link'); ?>" class="sec-btn btn-transparent wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s" title="<?php the_field('purpose_title'); ?> Read More">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF PURPOSE -->

<div class="main-service-sec sec-1920">
    <?php
        if (have_rows('service')) :
            $service_counter=1;
            while (have_rows('service')) : the_row();
                if ($service_counter % 2 == 0) : ?>
                    <section class="service-row odd sec-1920">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-lg-1 order-2">
                                    <div class="service-content wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <h2 class="h2-title"><?php the_sub_field('service_title'); ?></h2>
                                        <div class="service-text">
                                                <?php the_sub_field('service_content'); ?>
                                            <a href="<?php the_sub_field('service_page_link'); ?>" class="sec-btn btn-transparent-1" title="<?php the_sub_field('service_title'); ?> Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-2 order-1">
                                    <div class="service-img-wp wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php  else: ?>
                    <section class="service-row even sec-1920">
                        <div class="for-mob wow fadeup-animation animated" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <span class="sub-title">Our Services</span>
                        </div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="service-img-wp wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-content wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <h2 class="h2-title"><?php the_sub_field('service_title'); ?></h2>
                                        <div class="service-text">
                                            <?php the_sub_field('service_content'); ?>
                                            <a href="<?php the_sub_field('service_page_link'); ?>" class="sec-btn btn-transparent-1" title="<?php the_sub_field('service_title'); ?> Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
                endif;
                $service_counter++;
            endwhile;
        endif; 
    ?>
</div>
<!-- END OF MAIN SERVICES -->

<section class="gallery-section sec-1920">
    <div class="container" id="gallery">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center white-text">
                    <h2 class="h2-title"><?php the_field('gallery_title'); ?></h2>
                </div>
                <div class="gallery-slider">
                    <?php
                    $images = get_field('gallery_image');
                    if ($images) :
                        $galllery_counter = 1;
                        foreach ($images as $image) : ?>
                            <div class="gallery-img">
                                <a data-fancybox="Gallery" title="Gallery-<?php echo $galllery_counter; ?>" href="<?php echo esc_url($image['url']); ?>">
                                    <div class="bg-img" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
                                </a>
                            </div>
                            <?php 
                            $galllery_counter++;
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF GALLERY SECTION -->

<section class="career-section" id="careers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="career-img wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="bg-img" style="background-image: url('<?php the_field('careers_image'); ?>');"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="career-content wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h2 class="h2-title"><?php the_field('careers_title'); ?></h2>
                    <div class="career-text">
                        <?php the_field('careers_content'); ?>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#career" class="sec-btn" title="<?php the_field('careers_title'); ?> Apply Now">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF CAREER SECTION -->


<!-- <div class="site-wrap sec-1920"></div> -->


<?php get_template_part('template-parts/content', 'apprentice-section'); ?>
<!-- END OF APPRENTICE  -->