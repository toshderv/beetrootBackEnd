<?
$stingArray = [1, 2, 3, -4, 5, -6];

$result = array_filter($stingArray, function ($item) {
  // var_dump($item);
  if ($item > 0 && !($item % 2)) {
    return true;
  }
});

var_dump($result);

$resultKey = array_filter($stingArray, function ($value, $key) {
  // var_dump($item);
  if ($item > 0 && !($item % 2)) {
    return true;
  }
}, ARRAY_FILTER_USE_BOTH);

array_walk($stingArray, function ($value, $key) {
  //var_dump($value, $key);
});