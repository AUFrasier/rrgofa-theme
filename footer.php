<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<footer id="colophon" class="site-footer">
	<div class="footer-container">
		<?php 
			if (!is_page('contact-us') && !is_front_page()) {
				get_template_part('template-parts/footer/footer-actions');
			} 
		?>
		<div class="footer-content container-fluid">
		<?php //get_template_part('template-parts/footer/footer-contact') ?>
		<?php //get_template_part('template-parts/footer/footer-logo') ?>
		<?php get_template_part( 'template-parts/footer/footer-menu' ); ?>
		<div class="row sub-footer">
		<?php get_template_part( 'template-parts/footer/copyright-bar' ); ?>
		<?php get_template_part( 'template-parts/footer/footer-social' ); ?>
		</div>
		</div><!-- .footer-content -->
	</div><!-- .footer-container -->
	
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
