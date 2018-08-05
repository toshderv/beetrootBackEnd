<?
$server = "localhost";
$username = "root";
$password = "";
$db = "beetroot_backend";

try {
  $handle = new PDO("mysql:host=$server;dbname=$db;charset=utf8", "$username", "$password");
  $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connected";
} catch(PDOException $e) {
  die("Подключение не удалось: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>03-08-2018</title>
</head>
<body>
<?
  $sql = $handle->query("SELECT * FROM `users`");
  $result = $sql->fetchAll(PDO::FETCH_ASSOC);

  echo '<pre>';
  var_dump($result);
  echo '</pre>';
?> 
</body>
</html>