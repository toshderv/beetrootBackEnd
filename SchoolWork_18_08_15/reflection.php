<?
class MyClass {
  const NONE = 0;
  const REQUEST = 100;
  const AUTH = 101;

  private $thisPrivate = 'value_private';
  protected $thisProtected = 'value_protected';
  public $thisPublic = 'value_public';

  // others...

  static function getConstants() {
    $oClass = new ReflectionClass(__CLASS__);
    return $oClass->getConstants();
  }
}
// ================================================
$arr = new MyClass;
if (array_key_exists('YES', $arr->getConstants())) {
  echo 'Эта константа есть!';
} else {
  echo 'Этой константы нет!';
}
var_dump($arr->getConstants());
// ================================================
$getProperties = new ReflectionClass('MyClass');
$propertiesView = $getProperties->getProperties(ReflectionProperty::IS_PRIVATE);
var_dump($propertiesView);
// ================================================
$oClass = new ReflectionClass('MyClass');
var_dump($oClass);

$oMethod = $oClass->getMethod('getConstants');
var_dump($oMethod);

var_dump($oMethod->getName());
// ================================================