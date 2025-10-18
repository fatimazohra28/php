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
echo get_data(nom:"zohra");//my name is zohra I m 27 i live in tanger

  
    ?>
</body>

</html>