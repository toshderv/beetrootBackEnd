<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?
    $a = 1;
    $array = [1, 2, 'name' => 'Vadim', 4, 5, 6];

    for ($i=0; $i < count($array); $i++) { 
      echo $array[$i].'<br>';
    }

    foreach ($array as $key => $value) {
      echo '!<br>';
      if ($key === 0) {
        echo 'Key: '.$key.', value: '.$value.'<br>';
        break;
      }
    }

    $i = 0;
    while ($i < 10) {
      echo $i.'<br>';
      $i++;
    }

    $i = 0;
    do {
      echo $i.'<br>';
      ++$i;
    } while ($i < 10);

    $num = 5;
    $degree = 2;

    echo myPow($num, $degree);

    /**
     * Функция для возведения числа в степень
     * 
     * @param int $num
     * @param string|NULL
     * @return int|string
     */
    function myPow($num, $degree) {
      $result = $num ** $degree;
      return $result;
    }

  ?>
</body>
</html>