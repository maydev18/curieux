<?php
session_start();


include ("includes/connection.php");

$ename = $_POST['ename'];
$date = $_POST['date'];
$result = $_POST['result'];
$description = $_POST['description'];

$qy = "insert into achievements(ename, date , result, descp) values ('$ename', '$date' , '$result', '$description') ";
	mysqli_query($con, $qy);

echo "achievement submitted";

?>
