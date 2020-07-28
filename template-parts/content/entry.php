<?php
/**
 * Template part for displaying a post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if(is_home()) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
		<div class="container-fluid">
			<div id="bond">
				<?php
					$img = '';
					if ( has_post_thumbnail() ) {
						$img = get_the_post_thumbnail( $post->ID, 'related-thumbnail', array( 'title' => $title, 'alt' => $title ) );
					}
					else {
						$attachments = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image',  'numberposts' => 1 ) );

						if ( count( $attachments ) > 0 ) {
							$img = array_shift( $attachments );
							$img = wp_get_attachment_image( $img->ID, 'related-thumbnail', true );
						}
					}
				?>
				<?php if ( $img != '' ) {?>
					<div class="row align-items-center">
						<div class="col-lg-4">
							<div class="entry-graphic">
								<a href="<?php the_permalink() ?>" rel="bookmark">
									<?php echo $img; ?>
								</a>
								<?php
									//get_template_part( 'template-parts/blog/blog-attached-image');
								?>
							</div>
						</div>
						<div class="col-lg-6">
							<?php get_template_part( 'template-parts/content/entry_header', get_post_type() ); ?>
							<?php get_template_part( 'template-parts/content/entry_summary', get_post_type() ); ?>
						</div>
					</div>
				<?php } else {?>
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<?php get_template_part( 'template-parts/content/entry_header', get_post_type() ); ?>
							<?php get_template_part( 'template-parts/content/entry_summary', get_post_type() ); ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>	
	</article><!-- #post-<?php the_ID(); ?> -->
<?php } else { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<?php if(is_page('about-us') || is_page('know-your-pro') || is_page('north-georgia-damage-claims') || is_page('showcase') || is_page('types-of-roofs')) { ?>
		<div class="sub-page-header">
			<div class="container-fluid">
				<div id="bond">     
					<section class="text-center">
						<p class="sub-page-heading">GEORGIA ROOF REPAIR</p>
						<p class="sub-page-subheading">
							<span class="sub-page-subheading-inner">
								<span class="sub-page-subheading-line">DON’T RISK A LEAKING ROOF – CALL RRG</span>
							</span>
						</p>
					</section>
					<div class="action">
						<a href="/contact-us/">
							<div id="action-btn">
								<span class="sub-page-button-text header-font">Schedule an Inspection!</span>
							</div>
						</a>
					</div><!-- .action -->
				</div>
			</div>
		</div>
	<?php }
	//get_template_part( 'template-parts/content/entry_header', get_post_type() );

	if ( is_search() || is_home() ) {
		get_template_part( 'template-parts/content/entry_summary', get_post_type() );
		
	} else { ?>
		<div class="container-fluid">
			<div id="bond">  
			    <?php get_template_part( 'template-parts/content/entry_header', get_post_type() ); ?>
				<?php get_template_part( 'template-parts/content/entry_content', get_post_type() ); ?>
		    </div>
		</div>
	<?php }

	?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php } ?>
<?php
if ( is_singular( get_post_type() ) ) {
	// Show post navigation only when the post type is 'post' or has an archive.
	if ( 'post' === get_post_type() || get_post_type_object( get_post_type() )->has_archive ) {
		the_post_navigation(
			[
				'prev_text' => '<div class="post-navigation-sub"><span>' . esc_html__( 'Previous:', 'wp-rig' ) . '</span></div>%title',
				'next_text' => '<div class="post-navigation-sub"><span>' . esc_html__( 'Next:', 'wp-rig' ) . '</span></div>%title',
			]
		);
	}

	// Show comments only when the post type supports it and when comments are open or at least one comment exists.
	/* if ( post_type_supports( get_post_type(), 'comments' ) && ( comments_open() || get_comments_number() ) ) {
		comments_template();
	} */
}
