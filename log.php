<?php
include("conn.php");
		 $uname=$_POST["un"];
		 $password=$_POST["pass"];
		 
		$sql="SELECT * FROM doctoradmin WHERE Name='".$uname."' and Password='".$password."'";	
		$result=mysqli_query($conn,$sql);
		
if(mysqli_num_rows($result)==1)
{
	echo "Logged in successfully ";
	header('location:appointment.html');
}
else
{
	echo "Error Login ...May be invalid data ";
}
	
mysqli_close($conn);

		 
		 ?>
