<?php
session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'curieuxweb');

$ename = $_POST['ename'];
$date = $_POST['date'];
$result = $_POST['result'];
$description = $_POST['description'];

$qy = "insert into achievements(ename, date , result, descp) values ('$ename', '$date' , '$result', '$description') ";
	mysqli_query($con, $qy);

echo "achievement submitted";

?>
