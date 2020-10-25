<?php
/**
 * Fluid Magazine functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fluid_Magazine
 */

$fluid_magazine_theme_data = wp_get_theme();
//define theme version
if ( ! defined( 'FLUID_MAGAZINE_THEME_VERSION' ) ) define ( 'FLUID_MAGAZINE_THEME_VERSION', $fluid_magazine_theme_data->get( 'Version' ) );

/**
 * Implement the Custom functions.
 */
require get_template_directory() . '/inc/custom-functions.php';

/**
 * Custom template function for this theme.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Metabox for Sidebar Layout
*/
require get_template_directory() . '/inc/metabox.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Widgets.
 */
require get_template_directory() . '/inc/widgets/widgets.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Woocommerce compatibility file.
 */
if( fluid_magazine_woocommerce_activated() )
require get_template_directory() . '/inc/woocommerce-functions.php';

/**
 * Recent Post Widget
 */
require get_template_directory() . '/inc/info.php';

/**
 * Plugin Recommendation
*/
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';