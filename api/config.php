<?php
$server="localhost";
$dbuser="root";
$dbpassword="root";
$dbname="test";

$con=mysqli_connect($server,$dbuser,$dbpassword, $dbname);
if(!$con){
    die("db connection error");
}
?>