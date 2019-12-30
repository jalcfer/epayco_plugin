<?php

/**
 * Epayco wordpress plugin
 *
 * A plugin to integrate web-checkout way of the epayco payment gateway
 *
 * @link              http://epayco.co/
 * @since             1.0.0
 * @package           Epayco
 *
 * @wordpress-plugin
 * Plugin Name:       Epayco Web-checkout Plugin
 * Plugin URI:        http://epayco.co/
 * Description:       A plugin to integrate web-checkout way of the epayco payment gateway.
 * Version:           1.0.0
 * Author:            KafedevM
 * Author URI:        http://kafedevm.co/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       epayco
 * Domain Path:       /languages
 */

defined('ABSPATH') or die("Bye bye");

define('DONACIONES_RUTA', plugin_dir_path(__FILE__));

define('DONACIONES_VERSION', '1.0.0');

function enqueue_epayco_lib(){
  wp_register_script( 'epaycolib', 'https://checkout.epayco.co/checkout.js', null, '1', true );
  wp_enqueue_script('epaycolib');
}
add_action( 'wp_enqueue_scripts', 'enqueue_epayco_lib' );

function enqueue_donacionesepayco_lib(){
  wp_register_script('donacionesepayco', plugin_dir_url( __FILE__ ).'public/js/donaciones_epayco_functions.js', null, '2', true );
  wp_enqueue_script('donacionesepayco');
}
add_action( 'wp_enqueue_scripts', 'enqueue_donacionesepayco_lib' );

function activar_donaciones_epayco()
{     
}

//register_activation_hook(__FILE__, 'activar_donaciones_epayco');


include(DONACIONES_RUTA . '/include/funciones.php');

include(DONACIONES_RUTA . '/include/opciones.php');
