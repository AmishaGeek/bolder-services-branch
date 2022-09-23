<div class="site-wrap">
    <section class="main-banner inner-banner inner-banner-shape contact-us-banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-content inner-banner-content white-text">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_title(); ?></h1>
                        <div class="banner-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <?php the_field('banner_content'); ?>
                        </div>
                        <div class="contact-main">
                            <div class="site-contact">
                                <ul>
                                    <li>
                                    <?php
										$phone = get_field('phone_number','option');
										$phone_link = preg_replace("/[^0-9]/","",$phone);
									?>
                                        <a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>">
                                            <span class="icon">
                                                <img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/footer-call.svg" width="15" height="15" alt="Call Icon">
                                            </span>
                                            <div class="contact-text">
                                                <span>Phone</span>
                                                <span class="callus"><?php echo $phone; ?></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:<?php the_field('email','option') ?>" title="<?php the_field('email','option') ?>">
                                            <span class="icon">
                                                <img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/footer-mail.svg" width="15" height="15" alt="Mail Icon">
                                            </span>
                                            <div class="contact-text">
                                                <span>Email</span>
                                                <span class="site-mail"><?php the_field('email','option') ?></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php the_field('address_link','option'); ?>" target="_blank" title="<?php the_field('address','option') ?>">
                                            <span class="icon">
                                                <img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/footer-location.svg" width="13" height="17" alt="Location Icon">
                                            </span>
                                            <div class="contact-text">
                                                <span>Address</span>
                                                <span class="site-mail"><?php the_field('address','option') ?></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="35" title="Contact Us"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF BANNER -->
</div>