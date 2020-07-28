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
                                <p class="sub-page-subheading-line text-left">Expert Roof Repair</p>
                                <p class="sub-page-subheading">
                                    <span class="sub-page-subheading-inner">
                                        <span class="sub-page-heading">Roofing Services In North Georgia</span>
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
                                <h3 class="text-white" style="font-weight: 300; font-family: 'Ubuntu', 'Arial', sans-serif;">TRUST OUR TOP RATED LOCAL® ROOFING CONTRACTORS FOR TIMELY ROOF REPAIR</h3>
                                <p class="text-white" style="font-size: 14px; font-family: 'Ubuntu', 'Arial', sans-serif;">A roof is a home’s first line of defense against the weather and falling debris. Georgia is known to have severe thunderstorms that can bring gusty winds, hail, and even tornadoes, not to mention the long, hot summers that expose your roof to sun damage – all of which can take a toll on your roof. Fortunately, whenever you need roof repair the team at Roofing Resources of Georgia is available to help restore your home’s most important asset as quickly as possible.</p>
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
                        <div class="row justify-content-center align-items-start">
                            <div class="col-lg-6 col-md-12">
                               <div class="p-5">
                                   <img src="/wp-content/uploads/2020/02/roofrepair-5e50382f496c4.png" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="p-5">
                                    <h3 style="color: #6f7174; font-weight: 900; font-family: 'Ubuntu', 'Arial', sans-serif;">SIGNS YOU NEED TO SCHEDULE ROOF REPAIR:</h3>
                                    <ul class="template-ul" style="font-size: 14px; font-family: 'Ubuntu', 'Arial', sans-serif;">
                                        <li>Curled, cracked, or missing shingles</li>
                                        <li>Granulars from shingles in gutters</li>
                                        <li>Roof leaks when it rains</li>
                                        <li>Sagging interior ceiling</li>
                                        <li>Roof stains, discoloration, or spotting</li>
                                        <li>Visible roof damage</li>
                                    </ul>
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
        <div class="template-wrap template-parallax">
            <div class="container-fluid">
                <div id="template-bond"> 
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="float-left">
                                <div class="template-text-widget">
                                    <div class="content">
                                        <h2><span style="font-size:22px; font-family: 'Ubuntu', 'Arial', sans-serif;">Have A Roofing Emergency? We Can Help!</span></h2>
                                        <p>No homeowner wants to have to deal with a roofing emergency, but sometimes Mother Nature has other plans in store. In the event that you have a roofing emergency on your hands, it’s vital to contact our roofing company for emergency roof repairs in order to prevent costly damage to the inside of your home.&nbsp;</p>
                                        <p>At Roofing Resources of Georgia, our roofers are always ready to go at a moment’s notice with the equipment and expertise needed to quickly and effectively repair all types of roof leaks and roofing damage. As one of the best roofing companies in Georgia, our team is well-versed in all types of roofs and materials and possess the knowledge to fix any problem that you have.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="template-wrap template-text">
            <div class="container-fluid">
                <div id="template-bond"> 
                    <h3><span style="font-size:22px; font-family: 'Ubuntu', 'Arial', sans-serif;">SCHEDULE PROFESSIONAL ROOF REPAIR WITH OUR GEORGIA ROOFERS</span></h3>
                    <p>Whenever you are in need of fast, reliable roof repair contact Roofing Resources of Georgia for service you can depend on. Don’t wait to get your roof fixed, keep your home protected with our roof repair services.</p>
                </div>
            </div>
        </div>
	</main><!-- #primary -->
<?php
//get_sidebar();
get_footer();