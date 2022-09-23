<?php $frontpage_id = get_option( 'page_on_front' ); ?>

<section class="apprentice-section bg-img sec-1920" style="background-image: url('<?php the_field('apprentice_background_image',$frontpage_id); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="apprentice-content white-text text-center">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('apprentice_title',$frontpage_id); ?></h2>
                    <div class="apprentice-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <?php the_field('apprentice_content',$frontpage_id); ?>
                    </div>
                    <a href="<?php the_field('apprentice_page_link',$frontpage_id); ?>" class="sec-btn btn-transparent wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s" title="<?php the_field('apprentice_title',$frontpage_id); ?> Read More">Read More</a>
                </div>
                <div class="site-branding footer-branding">
                    <?php
                    the_custom_logo();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>