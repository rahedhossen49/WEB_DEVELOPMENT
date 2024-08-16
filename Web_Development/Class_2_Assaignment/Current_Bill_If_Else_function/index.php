<?php


function Current_Bill(
  $light_watt = 0,
  $total_light = 0,
  $fan_watt = 0,
  $total_fan = 0,
  $refrigerator_watt = 0,
  $total_refrigerator = 0,
  $ac_watt = 0,
  $total_ac = 0
) {
  $total_light_watt = $light_watt * $total_light;
  $total_fan_watt = $fan_watt * $total_fan;
  $total_refrigerator_watt = $refrigerator_watt * $total_refrigerator;
  $total_ac_watt = $ac_watt * $total_ac;

  $total_watt = $total_light_watt + $total_fan_watt + $total_refrigerator_watt + $total_ac_watt;

  echo "Total Watt = " . $total_watt;
  echo "<br>";


  if ($total_watt <= 100) {
    echo "Your Total Bill =" . $total_watt * 4;
  } else if ($total_watt > 100 && $total_watt >= 200) {
    echo "Your Total Bill =" . $total_watt * 6;
  } else if ($total_watt > 200 && $total_watt >= 400) {
    echo "Your Total Bill =" . $total_watt * 8;
  } else if ($total_watt < 500) {
    echo "Your Total Bill =" . $total_watt * 10;
  } else {
    echo " Bill Not Count ";
  }
}
Current_Bill(20, 2, 20, 2, 20, 2, 20, 2);

?>


//! OutPut: //* Total Watt=160 //* Your Total Bill=1600