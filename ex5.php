<?php 
//array_map
$arg1=["zelmati","saidi","allaoui","amrani"];
$arg2=["fatima","ahmad","yassmine","ali"];
function hello($a,$b){ 
    return "hi $a $b";}
print_r(array_map("hello",$arg1,$arg2));//[0]=>hi zelmati fatima [1]=>hi saidi ahmad [2]=>hi allaoui yassmine [3] => hi amrani ali 
print_r(array_map(fn($a,$b)=>"hi $a $b",$arg1,$arg2));//[0]=>hi zelmati fatima [1]=>hi saidi ahmad [2]=>hi allaoui yassmine [3] => hi amrani ali 

//array_filter
$nums=[1,3,2,9,4,23];
function condition($c){
    return $c>4;
}
print_r(array_filter($nums,"condition"));//[3] => 9 [5] => 23
?>