<?php

$localhost= "localhost";
$username= "root";
 $password= "";
 $db= "bdsistema";

 try{
     $con = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
 }
catch(PDOExceptio $e) {
    echo"conexaofalhou:<br>".$e->getMessage();
}