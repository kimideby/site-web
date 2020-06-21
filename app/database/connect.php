<?php
$host ='localhost';
$user='root';
$pass='';
$db_name='blog';

$conn= new MYSQLI($host,$user,$pass,$db_name);

if($conn->connect_error){
    die('La connexion à la base de donnée à échoué : '. $conn->connect_error);
}
