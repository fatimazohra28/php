<!DOCTYPE html>
<html>

<body>

    <?php
      //******function ********
      $list=["a","b","c","d"];
    function sum($x, $y) {
  $z = $x + $y;
  return $z;
}//ila kna ghnst3mlo function bzaf khas darory mn return ex :
 echo $list[sum(2,1)] ."<br>";//d        



 
    //*******class*******
    class Car {
        public $color;
        public $model;
        public function __construct($col,$mod){
            $this->color=$col;
            $this->model=$mod;

        }
    };
    $car1=new Car('red','toyota');
    foreach($car1 as $k=>$v){
        echo "$k est $v . ";
    }//color est red  . model est toyota .
//2
function get_data($nom ="fatima", $age=27, $ville="tanger"){
    $data = "<br> my name is ". $nom . " I m ". $age." i live in ". $ville;
    return $data;
}
echo get_data();//my name is fatima I m 27 i live in tanger
echo get_data("a","b","c");//my name is a I m b i live in c
echo get_data($nom="zohra");//my name is zohra I m 27 i live in tanger
//method1
 function somme1(){
    $s=0;
    foreach (func_get_args() as $a){
        $s+=$a;
     }
    return $s;
 }
 echo somme1(12,12,23,23,43);
//method
   function somme2(...$tabl){
    $s=0;
    foreach ($tabl as $a){
        $s+=$a;
     }
    return $s;
 }
 echo "<br>".somme2(12,12,23,23,43);
 //arg=table
 function get_data2($nom, $age=27, ...$modules){
    $data = "<br> my name is ". $nom . " I m ". $age;
    echo $data ."<br>";
    foreach($modules as $a){
        echo $a."<br>";
    }
}
$modls=["html","css","js"];
 get_data2("fati","27",...$modls);
 //function variable
 function one($a){
    return "one from function $a";
 }    
 $funct1="one"; //vaiable="nom d function" =>variable()
 echo $funct1(18);//one from function 18
 //anonyme funct in variable
 $var_fonct= function(){
    return "hello";
 };

echo $var_fonct();

//short function ( fn()=>...; )
 $var_fonct2 = fn() =>"<br> hello <br>";

echo $var_fonct2();
//variable from variable scop
$exprt="hello";
$say_hello= function($prt) use($exprt){
    return $exprt .$prt;
 };

echo $say_hello("fatima");
//short function 
$exprt2="hello";
$say_hello2= fn($prt2)=> "<br>".$exprt2 .$prt2 ."<br>";

echo $say_hello2("fatima");
//anonym funct to funct=> array_map
$array=[10,12,34,5,34];
function add_five($x)
{
    return $x+5;
} 
$array_after_adding=array_map("add_five",$array);
print_r($array_after_adding);
//can write :array_map(function(){... },$array)









?>
</body>

</html>