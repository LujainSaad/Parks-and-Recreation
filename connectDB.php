<?php
$dbhost = "localhost";
$userName = "root";
$password = ""; 
$dbname = "Asir_Tourism.sql"; 
try
{
    $connect = new PDO("mysql:host=$dbhost; dbname=$dbname", $userName, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected Successfully" ;

}
catch(PDOException $e) {
    echo "Connection Failed" .$e->getMessage();
}
?>