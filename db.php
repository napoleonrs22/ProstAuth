<?php
$servername ='localhost';
$username ='root';
$password=2035;
$dbname='registeruser';


$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn){

  die('connection fialed'.mysqli_connect_error());
}else{
}
?>