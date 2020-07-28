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
            <div>
                <div class="sub-page-header">
                    <div class="container-fluid">
                        <div id="bond">     
                            <section class="text-center">
                                <p class="sub-page-heading">PROFESSIONAL • RELIABLE • AFFORDABLE</p>
                                <p class="sub-page-subheading">
                                    <span class="sub-page-subheading-inner">
                                        <span class="sub-page-subheading-line">Roofing Resources of Georgia</span>
                                    </span>
                                </p>
                            </section>
                            <div class="action">
                                <a href="/contact-us/">
                                    <div id="action-btn">
                                        <span class="sub-page-button-text header-font">Learn more about our financing program!</span>
                                    </div>
                                </a>
                            </div><!-- .action -->
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div id="template-bond"> 
                        <div class="row justify-content-center align-items-start">
                            <div class="col-lg-6 col-md-12">
                               <div class="text-center">
                               <?php
                               while ( have_posts() ) {
                                    the_post();
                                    get_template_part( 'template-parts/content/entry', get_post_type() );
                                }
                                ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="text-center">
                                    <div class="container-fluid">
                                        <div id="bond"> 
                                            <?php echo do_shortcode('[gravityform id="1" title="true" description="false"]') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

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