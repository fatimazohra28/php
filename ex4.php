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
//array  function : array_chunk($array,int)
$tab=["fatima","maroine","osama","asmae","wafae"];
print_r(array_chunk($tab,2));
$tab_aso=["ma"=>"maroc","eg"=>"egypt","usa"=>"unites states","sy"=>"syria"];
print_r(array_chunk($tab_aso,2,true));//ta9sim tab 33la 2 true bach yaficher keys htahoma 
// fn :array_combine(array $keys,array $values)
$tab1 =["A","B","f"];
$tab2=["ahmed","bochra","fatima"];
print_r(array_combine($tab1,$tab2));//[A] => ahmed [B] => bochra [f] => fatima 
//array_reverse(array normal)
print_r(array_reverse($tab1));// [0] => f [1] => B [2] => A 
print_r(array_reverse($tab1,true));// [2] => f [1] => B [0] => A 
//array_flip(array aso)  value=>key
print_r(array_flip($tab_aso));//maroc=>ma ...
//count(array,mode[optionnel]) mode=1 || mode =0
$tab11 =["A","B","f",[1,2,3]];
echo count($tab11);//4
echo count($tab11,1);//7
echo count($tab11,0);//4
//array_count_values(array) like group by
$countiong=["a","b","a","c","b","b"];
print_r(array_count_values($countiong));// [a] => 2 [b] => 3 [c] => 1
//array (Keys => Values)
$nbr=array("nbr1"=>12,"nbr2"=>23);
foreach($nbr as $k => $v){
    echo "$k est $v <br>";
}
//**** in_array(search[requi],array normal)  ******/
if (in_array("B",$tab11)){
    echo "element is found" ;
}
//**** array_key_exists(key,array asociat)  ******/
$courses=["php"=>100 ,"css"=>130,"html"=>80];
if(array_key_exists("css",$courses)){
    echo "course is found and price est : ".$courses["css"];
}
//array_keys(array,search_value,booln)
$tab22=["a","b","c","1",1];
print_r(array_keys($tab22,"c"));//[0] => 2
print_r(array_keys($tab22,"1"));//[0] => 3   [1] => 4 
print_r(array_keys($tab22,"1",true));//[0] => 3 
$tab33=["a"=>"asmae","b"=>"basma"];
print_r(array_values($tab33));//[0]=>asmae  [1]=>basma 
$elm=[4,78,56];
echo array_product($elm)."<br>" ; //17472
echo array_sum($elm);//138
print_r(array_pad($elm,6,"@"));//[0]=>4 [1]=>78 [2]=>56 [3]=>@ [4]=>@ [5]=>@ 
print_r(array_pad($elm,-6,"@"));//[0]=>@ [1]=>@ [2]=>@ [3]=>4 [4]=>78 [5]=>56 
//************************* */
$tab22=["a","b","c","1",1];
echo current($tab22); //a   lhali
echo next($tab22); //b   tali
echo current($tab22); //b  lhali
echo prev($tab22); //a   sabi9
echo end($tab22); //1   laakhir
echo current($tab22); //1  lhali
echo reset($tab22) ."<br>"; //a  laawal
//**************************** */

$tab_merge1=["one"=>"php" ,"two"=>"css","three"=>"js"];
$tab_merge2=["one"=>"html" ,"four"=>"mysql"];
print_r(array_merge($tab_merge1,$tab_merge2));//[one]=>html [two]=>css [three]=>js [foor]=>mysql 
    

$tab_merge3=["10"=>"php" ,"20"=>"css","30"=>"js"];
$tab_merge4=["40"=>"html" ,"10"=>"go"];
print_r(array_merge($tab_merge3,$tab_merge4));//[0]=>php [1]=>css [2]=>js [3]=>html[4]=>go  

print_r(array_replace($tab_merge1,$tab_merge2));//meme resultat 1 dyal array_merge
   
print_r(array_replace($tab_merge3,$tab_merge4));// [10]=>go [20]=>css [30]=>js [40]=>html 
$tab31=["a","b","c","1",1];
 //  array_rand(array) kat3ti les index(key) dyal araay 3chwa2ian
echo $tab31[array_rand($tab31)];//val aleatoire  array[index]
shuffle($tab31);//execution dyal shuffle katkhrb9 tab
print_r($tab31);//application 
/******** */
$alphb=["A","B","C","D"];
array_shift($alphb);//delete first element
array_pop($alphb);//delete last element
array_unshift($alphb,"A2");//add  element in debut
array_push($alphb,"D2");//add  element in END
$alphb[]="D3";//autre methode d'ajoute =push
print_r($alphb);
/*********************** */   
//array_slice($array,position_starting,nombre elemts)
$alphb1=["A","B","C","D","E","F","G"];

print_r(array_slice($alphb1,2));//[0]=>C [1]=>D [2]=>E [3]=>F [4]=>G 
print_r(array_slice($alphb1,-4));//[0]=>D [1]=>E [2]=>F [3]=>G 

print_r(array_slice($alphb1,2,2));//[0]=>C [1]=>D
print_r(array_slice($alphb1,2,-2));//[0]=>C [1]=>D [2]=>E
print_r($alphb1);//maw9a3 walo ltabl *****
$chats=[10=>1,20=>2,30=>3];
print_r(array_slice($chats,0,2));//[0] => 1 [1] => 2 
print_r(array_slice($chats,0,2,true));// [10] => 1 [20] => 2

//array_splice($array,position_starting,nombre elemts,elmts replace)

//print_r(array_splice($alphb1,2));//[0]=>C [1]=>D [2]=>E [3]=>F [4]=>G 
//print_r($alphb1);//[0]=>A [1]=>B *****

//print_r(array_splice($alphb1,2,-2));//[0] => C [1] => D [2] => E
//print_r($alphb1);//[0] =>A [1] =>B [2] =>F [3] =>G  *****

//print_r(array_splice($alphb1,2,2,["CN","DN"]));//0] => C [1] => D
//print_r($alphb1);//[0]=>A [1]=>B [2]=>CN [3] => DN [4] => E [5] => F [6] => G
   
print_r(array_splice($alphb1,2,1,["CN","DN"]));//0] => C 
print_r($alphb1);//[0] => A [1] => B [2] => CN [3] => DN [4] => D [5] => E [6] => F [7] => G
   
   /***** */
   //sort(tabl) tartib tab normal  sort # rsort(tabl)
   //asort(tabl) tartib tab associat (tartib b values)  sort # arsort(tabl)
   //ksort(tabl) tartib tab associat (tartib b keys)  sort # krsort(tabl)
   $files=["photo1.png","photo20.png","photo3.png"];
   //sort($files);//[0] => photo1.png [1] => photo20.png [2] => photo3.png 
natsort($files);//[0] => photo1.png [2] => photo3.png [1] => photo20.png )
//natsort($files) :kadir tartib lbachar
print_r($files);

   ?>
</body>

</html>