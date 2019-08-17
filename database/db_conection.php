<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/21/2014 
 * Time: 1:13 AM 
 */  

$servername = "localhost";
$username = "id8332800_slambook2018";
$password = "Ritik-V-19";
$database = "id8332800_slambook2018";

$dbcon=mysqli_connect($servername, $username, $password, $database); 
if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>