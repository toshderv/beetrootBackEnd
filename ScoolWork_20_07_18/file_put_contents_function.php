<?
if (isset($_POST['send'])) {
  $requestData = [
    'name' =>$_POST['name'],
    'message' => $_POST['message']
  ];
  $filePath = 'counter-2.txt';

  if (file_exists($filePath)) {
    $data = unserialize(file_get_contents($filePath));
  }

  if (!$data) {
    $data = [];
  }
  
  array_push($data, $requestData);

  file_put_contents($filePath, serialize($data));
  header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/ScoolWork_20_07_18/file_put_contents.php");
}