<?
if (isset($_POST['send'])) {
  $data = [
    'name' =>$_POST['name'],
    'message' => $_POST['message']
  ];

  $fp = fopen('counter.txt', 'a');
  $test = fwrite($fp, serialize($data));
  fclose($fp);
  
  header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/ScoolWork_20_07_18/");
}

$fpRead = fopen('counter.txt', 'r');
$ourArray = fread($fpRead, filesize('counter.txt'));
fclose($fpRead);

// var_dump(unserialize($ourArray));
//foreach (unserialize($ourArray) as $value) {
  echo '<p>Name: '. unserialize($ourArray)['name'] .', Message: '. unserialize($ourArray)['message'] .'</p>';
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>20-07-2018</title>
</head>
<body>
  <form action="" method="post">
    <p>Name: <input type="text" name="name"></p>
    <p>Message: <textarea name="message"></textarea></p>
    <input type="submit" name="send" value="Send">
  </form>
</body>
</html>