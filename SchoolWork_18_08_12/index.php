<?
interface iUser {
  const MAX_AGE = 100;

  public function getUserInfo();
  public function sayHello();
}

interface iContact {
  function getContact();
}

abstract class User implements iUser, iContact {
//  const MAX_AGE = 100;

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
  function __construct($name, $age, $email) {
    $this->name = $name;
    $this->age = $age;
    $this->email = $email;
  }

  /**
   * @return mixed
   */
  public function getName() {
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
  public static function getClassDescription() {
    return self::$classDescription . ' Кому меньше ' . self::MAX_AGE;
  }

  /**
   * @return string
   */
  public abstract function getUserInfo();

  function __destruct() {
      echo 'Объект был удален<br>';
  }
}

class Student extends User {
  private $cash;

  public function __construct($name, $age, $email, $cash) {
    parent::__construct($name, $age, $email);
    $this->cash = $cash;
  }

  function getStudentInfo() {
    return $this->getUserInfo().
      ' Деньги: ' . $this->cash;
  }

  final public function getUserInfo() {
    return 'Меня зовут ' . $this->name . '.<br>Мне ' . $this->age .'<br>';
  }

  function sayHello() {
    return 'Я студент ' . $this->name;
  }

  function getContact() {
    // TODO: Implement getContact() method.
  }
}

class Teacher extends User {
  public function __construct($name, $age, $email)
  {
    parent::__construct($name, $age, $email);
  }

  function getUserInfo()
  {
    return 'Меня зовут ' . $this->name . '.<br>Мне ' . $this->age .'<br>';
  }

  function sayHello() {
    return 'Я учитель ' . $this->name;
  }

  function getContact() {
    // TODO: Implement getContact() method.
  }
}

$users[] = new Student('Vadim', 18, 'vad@gmail.com', 100);
$users[] = new Teacher('Max', 25, 'max@gmail.com');

foreach ($users as $user) {
  echo $user->sayHello() . '<br>';
}