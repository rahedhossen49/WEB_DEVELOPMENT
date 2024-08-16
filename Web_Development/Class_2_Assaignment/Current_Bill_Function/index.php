<?php

function Current_Bill(
  $light_watt = 0,
  $total_light = 0,
  $fan_watt = 0,
  $total_fan = 0,
  $refrigerator_watt = 0,
  $total_refrigerator = 0,
  $ac_watt = 0,
  $total_ac = 0,
  $per_watt_price = 0
) {


  $total_light_watt = $light_watt * $total_light;
  $total_fan_watt = $fan_watt * $total_fan;
  $total_refrigerator_watt = $refrigerator_watt * $total_refrigerator;
  $total_ac_watt = $ac_watt * $total_ac;

  $total_watt = $total_light_watt + $total_fan_watt + $total_refrigerator_watt +
    $total_ac_watt;

  $total_multify = $total_watt * $per_watt_price;


  echo $total_multify;
}

Current_Bill(200, 1, 200, 1, 200, 1, 200, 1, 5);

?>

//! OutPut: 4000
/////