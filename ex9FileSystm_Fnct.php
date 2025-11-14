<?php
//1GB => 1024 MB
//1MB => 1024 KB
echo disk_total_space("C:")/1024/1024/1024 ."<br>";//118
echo round(disk_free_space("C:")/1024/1024/1024,4) ."<br>"; //118
var_dump(file_exists("test.txt"))."<br>";//true
echo filesize("test.txt");

////is_Dir("name") verifier dossier ax kayn
//var_dump(is_dir("test"));//true

//MKDir("test");   //crrer dossier

////RmDir("empty_doss") supprimer dossier
//RmDir("test");

//basename(__FILE__) name dyal file li ana fih
echo basename(__FILE__)."<br>";//ex9FileSystm_Fnct.php
echo basename(__FILE__,"php")."<br>";//ex9FileSystm_Fnct.

//dirname(__FILE__)  masar file
echo dirname(__FILE__)."<br>";//C:\wamp64\www\phpConcour

//realpath(__FILE__)masar file/namefile
echo realpath(__FILE__)."<br>";//C:\wamp64\www\phpConcour\ex9FileSystm_Fnct.php

//pathinfo(__FILE__):tabl des infos
echo "<pre>";
print_r(pathinfo(__FILE__))."<br>";
echo "</pre>";
// Array
// (
//     [dirname] => C:\wamp64\www\phpConcour
//     [basename] => ex9FileSystm_Fnct.php
//     [extension] => php
//     [filename] => ex9FileSystm_Fnct
// )
echo pathinfo(__FILE__)["extension"];//php
?>