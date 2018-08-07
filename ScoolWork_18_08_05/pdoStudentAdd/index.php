<?
include 'components/db.php';

$dbConnection = getConnection();

if (isset($_POST['send'])) {
  $success = true;

  $sql = $dbConnection->prepare('INSERT INTO student (name, age, university_id) VALUES (:name, :age, :university_id)');
  $sql->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
  $sql->bindParam(':age', $_POST['age'], PDO::PARAM_INT);
  $sql->bindParam(':university_id', $_POST['universityId'], PDO::PARAM_INT);
  $result = $sql->execute();  

  if ($result) {
    $message = 'Пользователь добавлен';
  } else {
    $success = false;
    $message = 'Ошибка добавления пользователя';
  }

  header('Location: /ScoolWork_05_08_18/pdoStudentAdd/?success='.$success.'&message='.$message);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PDO student add</title>
</head>
<body>
  <h1>С помощью этой формы добавьте студента</h1>
  <form action="" method="post">
  <?
    if (isset($_GET['success'])) {
      echo $_GET['success'] ? '<p style="color:green">' . $_GET['message'] . '</p>' : '<p style="color:red">' . $_GET['message'] . '</p>';
      // echo '<p>' . $_GET['message'] . '</p>';
    }
  ?>
  <p>Имя студента: <input type="text" name="name" id="name" placeholder="Имя студента" required></p>
    <p>Возраст студента: <input type="number" name="age" id="age" min="16" max="200" placeholder="Возраст студента" required></p>
    <p>Университет: 
      <select name="universityId" id="universityId" required>
        <option value="1">ДГМА</option>
        <option value="2">КЭГИ</option>
        <option value="3">ДЖКХ</option>
      </select>
    </p>
    <input type="submit" name="send" value="Add student">
  </form>
</body>
</html>