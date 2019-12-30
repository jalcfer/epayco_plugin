<?php
defined('ABSPATH') or die("Bye bye");

// Top level menu del plugin
function donaciones_menu_administrador()
{
 add_menu_page('Admin Donaciones','donaciones','manage_options',DONACIONES_RUTA.'/admin/configuracion.php');
}

add_action( 'admin_menu', 'donaciones_menu_administrador' );