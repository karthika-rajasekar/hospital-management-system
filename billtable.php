<html>
<body> 

 <?php 
include("conn.php");

$in_no=$_POST["in_no"];
$date=$_POST["date"];
$address=$_POST["address"];
$place=$_POST["place"];
$gsdno=$_POST["gsdno"];
$agent=$_POST["agent"];
$description=$_POST["description"];
$meter=$_POST["meter"];
$rate=$_POST["rate"];
$amt=$_POST["amt"];
$cgst=$_POST["cgst"];
$sgst=$_POST["sgst"];
$igst=$_POST["igst"];
$amount=$_POST["amount"];

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
$sql="INSERT INTO `billing`(`in_no`, `date`, `address`, `place`, `gsdno`, `agent`, `description`, `meter`, `rate`, `amt`, `cgst`, `sgst`, `igst`, `amount`) VALUES ('".$in_no."','".$date."','".$address."','".$place."','".$gsdno."','".$agent."','".$description."','".$meter."','".$rate."','".$amt."','".$cgst."','".$sgst."','".$igst."','".$amount."')";
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