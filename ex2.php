<!DOCTYPE html>
<html>

<body>
    <?php
    $x=5;//global variable
    function test1(){
         
        echo "<p>variable x inside function is : $x </p>";
    }
    test1();//variable x inside function is 
    echo "<p>variable x outside function is: $x </p>";//variable x inside function is:5
      function test2(){
         $y = 4; // local variable
        echo "<p>variable x inside function is : $y </p>";
    }
    test2();//variable x inside function is :4
    echo "<p>variable x outside function is: $y </p>";//variable x inside function is:
    $i = 5;
    $j = 10;

function myTest1() {
  global $i, $j;
  $j = $i + $j;
}
myTest1();
echo $j; // outputs 15
myTest1();
echo $j; // outputs 20
function myTest() {
  $GLOBALS['j'] = $GLOBALS['i'] + $GLOBALS['j'];
}

myTest();
echo $j; // outputs 25
function myTest3() {
  static $x = 0; // static katkhal unction thtafd blvaleur liwlat fach drna appl l function f appl 2 katzid thsab 3liha 
  echo "<br>$x";
  $x++;
}

myTest3();//0
myTest3();//1
myTest3();//2

    ?>
</body>

</html>