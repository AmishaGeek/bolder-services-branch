<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bolder_Services
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-path sec-1920"></div>
	<div class="footer-main-wp">
		<div class="top-footer sec-1920">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="site-branding footer-branding">
							<?php
							the_custom_logo();
							?>
						</div>
						<div class="footer-content text-center white-text">
							<div class="footer-tag-line">
								<?php the_field('footer_content', 'option'); ?>
							</div>
							<div class="site-contact">
								<ul>
									<li>
										<?php
										$phone = get_field('phone_number', 'option');
										$phone_link = preg_replace("/[^0-9]/", "", $phone);
										?>
										<a href="tel:<?php echo $phone_link; ?>" title="Phone">
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
										<a href="mailto:<?php the_field('email', 'option') ?>" title="<?php the_field('email', 'option') ?>">
											<span class="icon">
												<img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/footer-mail.svg" width="15" height="15" alt="Mail Icon">
											</span>
											<div class="contact-text">
												<span>Email</span>
												<span class="site-mail"><?php the_field('email', 'option') ?></span>
											</div>
										</a>
									</li>
									<li>
										<a href="<?php the_field('address_link', 'option'); ?>" target="_blank" title="<?php the_field('address', 'option') ?>">
											<span class="icon">
												<img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/footer-location.svg" width="13" height="17" alt="Location Icon">
											</span>
											<div class="contact-text">
												<span>Address</span>
												<span class="site-mail"><?php the_field('address', 'option') ?></span>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-box">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12">
						<div class="footer-bottom-text">
							<div class="footer-bottom-link">
								<ul>
									<!-- <li>© <?php echo date('Y'); ?> </li> -->
									<li>Bolder Services, LLC</li>
									<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
									<li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms of Service">Terms of Use</a></li>
									<li><a href="<?php echo home_url(); ?>/cookie-policy" title="Cookies Policy">Cookie Policy</a></li>
								</ul>
							</div>
							<div class="footer-other-link">
								<p>Website Design, SEO, & Online Marketing by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->
</footer>
	<!-- CTA Button -->
	<div class="cta-btn">
		<a href="tel:<?php echo $phone_link; ?>" class="cta-wp sec-btn" title="Call <?php echo $phone; ?>">
			<span>Call</span> <span class="callus"><?php echo $phone; ?></span>
		</a>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<div class="modal fade common-popup" id="career">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="popup-title">
				<h2 class="h2-title">Apply <span>Now</span></h2>
				<button type="button" class="close close-popup" data-dismiss="modal"><i class="fas fa-times"></i></button>
			</div>
			<div class="common-popup-overflow">
				<div class="common-popup-text" data-simplebar="">
					<p>Fill out the form below and attach your resume and we will get back to you!</p>
					<div class="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="49" title="Apply Now"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>