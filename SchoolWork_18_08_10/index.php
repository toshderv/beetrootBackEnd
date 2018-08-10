<?
class User {
  const MAX_AGE = 100;

  protected $name;
  protected $age;
  protected $email;

  private static $classDescription = 'Этот класс для работы с user';

  /**
   * User constructor.
   * @param $name
   * @param $age
   * @param $email
   */
  function __construct($name, $age, $email)
  {
    $this->name = $name;
    $this->age = $age;
    $this->email = $email;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public static function getClassDescription()
  {
    return self::$classDescription . ' Кому меньше ' . self::MAX_AGE;
  }

  /**
   * @return string
   */
  function getUserInfo()
  {
    return 'Меня зовут ' . $this->name . '.<br>Мне ' . $this->age .'<br>';
  }

  /*function __destruct()
  {
      echo 'Объект был удален';
  }*/
}

class Student extends User {
  private $cash;

  /**
   * Student constructor.
   * @param $name
   * @param $age
   * @param $email
   */
  public function __construct($name, $age, $email, $cash)
  {
    parent::__construct($name, $age, $email);
    $this->cash = $cash;
  }

  /**
   * @return string
   */
  function getStudentInfo() {
    return $this->getUserInfo().
      ' Деньги: ' . $this->cash;
  }
}

/*$userOne = new User('Vadim', 18, 'vadim@gmail.com');

echo $userOne->getUserInfo();
echo User::getClassDescription();

$userOne->setName('Anton');
echo $userOne->getName();

var_dump($userOne);*/

$student = New Student('Vadim', 18, 'vadim@gmail.com', 100);
echo $student->getStudentInfo();
var_dump($student);
die;