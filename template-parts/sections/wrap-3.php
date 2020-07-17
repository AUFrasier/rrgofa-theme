<?php
/**
 * Template part for displaying Section 3 of the front page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="wrap wrap-3">
    <div class="container-fluid">
        <div id="bond">     
            <section class="text-center">
                <p class="heading">Consider Us Your Roofing Experts</p>
                <p class="subheading">
                    <span class="subheading-inner">
                        <span class="subheading-line">Just Ask Our Previous Customers</span>
                    </span>
                </p>
            </section>
            <img width="32" height="21" src="/wp-content/uploads/2018/04/arrow-5ad770644bb80.png" class="m-auto" alt="">
            <?php get_template_part( 'template-parts/partials/testimonials' ); ?>
		</div>
    </div>
</div><!-- .wrap-3 -->
