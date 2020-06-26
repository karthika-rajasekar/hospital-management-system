<html>
<body> 

 <?php 
include("sql1.php");

$date=$_POST["date"];
$company_name=$_POST["company_name"];
$material_type=$_POST["material_type"];
$no_of_bags=$_POST["no_of_bags"];
$rate_of_bags=$_POST["rate_of_bags"];
$total_amount_of_bags=$_POST["total_amount_of_bags"];
$no_of_rolls=$_POST["no_of_rolls"];
$rate_of_rolls=$_POST["rate_of_rolls"];
$total_amount_of_rolls=$_POST["total_amount_of_rolls"];
$grand_total=$_POST["grand_total"];

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}

$sql="INSERT INTO `thread`(`date`, `company_name`, `material_type`, `no_of_bags`, `rate_of_bags`, `total_amount_of_bags`, `no_of_rolls`, `rate_of_rolls`, `total_amount_of_rolls`, `grand_total`) VALUES ('".$date."','".$company_name."','".$material_type."','".$no_of_bags."','".$rate_of_bags."','".$total_amount_of_bags."','".$no_of_rolls."','".$rate_of_rolls."','".$total_amount_of_rolls."','".$grand_total."')";
if (mysqli_query($conn,$sql))
{
	echo "your details are saved.....`:)";
}
else
{
	echo "error in inserting ".mysqli_error($conn);
}	
mysqli_close($conn);

  ?>
  

  </body>
</html>