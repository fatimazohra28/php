<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php
    /*C’est un langage de programmation côté serveur 
    utilisé principalement pour développer des sites et applications web dynamiques.
    C’est un langage open-source,*/
    //ex1 
    echo "first script in php" ." <br>" ;
    //Respect the writing style (uppercase, lowercase) of the variable: $VaR1 is not $var1
   //There is a difference between " " and ' '
    $var1='red';
    echo 'my color is '. $var1."<br>";
    //2
    $var2='blue';
    echo "I love $var2";
    //3
    $x=5;
    $y=10;
    echo $x + $y;//calculated
    //var_dump()=eturns for other data types:
    var_dump($var1);
    var_dump($x);
    var_dump(3.14);
    var_dump([1,2,3]);
    var_dump(NULL);
    var_dump(false);
$x = $y = $z = "Fruit";

echo $x.'<br>';
echo $y.'<br>';
echo $z.'<br>';

    ?> </body>
<p></P>


</html>