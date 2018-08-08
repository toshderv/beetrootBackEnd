<?
$stingArray = [1, 2, 3, -4, 5, -6];

// var_dump(getPositiveNumbers($stingArray)); die;

$positiveNumbers = getPositiveNumbers($stingArray, function ($items) {
  $result = [];

  foreach ($items as $item) {
    if (!($item % 2)) {
      $result[] = $item;
    }
  }

  return $result;
});

var_dump($positiveNumbers);

/**
 * Возвращает массив с положительными числами
 * 
 * @param array
 * @return array
 */
function getPositiveNumbers(array $arr, callable $callback) {
  $result = [];

  foreach ($arr as $value) {
    if ($value > 0) {
      $result[] = $value;
    }
  }

  if ($callback) {
    $result = call_user_func($callback, $result);
  }

  return $result;
}