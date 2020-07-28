<?php
/**
 * Template part for displaying a post's title
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( is_singular( get_post_type() ) ) { 
	if (is_page('about-us') || is_page('showcase') || is_page('insulation') || is_page('roofing-services') || is_page('north-georgia-damage-claims') || is_page('types-of-roofs') || is_page('roof-repair')) {
		the_title( '<h1 class="entry-title text-left">', '</h1>' );
	} else {
		the_title( '<h1 class="entry-title">', '</h1>' );
	}
} else {
	the_title( '<h2 class="entry-title text-left"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
}
