<?php
$host = 'localhost';
$user = 'root';
$pass='root ';
$db_name='blog';

$conn= new MySQLi($host,$user,$pass,$db_name);

if ($conn->connect_error) {
  die('database connection error:'. $conn->connect_error);
}else{
  echo "db connection succesful";
}

 ?>
