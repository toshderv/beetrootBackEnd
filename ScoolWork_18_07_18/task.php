<?
$array = ['Vadim', 'Max'];

array_walk($array, function (&$value) {
  $value = 'Hello ' . $value;
});

var_dump($array);

$arrayInt = [1, 5, 7, 8, -9, 3];
$resultNew = array_filter($arrayInt, function ($value) {
  if ($value > 3 && ($value % 2)) {
    return true;
  }
});
var_dump($resultNew);