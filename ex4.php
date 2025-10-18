<!DOCTYPE html>
<html>

<body>
    <?php
  //IF ELSE

  
  /* if (condition) {
  // code to be executed if condition is true;
} else {
  // code to be executed if condition is false;
}*/


  // != Not equal    / <> Not equal  / &&	And   /   || Or


  //Short Hand If
  if (5 < 10) echo "Hello";// Hello
  //Short Hand If...Else
  $b = 30 < 10 ? "Hello" : "Good Bye";
echo $b;

//Switch 
/*switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
} */

//while 
$i = 1;
while ($i < 6) {
  if ($i == 3) break;  
  echo $i;
  $i++;
} //1 2
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;// fotha okml /Stop, and jump to the next iteration if $i is 3 .توقف وانتقل إلى التكرار التالي إذا كان 
  echo $i;
};// 1 2 4 5 6 
//do while
$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 6);// 1 3 2 4 5 6 
// for
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
};
//foreach
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
};
//array (Keys => Values)
$nbr=array("nbr1"=>12,"nbr2"=>23);
foreach($nbr as $k => $v){
    echo "$k est $v <br>";
}
    ?>
</body>

</html>