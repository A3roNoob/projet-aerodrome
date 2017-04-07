<link rel="stylesheet" href="css/weather.css">

<?php

$lat="48.522176"; // Latitude
$lon="2.201975"; // Longitude
$appid="d820fb9f3bb5f4615e9eae7f3f4128e1";
$url="http://api.openweathermap.org/data/2.5/forecast/daily?lat=".$lat."&lon=".$lon."&APPID=".$appid."&units=metric&cnt=5&lang=fr&mode=json";

// json parse
$json=file_get_contents($url);
$data=json_decode($json,true); // Renvoie un tableau 'data' contenant les resulats de la requête

setlocale(LC_ALL, "fr_FR"); // Force la date en français
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Date</th>
      <th><?php echo strftime('%a %d %b %Y', $data['list']['0']['dt']); ?></th>
      <th><?php echo strftime('%a %d %b %Y', $data['list']['1']['dt']); ?></th>
      <th><?php echo strftime('%a %d %b %Y', $data['list']['2']['dt']); ?></th>
      <th><?php echo strftime('%a %d %b %Y', $data['list']['3']['dt']); ?></th>
      <th><?php echo strftime('%a %d %b %Y', $data['list']['4']['dt']); ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Conditions</td>
      <td><?php echo $data['list']['0']['weather']['0']['description']; ?></td>
      <td><?php echo $data['list']['1']['weather']['0']['description']; ?></td>
      <td><?php echo $data['list']['2']['weather']['0']['description']; ?></td>
      <td><?php echo $data['list']['3']['weather']['0']['description']; ?></td>
      <td><?php echo $data['list']['4']['weather']['0']['description']; ?></td>
    </tr>
    <tr>
      <td>Température</td>
      <td><?php echo round($data['list']['0']['temp']['day'], 0) . "°C"; ?></td>
      <td><?php echo round($data['list']['1']['temp']['day'], 0) . "°C"; ?></td>
      <td><?php echo round($data['list']['2']['temp']['day'], 0) . "°C"; ?></td>
      <td><?php echo round($data['list']['3']['temp']['day'], 0) . "°C"; ?></td>
      <td><?php echo round($data['list']['4']['temp']['day'], 0) . "°C"; ?></td>
    </tr>
    <tr>
      <td>Humidité</td>
      <td><?php echo $data['list']['0']['humidity']." %"; ?></td>
      <td><?php echo $data['list']['1']['humidity']." %"; ?></td>
      <td><?php echo $data['list']['2']['humidity']." %"; ?></td>
      <td><?php echo $data['list']['3']['humidity']." %"; ?></td>
      <td><?php echo $data['list']['4']['humidity']." %"; ?></td>
    </tr>
    <tr>
      <td>Vitesse du vent</td>
      <td><?php echo round($data['list']['0']['speed'], 0)." km/h"; ?></td>
      <td><?php echo round($data['list']['1']['speed'], 0)." km/h"; ?></td>
      <td><?php echo round($data['list']['2']['speed'], 0)." km/h"; ?></td>
      <td><?php echo round($data['list']['3']['speed'], 0)." km/h"; ?></td>
      <td><?php echo round($data['list']['4']['speed'], 0)." km/h"; ?></td>
    </tr>
    <tr>
      <td>Direction du vent</td>
      <td><?php echo windDirection($data['list']['0']['deg']); ?></td>
      <td><?php echo windDirection($data['list']['1']['deg']); ?></td>
      <td><?php echo windDirection($data['list']['2']['deg']); ?></td>
      <td><?php echo windDirection($data['list']['3']['deg']); ?></td>
      <td><?php echo windDirection($data['list']['4']['deg']); ?></td>
    </tr>
  </tbody>
</table>

<!-- <?php
// Debugging
var_dump_pre($data);
?> -->
