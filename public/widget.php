<?php
if (!current_user_can('manage_options')) wp_die(__('No tienes suficientes permisos para acceder a esta página.'));
?>

<div class="wrap">
  <h2><?php _e('Donaciones - Niño Nuevo', 'donaciones_nino_nuevo') ?></h2>
</div>
<div>
  <div class="wrap">
    <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Selecciona tu moneda</div>
    <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>tres checkbox</div>
  </div>
  <div class="wrap">
    <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>boton donar</div>
    <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>input valor</div>
  </div>
  <div class="wrap">
    <p>Puedes hacer tu donación desde</p>
  </div>
</div>