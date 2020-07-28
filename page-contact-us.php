<?php

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main contact-page-bg">
        <?php
        
		if ( have_posts() ) {
            //get_template_part( 'template-parts/content/page_header' );
            ?>
            <div>
                <div class="container-fluid">
                    <div id="template-bond">  
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-12">
                                <video style="width: 100%; height: auto;" loop="" muted="" autoplay="autoplay" preload="true">
                                    <source src="https://aubackups.s3-us-west-2.amazonaws.com/rrofga/500-5e99de0b872b5.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <video style="width: 100%; height: auto;" loop="" muted="" autoplay="autoplay" preload="true">
                                    <source src="https://aubackups.s3-us-west-2.amazonaws.com/rrofga/50-5e99ddfc09b88.mp4" type="video/mp4">
                                </video>
                            </div>
                            
                        </div>   
                    </div>
                </div>
            </div>
            <div class="template-card">
            <?php
                while ( have_posts() ) {
                    the_post();

                    get_template_part( 'template-parts/content/entry', get_post_type() );
                } ?>
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