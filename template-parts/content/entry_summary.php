<?php
/**
 * Template part for displaying a post's summary
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

global $post;
?>

<div class="entry-summary">
	<!--<div class="entry-graphic">
	<?php
		//get_template_part( 'template-parts/blog/blog-attached-image');
	?>
	</div>-->
	<?php the_excerpt(); ?>
	<a class="read-more" href="<?php the_permalink();?>">Read more...</a>
</div><!-- .entry-summary -->
