<?php
if (!current_user_can('manage_options')) wp_die(__('No tienes suficientes permisos para acceder a esta página.'));

if (isset($_POST['action']) && $_POST['action'] == "salvaropciones") {
  update_option('epayco_P_KEY', $_POST['epayco_p_key']);
  update_option('epayco_callback', $_POST['epayco_callback']);
  update_option('epayco_usd_value1', $_POST['epayco_usd_value1']);
  update_option('epayco_usd_value2', $_POST['epayco_usd_value2']);
  update_option('epayco_usd_value3', $_POST['epayco_usd_value3']);
  update_option('epayco_usd_min', $_POST['epayco_usd_min']);
  update_option('epayco_cop_value1', $_POST['epayco_cop_value1']);
  update_option('epayco_cop_value2', $_POST['epayco_cop_value2']);
  update_option('epayco_cop_value3', $_POST['epayco_cop_value3']);
  update_option('epayco_cop_min', $_POST['epayco_cop_min']);
  echo ("<div class='updated message' style='padding: 10px'>Opciones guardadas.</div>");
}
?>

<div class="wrap">
  <h2><?php _e('Donaciones - Niño Nuevo', 'donaciones_nino_nuevo') ?></h2>
  Configuración del plugin de donaciones para el niño nuevo
</div>
<div class="wrap">
  <form method='post'>
    <input type='hidden' name='action' value='salvaropciones'>
    <div>
      <h2>EPAYCO</h2>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>P_KEY</div>
        <input style="width: 40%;" type='text' name='epayco_p_key' id='epayco_p_key' value='<?= get_option('epayco_P_KEY') ?>'>
      </div>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Url de Respuesta</div>
        <input style="width: 40%;" type='text' name='epayco_callback' id='epayco_callback' value='<?= get_option('epayco_callback') ?>'>
      </div>
    </div>
    <div>
      <h2>USD</h2>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Valor 1</div>
        <input style="width: 40%;" type='text' name='epayco_usd_value1' id='epayco_usd_value1' value='<?= get_option('epayco_usd_value1') ?>'>
      </div>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Valor 2</div>
        <input style="width: 40%;" type='text' name='epayco_usd_value2' id='epayco_usd_value2' value='<?= get_option('epayco_usd_value2') ?>'>
      </div>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Valor 3</div>
        <input style="width: 40%;" type='text' name='epayco_usd_value3' id='epayco_usd_value3' value='<?= get_option('epayco_usd_value3') ?>'>
      </div>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Valor Mínimo</div>
        <input style="width: 40%;" type='text' name='epayco_usd_min' id='epayco_usd_min' value='<?= get_option('epayco_usd_min') ?>'>
      </div>
    </div>
    <div>
      <h2>COP</h2>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Valor 1</div>
        <input style="width: 40%;" type='text' name='epayco_cop_value1' id='epayco_cop_value1' value='<?= get_option('epayco_cop_value1') ?>'>
      </div>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Valor 2</div>
        <input style="width: 40%;" type='text' name='epayco_cop_value2' id='epayco_cop_value2' value='<?= get_option('epayco_cop_value2') ?>'>
      </div>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Valor 3</div>
        <input style="width: 40%;" type='text' name='epayco_cop_value3' id='epayco_cop_value3' value='<?= get_option('epayco_cop_value3') ?>'>
      </div>
      <div>
        <div style='display: inline-block;width: 10%;margin-bottom: 1rem;'>Valor Mínimo</div>
        <input style="width: 40%;" type='text' name='epayco_cop_min' id='epayco_cop_min' value='<?= get_option('epayco_cop_min') ?>'>
      </div>
    </div>
    <div style="text-align:center">
      <input type='submit' value='GUARDAR'>
    </div>
  </form>
</div>