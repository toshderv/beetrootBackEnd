<?
if (isset($_POST['send'])) {  
  var_dump($_POST);
  var_dump($_FILES);
  move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$_FILES['file']['name']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Post, Get, Sessions, Cookies</title>
</head>
<body>
  <p>Введите Ваше имя и email!</p>
  <form action="/ScoolWork_15_07_18/root.php" method="POST" enctype="multipart/form-data">
    <p>
      <input type="text" name="name" placeholder="Your name" required>
    </p>
    <p>
      <input type="text" name="email" placeholder="your@mail.please" required>
    </p>
    <p>
      <input type="file" name="file">
    </p>
    <input type="submit" name="send" value="Send">
  </form>
</body>
</html>