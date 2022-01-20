<?php

$host="localhost";
$db="crud_practica_php";
$user="root";
$pswd="";

try {
    $connection=new PDO("mysql:host=$host;dbname=$db",$user,$pswd);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>