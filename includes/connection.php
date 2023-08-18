<?php
$servername="sql107.epizy.com";
$username="epiz_32153738"; //ekamjit
$password="1YXhWlEEPRKZeSe";  //Mycurieuxweb@123
$dbname="epiz_32153738_curieuxweb"; 

$con=new mysqli($servername,$username,$password,$dbname);

if($con->connect_error)
{
     die("Connection failed: ".$con->connect_error);
}
?>