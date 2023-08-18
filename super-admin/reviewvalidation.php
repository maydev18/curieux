<?php
session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'curieuxweb');

$id = $_POST['id'];

$disp = $_POST['disp'];

$qy = "update reviews set disp = '$disp' where id = '$id'; ";
mysqli_query($con, $qy);
?>

<script type="text/javascript">
	alert("review updated");
</script>

<?php

header('location:index.php');
?>
