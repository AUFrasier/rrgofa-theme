<?php
/**
 * Template part for displaying the hero - header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>

<div class="hero-container">
    <div class="hero-content">
        <video loop="" muted="" autoplay="autoplay" class="fullscreen-bg__video" id="mainoo-video" preload="true">
            <source src="https://aubackups.s3-us-west-2.amazonaws.com/rrofga/Hero-Video-compressed-5b5203de5c0b6.mp4" type="video/mp4">
        </video>
        <?php get_template_part( 'template-parts/header/hero', 'text' ); ?>
        <?php get_template_part( 'template-parts/header/hero', 'action' ); ?>
        <?php //get_template_part( 'template-parts/header/hero', 'tag' ); ?>
    </div><!-- .hero-content -->
</div><!-- .hero-container -->
