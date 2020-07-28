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
            <div class="sub-page-header-roofing-services">
                <div class="container-fluid">
                    <div id="template-bond">  
                        <div class="row justify-content-center">
                            <section style="padding-right: 30px;padding-top: 100px;" class="subheading col-lg-5 col-md-12 text-left mt-5">
                                <p class="sub-page-subheading-line text-left">Roofing Services</p>
                                <p class="sub-page-subheading">
                                    <span class="sub-page-subheading-inner">
                                        <span class="sub-page-heading">Serving North Georgia With Roof Repair, Installation, & More</span>
                                    </span>
                                </p>
                                <div class="action">
                                    <a href="/contact-us/">
                                        <div style="max-width:300px; float:left;" id="action-btn">
                                            <span class="sub-page-button-text header-font">Chat With An Expert</span>
                                        </div>
                                    </a>
                                </div><!-- .action -->
                            </section>
                            <div class="col-lg-7 col-md-12 form-container-roofing-services">
                            <?php echo do_shortcode('[gravityform id="1" title="true" description="false"]') ?>
                            </div>
                            
                        </div>   
                    </div>
                </div>
            </div>
            <div class="template-wrap template-wrap-1">
                <div class="container-fluid">
                    <div id="template-bond"> 
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-8 col-md-12">
                                <p class="text-white">Roofing Resources of Georgia offers a full range of roofing services in north Georgia. Our licensed, insured, and fully qualified roofing professionals provide new roof installation, full roof replacement, and roof repair to commercial and residential customers. The roof is one of the most important structures on your home or office building. It protects not only the things inside, but the people and the entire structure from damage. With years of experience and technical skill, our contractors can give you complete confidence in our services. Schedule an estimate with us today.</p>
                            </div>
                            <div class="col-lg-4 col-md-12">
                               <div class="template-action">
                                    <a href="tel:+16785174211">
                                        <div id="template-action-action-btn">
                                            <span class="sub-page-button-text header-font">(678) 517-4211</span>
                                        </div>
                                    </a>
                                </div><!-- .action -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="template-wrap template-wrap-2">
                <div class="container-fluid">
                    <div id="template-bond"> 
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6 col-md-12">
                               <div class="p-5">
                                   <img src="/wp-content/uploads/2019/09/roofing-5d921e4433727.png" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="p-5">
                                    <div class="row align-items-top">
                                        <div class="col-lg-6 col-md-12">
                                            <h3 style="color: #6f7174; font-weight: 900; font-family: 'Ubuntu', 'Arial', sans-serif;">WE WORK ON MOST TYPES OF ROOFS:</h3>
                                            <ul class="template-ul" style="font-size: 14px; font-family: 'Ubuntu', 'Arial', sans-serif;">
                                                <li>Asphalt Shingles Installation and Repair</li>
                                                <li>Metal Roof Installation</li>
                                                <li>Clay Tile Installation</li>
                                                <li>Wood Shake Installation</li>
                                                <li>Attic Insulation</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <h3 style="color: #6f7174; font-weight: 900; font-family: 'Ubuntu', 'Arial', sans-serif;">WE PROVIDE THE FOLLOWING SERVICES:</h3>
                                            <ul class="template-ul" style="font-size: 14px; font-family: 'Ubuntu', 'Arial', sans-serif;">
                                                <li>Roof Repair</li>
                                                <li>Roof Installation</li>
                                                <li>Roof Replacement</li>
                                                <li>Preventative Maintenance</li>
                                                <li>Commercial Roofing</li>
                                                <li>Residential Roofing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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