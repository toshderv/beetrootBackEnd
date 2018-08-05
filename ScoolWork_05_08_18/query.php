<?
// $sql = $pdo -> prepare("SELECT * FROM student WHERE university_id = ? AND age > ?");
// $sql -> execute(array($universityID, $studentAge));

// $sql = $pdo -> prepare("SELECT * FROM student WHERE university_id = :universityID AND age > :age");
// $sql -> execute(array('universityID' => $universityID, 'age' => $studentAge));

// $sql = $pdo -> prepare("SELECT * FROM student WHERE university_id = ? AND age > ?");
// $sql -> bindParam(1, $universityID, PDO::PARAM_INT);
// $sql -> bindParam(2, $studentAge, PDO::PARAM_INT);
// $sql -> execute();

$sql = $pdo -> prepare("SELECT * FROM student WHERE university_id = :universityID AND age > :age");
$sql -> bindParam(':universityID', $universityID, PDO::PARAM_INT);
$sql -> bindParam(':age', $studentAge, PDO::PARAM_INT);
$sql -> execute();

$result = $sql -> fetchAll(PDO::FETCH_ASSOC);