<?php

$data = new DateTime();

echo $data->format('d-m-Y');

echo "<br>";

echo $data->format('d-m-Y H:i:s');

echo "<br>";

/*DateInterval*/
$intervalo = new DateInterval('PT5M');
$data->add($intervalo);

var_dump($data);

echo "<br>";

$data->sub($intervalo);

var_dump($data);

