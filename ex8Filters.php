<?php
echo "<pre>";
print_r(filter_list());
echo "</pre>";

//filter_id
echo filter_id("boolean");//258

//filter_var
$val="true"; //true||1||on||yes
    //FILTER_VALIDATE_BOOL
//if (filter_var($val,258)) {
if (filter_var($val,FILTER_VALIDATE_BOOL)) {
    echo "this is true";
}else {
    echo "this is false";//false||0||no||off||
}
     //FILTER_NULL_ON_FAILURE =>NULL :fihalat kant xihaja bla true et false
var_dump(filter_var($val,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));
     //Filter_validate_url        et FILTER_NULL_ON_FAILURE :kataficher NULL li math9a9ch chart
$url="https://elzero.org";
var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE));
    //FILTER_FLAG_PATH_REQUIRED   :nzid masar l url  
$url1="https://elzero.org/section";
var_dump(filter_var($url1,FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED]));
     //FILTER_FLAG_QUERY_REQUIRED  :nzid id
$url2="https://elzero.org/?id=10";
var_dump(filter_var($url2,FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_QUERY_REQUIRED | FILTER_FLAG_PATH_REQUIRED ]));

    //Filter_validate_ip
    $ip="192.168.2.1"  ;
var_dump(filter_var($ip,FILTER_VALIDATE_IP));

     //Filter_validate_email
    $email="ma@gmail.com"  ;
var_dump(filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE));

     //Filter_validate_int
    $int="100" ;
var_dump(filter_var($int,FILTER_VALIDATE_INT,FILTER_NULL_ON_FAILURE));

    //Filter_validate_float
    $float="100.990" ;
var_dump(filter_var($float,FILTER_VALIDATE_FLOAT,FILTER_NULL_ON_FAILURE));

// ****SANITIZE :katsahah santax katmsh les espaces oles caraterres ****
   //Filter_sanitise_email
    $email1="ma   @  gmail .com"  ;
var_dump(filter_var($email1,FILTER_SANITIZE_EMAIL));//ma@gmail.com
 //Filter_sanitise_url
    $url="http   s://elz    ero.o rg"  ;
var_dump(filter_var($url,FILTER_SANITIZE_URL));//https://elzero.org

?>