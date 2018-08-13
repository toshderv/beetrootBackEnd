<?
/**
 * Created by PhpStorm.
 * User: Anton Derevyanko
 * Date: 12.08.2018
 * Time: 12:28
 */

interface iRectangle {
  const NUMBER_OF_SIDES_IN_RECTANGLE = 4;

  public function getInfo();
  public function getSides();
  public function getArea();
}

interface iSquare {
  const NUMBER_OF_SIDES_IN_SQUARE = 4;

  public function getInfo();
  public function getSides();
  public function getArea();
}

interface iTriangle {
  const NUMBER_OF_SIDES_IN_TRIANGLE = 3;

  public function getInfo();
  public function getSides();
  public function getArea();
}

abstract class Figure implements iRectangle, iSquare, iTriangle {
  const NUMBER_OF_SIDES = 3;

  protected $sizes = [];
  protected $infoFigure = 'Это геометрическая фигура! Она имеет ' . self::NUMBER_OF_SIDES . ' стороны!';

  public function getInfo() {
    return $this->infoFigure;
  }
}

class Rectangle extends Figure {
  protected $infoFigure = 'Это прямоугольник! Он имеет ' . self::NUMBER_OF_SIDES_IN_RECTANGLE . ' стороны!';

  public function __construct($a, $b) {
    $this->sizes = ['a' => $a, 'b' => $b];
  }

  final public function getInfo() {
    return $this->infoFigure;
  }

  final public function getSides() {
    return $this->sizes;
  }

  final public function getArea() {
    return $this->sizes['a'] * $this->sizes['b'];
  }
}
class Square extends Figure {
  protected $infoFigure = 'Это квадрат! Он имеет ' . self::NUMBER_OF_SIDES_IN_SQUARE . ' стороны!';

  public function __construct($a) {
    $this->sizes = ['a' => $a];
  }

  final public function getInfo() {
    return $this->infoFigure;
  }

  final public function getSides() {
    return $this->sizes;
  }

  final public function getArea() {
    return $this->sizes['a'] * $this->sizes['a'];
  }
}
class Triangle extends Figure {
  protected $infoFigure = 'Это треугольник! Он имеет ' . self::NUMBER_OF_SIDES_IN_TRIANGLE . ' стороны!';

  public function __construct($a, $b, $c) {
    $this->sizes = ['a' => $a, 'b' => $b, 'c' => $c];
  }

  final public function getInfo() {
    return $this->infoFigure;
  }

  final public function getSides() {
    return $this->sizes;
  }

  final public function getArea() {
    $p = ($this->sizes['a'] + $this->sizes['b'] + $this->sizes['c']) / 2;
    return sqrt($p * ($p - $this->sizes['a']) * ($p - $this->sizes['b']) * ($p - $this->sizes['c']));
  }
}

$figures[] = new Rectangle(5, 4);
$figures[] = new Square(4);
$figures[] = new Triangle(5,6,7);

foreach ($figures as $figure) {
  echo $figure->getInfo() . 'При размерах: ';
  foreach ($figure->getSides() as $side => $size) {
    echo $side . ' = ' . $size . ', ';
  }
  echo '<br>Его площадь(S) = ' . $figure->getArea() . '<br><br>';
}

foreach ($figures as $key => $value) {
  echo var_dump($value);
}