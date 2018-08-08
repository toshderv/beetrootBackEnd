<?
include '../logics.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="page_three.php" method="post">
    <input type="hidden" name="testId" value="4">
    <input type="hidden" name="questionNumber" value="2">

    <p>7 + 2 = ?</p>

    <input type="number" name="answer">
    <input type="submit" name="send" value="Next">
  </form>
</body>
</html>