<?php
include("aconn.php");
		 $uname=$_POST["un"];
		 $password=$_POST["pass"];
		 $mail=$_POST["email"];
		 
		 $sql="INSERT INTO `doctoradmin`(`Name`, `Password`, `Email`) VALUES ('".$uname."','".$password."','".$mail."')";
if (mysqli_query($aconn,$sql))
{
	echo "your details are saved.....`:)";
}
else
{
	echo "error in inserting ".mysqli_error($aconn);
}	
mysqli_close($aconn);

		 
		 ?>
