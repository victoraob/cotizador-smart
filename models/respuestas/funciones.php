<?php


// selecciona todas las temperaturas disponibles
foreach ($respuesta as $resp) {
  if ($resp["caracteristicasId"] == 6) {
    echo "<pre>";
    var_dump($resp);
    echo "</pre>";
  }
}



 var baseTariffTemp = tarifas
        .where((ot) => ot.vt == element.tipoVehiculo.vehiculosTiposId)
        .toList();
