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
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-content text-center white-text">						
						<div class="footer-tag-line">
							<p>Excellence in HVAC installation and maintenance, helping each customer make an informed decision. 24/7 emergency service available.</p>
						</div>
						<div class="site-contact">
							<ul>
								<li>
									<a href="">
										<span class="icon">
											<img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/footer-call.svg" width="15" height="15" alt="Call Icon">
										</span>
										<div class="contact-text">
											<span>Phone</span>
											<span class="callus">(608) 448-3769</span>
										</div>
									</a>
								</li>
								<li>
									<a href="mailto:info@bolderservices.com">
										<span class="icon">
											<img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/footer-mail.svg" width="15" height="15" alt="Mail Icon">
										</span>
										<div class="contact-text">
											<span>Email</span>
											<span class="site-mail">info@bolderservices.com</span>
										</div>
									</a>
								</li>
								<li>
									<a href="https://goo.gl/maps/c6CdaKmGSmXHFKTq7" target="_blank">
										<span class="icon">
										<img src="<?php echo home_url() ?>/wp-content/themes/bolder-services/assets/images/footer-location.svg" width="13" height="17" alt="Location Icon">
										</span>
										<div class="contact-text">
											<span>Address</span>
											<span class="site-mail">1055 Lake St. Baraboo, WI 53913</span>
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
								<li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms of Service">Terms of Service</a></li>
								<li><a href="<?php echo home_url(); ?>/cookie-policy" title="Cookies Policy">Cookies Policy</a></li>
							</ul>
						</div>
						<div class="footer-other-link">
							<p>Web Design, SEO, & Online Marketing by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Careers Form -->
<div class="modal fade" id="careers">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body overflow-text" data-simplebar="">
				<h5 class="modal-title h3-title">Apply Now</h5>
				<p>Fill out the form below and attach your resume and we will get back to you!</p>
				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="49" title="Apply Now"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>