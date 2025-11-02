<!DOCTYPE HTML>
<html>

<body>
    <?php
    echo "Hello";
//same as:
echo("Hello");
//echo=print 
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return  "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);//object(Car)[1] public 'color' => string 'red' (length=3) public 'model' => string 'Volvo' (length=5)
echo $myCar->message();//My car is a red Volvo!
echo strlen("Hello");//5 litres
echo str_word_count("Hello world!");//2 mots
echo strpos("Hello world!", "world");//6 position  mn 0 kanbdaw lhsab
$x = "Hello World!";

echo strtoupper($x);//HELLO WORLD! maj
echo strtolower($x);// hello world! minusc
echo str_replace("World", "Dolly", $x);//remplacerword b dolly
echo strrev($x);//!dlroW olleH //reverse= t9lb
$x[0]="l";//pour modifie
echo "<br>".$x;
$y = explode(" ", $x);//kat9asam chaine l table b ispace
print_r($y);
//implode # explode ,(chang array to chaine)
$nv_chaine = implode(" ", $y);
echo "<br> new string".$nv_chaine;
echo "<input value='" . trim($x) . "'>";//trim: زالة أي مسافة بيضاء من البداية أو النهاية. 
echo substr($x, 6, 4);//worl index 6 position 4(mn index 6 nbdaw nhsbo 4)
  //Constant 
       //const cannot be created inside another block scope, like inside a function or inside an if statement.
       //define() can be created inside another block scope.(define=GLOBAL)
    define("nom","fatimazohra");//define(name, value);
    echo nom;//fatimazohra
    //const
    const prenom="zelmati";
    echo '<br>'.prenom;
    // array
          define("cars", ["Alfa Romeo","BMW","Toyota"]);
              echo cars[0];//Alfa Romeo
              echo __DIR__;//C:\wamp64\www\phpConcour
              echo __FILE__;//C:\wamp64\www\phpConcour\ex4.php
   $x = 20;  
   $x += 100;
     echo $x;//120
?>
</body>

</html>