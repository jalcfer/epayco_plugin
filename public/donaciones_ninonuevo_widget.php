<?php
if (!current_user_can('manage_options')) wp_die(__('No tienes suficientes permisos para acceder a esta página.'));
?>
<div id="error"></div>
<div>
  <div class="wrap">
    <input type='hidden' id='usdvalue1' value='<?= get_option('epayco_usd_value1') ?>'>
    <input type='hidden' id='usdvalue2' value='<?= get_option('epayco_usd_value2') ?>'>
    <input type='hidden' id='usdvalue3' value='<?= get_option('epayco_usd_value3') ?>'>
    <input type='hidden' id='usdvaluemin' value='<?= get_option('epayco_usd_min') ?>'>
    <input type='hidden' id='copvalue1' value='<?= get_option('epayco_cop_value1') ?>'>
    <input type='hidden' id='copvalue2' value='<?= get_option('epayco_cop_value2') ?>'>
    <input type='hidden' id='copvalue3' value='<?= get_option('epayco_cop_value3') ?>'>
    <input type='hidden' id='copvaluemin' value='<?= get_option('epayco_cop_min') ?>'>
    <input type='hidden' id='urlResponse' value='<?= get_option('epayco_callback') ?>'>
    <input type='hidden' id='strtest' value='<?= get_option('epayco_P_KEY') ?>'>
    <select style="width: 100%;margin-bottom:2rem" onchange="onChangeCurrency(this)" >
      <option value="0">Selecciona una moneda:</option>
      <option value="cop" selected>COP - Pesos Colombianos</option>
      <option value="usd">USD - Dolares</option>
    </select>
  </div>
  <div class="wrap">
    <label style="display: inline-block;width: 32%;">
      <span id="value1">$<?= get_option('epayco_cop_value1') ?></span>
      <input type="radio" id="radioValue1" value="<?= get_option('epayco_cop_value1') ?>" name="radio" style="display: inline-block;width: 18%">
    </label>
    <label style="display: inline-block;width: 32%;">
      <span id="value2">$<?= get_option('epayco_cop_value2') ?></span>
      <input type="radio" id="radioValue2" value="<?= get_option('epayco_cop_value2') ?>" name="radio" style="display: inline-block;width: 18%;">
    </label>
    <label style="display: inline-block;width: 32%;">
      <span id="value3">$<?= get_option('epayco_cop_value3') ?></span>
      <input type="radio" id="radioValue3" value="<?= get_option('epayco_cop_value3') ?>" name="radio" style="display: inline-block;width: 18%">
    </label>
  </div>
  <div class="wrap" style="text-align:center">
    <h3 style="font-style: italic;font-size:15px;margin:7px 0">O</h3>
  </div>
  <div class="wrap">
    <input type="text" id="valorDonacion" placeholder="Escriba el valor a donar" onfocus="onFocusCustomValue(this)">
  </div>
  <div class="wrap" style="text-align:center">
    <button onclick="donarEpayco()">
      DONAR
    </button>
  </div>
  <div class="wrap" style="text-align:center">
    <span style="font-size: 11px;font-weight: bold;">
      Puedes hacer tu donación desde <span id="valuemin">$<?= get_option('epayco_cop_min') ?></span><span id="currency">COP</span>
    </span>
  </div>
</div>