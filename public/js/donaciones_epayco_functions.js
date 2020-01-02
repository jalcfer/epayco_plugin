//listen select onchange : the selected currency change the values
//listen input focus: deselect all radios

function onChangeCurrency(sel) {
  const valSelected = sel.options[sel.selectedIndex].value
  const value1 = document.getElementById('value1')
  const radioValue1 = document.getElementById('radioValue1')
  const value2 = document.getElementById('value2')
  const radioValue2 = document.getElementById('radioValue2')
  const value3 = document.getElementById('value3')
  const radioValue3 = document.getElementById('radioValue3')
  const valuemin = document.getElementById('valuemin')
  const currency = document.getElementById('currency')

  if (valSelected === 'cop' || valSelected === '0') {
    value1.textContent = "$" + document.getElementById('copvalue1').value
    radioValue1.value = document.getElementById('copvalue1').value
    value2.textContent = "$" + document.getElementById('copvalue2').value
    radioValue2.value = document.getElementById('copvalue2').value
    value3.textContent = "$" + document.getElementById('copvalue3').value
    radioValue3.value = document.getElementById('copvalue3').value
    valuemin.textContent = "$" + document.getElementById('copvaluemin').value
    currency.textContent = "COP"

  } else if (valSelected === "usd") {
    value1.textContent = "$" + document.getElementById('usdvalue1').value
    radioValue1.value = document.getElementById('usdvalue1').value
    value2.textContent = "$" + document.getElementById('usdvalue2').value
    radioValue2.value = document.getElementById('usdvalue2').value
    value3.textContent = "$" + document.getElementById('usdvalue3').value
    radioValue3.value = document.getElementById('usdvalue3').value
    valuemin.textContent = "$" + document.getElementById('usdvaluemin').value
    currency.textContent = "USD"
  }
}

function onFocusCustomValue() {
  document.getElementById("radioValue1").checked = false;
  document.getElementById("radioValue2").checked = false;
  document.getElementById("radioValue3").checked = false;
}

function donarEpayco() {
  const radioValue1 = document.getElementById("radioValue1");
  const radioValue2 = document.getElementById("radioValue2");
  const radioValue3 = document.getElementById("radioValue3");
  const inputValue = document.getElementById('valorDonacion');
  const P_KEY = document.getElementById('strtest').value;
  let value = 0
  if (radioValue1.checked) value = radioValue1.value
  else if (radioValue2.checked) value = radioValue2.value
  else if (radioValue3.checked) value = radioValue3.value
  else if (inputValue.value.trim().length > 0) value = inputValue.value
  else {
    error.textContent = "Debe Seleccionar o escribir un valor"
    return
  }
  //console.log('value::',value)
  var handlerEpayco = undefined

  if (P_KEY && P_KEY !== '') {
    handlerEpayco = ePayco.checkout.configure({
      key: P_KEY,
      test: false
    })
  } else {
    error.textContent = "Epayco no está configurado"
    return
  }

  const data = {
    name: "Niño nuevo",
    description: "Niño nuevo",
    currency: document.getElementById('currency').textContent.toLowerCase(),
    amount: parseFloat(value),
    tax_base: "0",
    tax: "0",
    country: "co",
    lang: "es",
    //Onpage="false" - Standard="true"
    external: "false",
    response: document.getElementById('urlResponse').value,
  }
  handlerEpayco.open(data)
}