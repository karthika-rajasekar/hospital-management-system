<?php
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'test';
$connection = mysqli_connect($db_server,$db_user,$db_pass);
if($connection)
{
$db = mysqli_select_db($connection,$db_name);
$date=$_POST['date'];
$pid=$_POST['in_id'];
$pname=$_POST['name'];

$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
$m6=$_POST['m6'];
$m7=$_POST['m7'];
$m8=$_POST['m8'];
$m9=$_POST['m9'];
$m10=$_POST['m10'];

$query="insert into prescription(presc_date,patientId,patientName,Medicine1,Medicine2,Medicine3,Medicine4,Medicine5,Medicine6,Medicine7,Medicine8,Medicine9,Medicine10)values('$date','$pid','$pname','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9','$m10')";
$result = mysqli_query($connection,$query);
if($result)
{
#include("mail.php");
}
else
{
	echo "not inserted";
}
}
else{
	echo"no conn";
}
	
?>