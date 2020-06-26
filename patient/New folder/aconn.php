<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sugan";
$aconn=mysqli_connect($servername,$username,$password,$dbname);

if(!$aconn)
{
die("connection failed:".mysqli_connect_error());
}
?>