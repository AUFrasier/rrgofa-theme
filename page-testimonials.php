<?php

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main">
        <?php
        
		if ( have_posts() ) {
            //get_template_part( 'template-parts/content/page_header' );
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
            </div><!-- .wrap-3 -->
			
            <?php
			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content/entry', get_post_type() );
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
