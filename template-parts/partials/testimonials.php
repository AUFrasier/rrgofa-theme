<?php
/**
 * Template part for displaying a testimonial slider
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="testimonial-container">
	<div class="testimonial-wrapper row align-items-top justify-content-center">
		<?php
			// args
			$args = array(
				'posts_per_page'	=> 3,
				'post_type'		=> 'mad360_testimonial'
			);
			// query
			$the_query = new \WP_Query( $args );
			?>
			<?php if( $the_query->have_posts() ): ?>
			   
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="testimonial col-lg-4 col-md-12"> 
					<div class="testimonial-info d-block m-3">
						<span class="testimonial-title mb-3">
						<a class="more" style="color: white !important;" href="<?php the_permalink();?>">"<?php echo the_title(); ?>"</a>
						</span>
						<span class="testimonial-content">
							<?php echo the_excerpt(); ?>
						</span>
						<span class="testimonial-author d-block mb-1">
							<?php echo get_post_meta(get_the_ID(), 'uxi_testimonial_author_nonce', true); ?>
						</span>
						<?php
						$excerpt = get_the_excerpt();  
						if(strlen($excerpt) > 20) {?>
							<span>
								<a class="more" style="color: white !important; text-decoration: underline;" href="<?php the_permalink();?>">Read More</a>
							</span>
						<?php } ?>
						
					</div>
				</div>   
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
	</div>
</div><!-- .testimonial-container -->
