<?php
/**
 * Template part for displaying the top part of the header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>

<div class="header-top">
    <div class="tablet-desktop-hd">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-3 col-md-12 text-center branding">
                <?php get_template_part( 'template-parts/header/branding' ); ?>
                </div>
                <div class="col-lg-4 col-md-12 text-center navigation">
                <?php get_template_part( 'template-parts/header/navigation' ); ?>
                </div>
                <div class="col-lg-5 col-md-12 text-center actions">
                <?php get_template_part( 'template-parts/header/header-actions' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-hd">
        <div class="row align-items-center justify-content-center">
            <div class="col-3 text-center navigation">
                <?php get_template_part( 'template-parts/header/mobile-navigation'); ?>
            </div>
            <div class="col-6 text-center branding">
                <?php get_template_part( 'template-parts/header/branding' ); ?>
            </div>
            <div class="col-3 text-center">
            <a class="m-1" style="font-size: 1.8em; color: rgb(24, 71, 161) !important;" href="tel:+16785174211"><i class="fas fa-phone"></i></a>
            </div>
        </div>
        
    </div>
    
</div><!-- .header-top -->
