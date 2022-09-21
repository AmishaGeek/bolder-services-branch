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
		<div class="site-info">


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
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
