<?php
header("Content-Type: application/json; charset=UTF-8");
//echo($_SERVER['QUERY_STRING']);
$sss = $_SERVER['QUERY_STRING'];
//echo($sss);
$errorreason = "NULL";


//$notfound = "{\"ERROR\": {\"Reason\": \"Not found.\"}}";
$error = "{\"ERROR\": {\"Reason\": \"{$errorreason}\"}}";



$file = file_get_contents("./MD5.json");

$MD5 = json_decode($file,true);
if (isset ($MD5[$sss])){
    echo($MD5[$sss]);
    

}

else{
    $errorreason = "Not found";
    $error = "{\"ERROR\": {\"Reason\": \"{$errorreason}\"}}";
    echo($error);
}





?>
