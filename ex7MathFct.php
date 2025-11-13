<?php
echo abs(-20);// 20 9ima motla9a 
echo rand()."<br>";//numbr 3achwa2i 3la ola actualisation
echo rand(10,20)."<br>";//rand(min,max)
echo intdiv(3,2)."<br>"; //1    3/2=1.5
echo 17%3 ."<br>";// 2 lba9i
echo fmod(17,3) ."<br>";//2
//% VS fmod 
echo 17.5%3 ."<br>";// 2 lba9i
echo fmod(17.5,3) ."<br>";//2.5
 

echo ceil(5.99)."<br>";//6
echo ceil(5.01)."<br>";//6

echo floor(5.99)."<br>";//5
echo floor(5.01)."<br>";//5

echo round(5.50)."<br>";//6
echo round(5.49)."<br>";//5
echo round(5.49,1)."<br>";//5.5

echo sqrt(25)."<br>";//5       5*5
echo sqrt(16)."<br>";//4       4*4

echo min([12,3,44,5,6,1])."<br>";//1
echo max([12,3,44,5,6,1])."<br>";//44




?>