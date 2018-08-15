<?
class MyClass {
  const NONE = 0;
  const REQUEST = 100;
  const AUTH = 101;

  private $name = 'Vadim';
  private $age = 10;

  public function __get($propertyName) {
    return 'Такого свойства нет.';
  }

  public function __set($propertyName, $propertyValue) {
    var_dump($propertyName, $propertyValue);
  }

  public function __isset($propertyName) {
    return isset($this->$propertyName);
  }
}

$myClass = new MyClass();
echo $myClass->mail;

echo $myClass->age = 12;

var_dump(isset($myClass->age));