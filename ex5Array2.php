<?php 
//array_map
$arg1=["zelmati","saidi","allaoui","amrani"];
$arg2=["fatima","ahmad","yassmine","ali"];
function hello($a,$b){ 
    return "hi $a $b";}
print_r(array_map("hello",$arg1,$arg2));//[0]=>hi zelmati fatima [1]=>hi saidi ahmad [2]=>hi allaoui yassmine [3] => hi amrani ali 
print_r(array_map(fn($a,$b)=>"hi $a $b",$arg1,$arg2));//[0]=>hi zelmati fatima [1]=>hi saidi ahmad [2]=>hi allaoui yassmine [3] => hi amrani ali 

//array_filter
$nums=[2=>3,3=>5,21=>7,9=>21,4=>2,23=>1];
function condition($c){
    return $c>4;
}
print_r(array_filter($nums,"condition"));//[3] => 5 [21] => 7 [9] => 21  // filter dyal values pardifaut
print_r(array_filter($nums,"condition",ARRAY_FILTER_USE_KEY));// [21] => 7 [9] => 21 [23] => 1
function condition2($key,$val){
    return $key>4||$val>4;
}
print_r(array_filter($nums,"condition2",ARRAY_FILTER_USE_BOTH));//[3] => 5 [21] => 7 [9] => 21 [23] => 1  filter dyal key et values
//array_reduce
 function add($prev,$item){
    echo "previous : $prev <br>";
    echo "item $prev <br>";
    echo "somme:" .$prev + $item ."<br>";
    echo "******";
    return $prev + $item;

 }
 $tab=[12,3,56,8,122,67];
 echo array_reduce($tab,"add",20);//20 9ima aalia bax ybda lhsab
 /**previous : 20
item 20
somme:32
******previous : 32
item 32
somme:35
******previous : 35
item 35
somme:91
******previous : 91
item 91
somme:99
******previous : 99
item 99
somme:221
******previous : 221
item 221
somme:288
******288 */
?>