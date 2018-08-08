<?
/**
 * Получаем объект для работы с базой
 */
function getConnection() { 
  try {
    $dbConfig = include 'config/db.php';

    $pdo = new PDO("mysql:host={$dbConfig['server']};dbname={$dbConfig['db']};charset={$dbConfig['charset']}", $dbConfig['username'], $dbConfig['password']);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
  } catch(PDOException $e) {
    die("Подключение не удалось: " . $e->getMessage());
  }
}