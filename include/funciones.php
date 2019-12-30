<?php
add_action('plugins_loaded', 'donaciones_ninonuevo_epayco_widget');
// Top level menu del plugin
function donaciones_ninonuevo_epayco_widget()
{
  wp_register_sidebar_widget(
    "NINONUEVO_DONACIONES_EPAYCO",
    'Donaciones',
    'donaciones_ninonuevo_widget',
    array(                  // options
      'description' => 'Description of what your widget does'
    )
  );
  //a unique identifier for the widget
  //a name to be used on the widgets page in the admin area
  //a name of the function that will rendered the widget
}

function donaciones_ninonuevo_widget($args)
{
  echo $args['before_widget'];
  echo $args['before_title'] . 'DONACIONES' .  $args['after_title'];
  echo $args['after_widget'];
  // print some HTML for the widget to display here
  include(DONACIONES_RUTA.'/public/donaciones_ninonuevo_widget.php');
}
