<?php

 
    $serverName = "rohit12.datbase.windows.net";
$Database="rohit";
$Ud = "rohit@rohit12";
$PWD = "qwerty123$";
    $port="1433";
$socket="tcp";
   $conn = mysqli_connect($serverName,$Ud,$PWD ,$Database,$port,$socket);
 
if($conn === false)
{
    die("fucked up");
}
else{
echo "connected";
}
?>