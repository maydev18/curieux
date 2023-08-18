<?php

session_start();

include ("includes/connection.php");

$q = " select * from users";


$name = $_POST['name'];
$desg = $_POST['desg'];
$rating = $_POST['rating'];
$comments = $_POST['review'];

$comments = str_ireplace("'","\'",$comments);
$desg = str_ireplace("'","\'",$desg);

$qy = "insert into reviews(name , designation, rating, comments, disp) values ('$name' , '$desg', '$rating', '$comments', '0') ";
	mysqli_query($con, $qy);

$_SESSION['submitted']='y';
header('location:index.php');
?>

