<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<?php if(is_home()) { ?>
		<main id="primary" class="site-main" style="background-color: rgb(247, 247, 247);">
	<?php } else {?>
		<main id="primary" class="site-main">
	<?php } ?>
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', get_post_type() );
		}
		?>
	</main><!-- #primary -->
<?php
//get_sidebar();
get_footer();
