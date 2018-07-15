<?
include '../logics.php';

$correntAnswer = [
  'test_4' => ['4', '9', '12']
];

$userAnswers = $_SESSION["test_{$_POST['testId']}"];

if (!array_diff($userAnswers, $correntAnswer["test_{$testId}"])) {
  echo 'Тест пройден!<br><a href="../">Пройти тест еще раз</a>';
} else {
  echo 'Тест не пройден!<br><a href="../">Пройти тест еще раз</a>';
}