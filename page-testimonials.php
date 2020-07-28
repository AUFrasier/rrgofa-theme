<?php

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
add_filter( 'excerpt_length', 'custom_excerpt_length_50', 999 );
?>
	<main id="primary" class="site-main">
        <?php
		if ( have_posts() ) {
            //get_template_part( 'template-parts/content/page_header' );
			while ( have_posts() ) {
				the_post();
                ?>
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
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
                    <?php 
                    get_template_part( 'template-parts/content/entry_header', get_post_type() );
                    $the_query = new \WP_Query( array('posts_per_page'=>8,
                        'post_type'=>'mad360_testimonial',
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1)); 
                    ?>
                    <div class="container-fluid">
                        <div id="bond">  
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <div class="m-3">
                                    <a href="<?php the_permalink(); ?>" class="entry-title testimonial-title mb-4" target="_blank">
                                        "<?php echo get_the_title(); ?>"
                                    </a>
                                    <div class="testimonial-content-page"><?php the_excerpt(); ?></div>
                                </div>
                            <?php
                                endwhile;
                            ?>
                        </div>
                    </div>
                    <nav class="navigation pagination mt-4" role="navigation" aria-label="Page navigation">
                        <div class="nav-links">
                            <?php
                                $big = 999999999; // need an unlikely integer
                                echo paginate_links( array(
                                    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total' => $the_query->max_num_pages
                                ));

                                wp_reset_postdata();
                            ?>
                        </div>
                    </nav>
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
			}

			if ( ! is_singular() ) {
				get_template_part( 'template-parts/content/pagination' );
			}
		} else {
			get_template_part( 'template-parts/content/error' );
		}
		?>
	</main><!-- #primary -->
<?php
//get_sidebar();
get_footer();
