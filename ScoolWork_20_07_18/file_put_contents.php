<?
include 'file_put_contents_function.php';

$filePath = 'counter-2.txt';
$data = unserialize(file_get_contents($filePath));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>20-07-2018-2</title>
</head>
<body>
  <form action="file_put_contents_function.php" method="post">
    <p>Name: <input type="text" name="name"></p>
    <p>Message: <textarea name="message"></textarea></p>
    <input type="submit" name="send" value="Send">
  </form>
  <div class="message">
  <?
    if ($data) {
      foreach ($data as $message) {
        echo '<p>My name is '. $message['name'] . ' I\'m ' . $message['message'] . '</p>';
      }
    }
  ?>
  </div>
</body>
</html>