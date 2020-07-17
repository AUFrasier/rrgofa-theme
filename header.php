<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$frontPageHeroClass = is_front_page() ? "front-page-hero" : '';
$headerClass = is_front_page() ? 'site-header' : 'site-header-subpage';
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/8ad5d35c6d.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<?php 
wp_body_open(); 
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="<?= $headerClass ?>">
		<div class="header-container <?= $frontPageHeroClass ?>">
			<?php get_template_part('template-parts/header/top'); ?>
			<?php if(is_front_page()) {
				get_template_part( 'template-parts/header/bottom' );
			} ?>
		</div><!-- .header-container -->
	</header><!-- .site-header -->