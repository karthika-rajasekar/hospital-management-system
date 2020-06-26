<?php
include("aconn.php");
		 $uname=$_POST["un"];
		 $password=$_POST["pass"];
		 
		$sql="SELECT * FROM doctoradmin WHERE Name='".$uname."' and Password='".$password."'";	
		$result=mysqli_query($aconn,$sql);
		
if(mysqli_num_rows($result)==1)
{
	echo "Logged in successfully ";
}
else
{
	echo "Error Login ...May be invalid data ";
}
	
mysqli_close($aconn);

		 
		 ?>
