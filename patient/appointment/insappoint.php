<?php
include("aconn.php");
		 $name=$_POST["name"];
		 $phno=$_POST["phonenumber"];
		 $mail=$_POST["email"];
		 $address=$_POST["address"];
		 $city=$_POST["city"];
		 $pincode=$_POST["pincode"];
		 $age=$_POST["age"];
		 $s1=$_POST["selector1"];
		 $s2=$_POST["selector2"];
		 
		 
		 $sql="INSERT INTO `appointmentdetails`(`Name`, `Email` , `PhoneNumber` , `Address` , `City` , `Pincode` , `Age` , `Time` , `Type` ) VALUES ('".$name."','".$mail."' , '".$phno."' , '".$address."' , '".$city."' , '".$pincode."', '".$age."' ,'".$s1."' , '".$s2."')";
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
