<?php
  function var_dump_pre($var)  {
    echo '<pre>';
    echo print_r($var, true);
    echo '</pre>';
  }

  function windDirection($wDirection)  {
    $cardinalDirections = array(
      'Nord' => array(337.5, 22.5) ,
      'Nord-Est' => array(22.5, 67.5),
      'Est' => array(67.5, 112.5),
      'Sud-Est' => array(112.5, 157.5),
      'Sud' => array(157.5, 202.5),
      'Sud-Ouest' => array(202.5, 247.5),
      'Ouest' => array(247.5, 292.5),
      'Nord-Ouest' => array(292.5, 337.5)
    );

    foreach ($cardinalDirections as $direction => $wAngles) {
      if ($cardinalDirections >= $wAngles[0] && $wDirection < $wAngles[1]) {
        $wDir = $direction;
        break;
      }
    }
    return $wDir;
  }
