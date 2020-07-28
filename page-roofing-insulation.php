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
                                <p class="sub-page-subheading-line text-left">Protect Your Roof Investment With ProCat Insulation</p>
                                <p class="sub-page-subheading">
                                    <span class="sub-page-subheading-inner">
                                        <span class="sub-page-heading">Installed By Roofing Resources Of Georgia</span>
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
                                <h3 class="text-white" style="font-weight: 300; font-family: 'Ubuntu', 'Arial', sans-serif;">ROOFING SERVICES IN DAHLONEGA & CARTERSVILLE, GEORGIA</h3>
                                <p class="text-white" style="font-size: 14px; font-family: 'Ubuntu', 'Arial', sans-serif;">A house could have the strongest roof on it, but without insulation inside, with improperly installed insulation, or with an inefficient insulation, your home could be at risk. Roofing Resources of Georgia provides ProCat Insulation from Owens Corning. If you want to protect your roof investment, guard your home from mold and ice dams, and increase your home’s efficiency, it needs a high-quality, professional-grade insulation system. Learn more about ProCat Insulation and work with RRG today. Contact our team for a free estimate.</p>
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
                                   <img src="/wp-content/uploads/2019/10/insulation-5dbb199dab0ab.png" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="p-5">
                                    <h3 style="color: #6f7174; font-weight: 900; font-family: 'Ubuntu', 'Arial', sans-serif;">A QUALITY INSULATED & VENTILATED ROOF CAN:</h3>
                                    <ul class="template-ul" style="font-size: 14px; font-family: 'Ubuntu', 'Arial', sans-serif;">
                                        <li>Prevent Ice Dams</li>
                                        <li>Prevent Mold Growth</li>
                                        <li>Provide Bath Fan Ventilation</li>
                                        <li>Provide Proper Sealing</li>
                                        <li>Improve Your Home’s Comfort</li>
                                        <li>Lower Your Monthly Heating and Cooling Bills</li>
                                    </ul>
                                </div>
                                <img style="border: 3px solid rgb(24, 71, 161);padding: 2px;" src="/wp-content/uploads/2019/10/6ca6ce896f1c7fa4c41ce902d118faf2-5dbb1a1f09f78.png" />
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