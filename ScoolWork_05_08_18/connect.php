<?
$server = "localhost";
$username = "root";
$password = "";
$db = "beetroot_student";
$charset = 'utf8';

try {
  $pdo = new PDO("mysql:host=$server;dbname=$db;charset=$charset", $username, $password);
  $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "connected";
  include 'query.php';
} catch(PDOException $e) {
  die("Подключение не удалось: " . $e->getMessage());
}