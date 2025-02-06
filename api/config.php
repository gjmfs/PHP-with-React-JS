<?php
$server="localhost";
$dbuser="root";
$dbpassword="root";
$dbname="react_php";

$conn=mysqli_connect($server,$dbuser,$dbpassword, $dbname);
if(!$conn){
    die("db connection error");
}
?>