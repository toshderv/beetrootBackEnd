<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="page_two.php" method="post">
    <input type="hidden" name="testId" value="4">
    <input type="hidden" name="questionNumber" value="1">
    
    <p>2 + 2 = ?</p>

    <input type="number" name="answer" value="">
    <input type="submit" name="send" value="Next">
  </form>
</body>
</html>