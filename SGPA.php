<?php

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', ' ','sgpacalc');
// get the post records
$cd1 = $_POST['c1'];
$cd2 = $_POST['c2'];
$cd3 = $_POST['c3'];
$cd4 = $_POST['c4'];
$cd5 = $_POST['c5'];
$cd6 = $_POST['c6'];
$cd7 = $_POST['c7'];
$cd8 = $_POST['c8'];
$cd9 = $_POST['c9'];

$gd1 = $_POST['g1'];
$gd2 = $_POST['g2'];
$gd3 = $_POST['g3'];
$gd4 = $_POST['g4'];
$gd5 = $_POST['g5'];
$gd6 = $_POST['g6'];
$gd7 = $_POST['g7'];
$gd8 = $_POST['g8'];
$gd9 = $_POST['g9'];

$result = $_POST['sgpaoutput'];

// database insert SQL code
$sql = "INSERT INTO sgpatable (cp1,cp2,cp3,cp4,cp5,cp6,cp7,cp8,cp9,gp1,gp2,gp3,gp4,gp5,gp6,gp7,gp8,gp9,op) 
values ('$cd1','$cd2','$cd3','$cd4','$cd5','$cd6','$cd7','$cd8','$cd9','$gd1','$gd2','$gd3','$gd4','$gd5','$gd6','$gd7','$gd8','$gd9','$result')";
// insert in database
$calc = mysqli_query($con, $sql);
if($calc)
{
echo "Contact Records Inserted successfully";
}
}
else
{
echo "Contact Records Inserted";
}
?>