<?php
include("conn.php");
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="try.css">
</head>
<body>
<header><center>
<!--h3>INVOICE</h3>
<img class="hi" src="shiva.jpg" width="200px" height="150px" align="left"-->
<h1 class="clr"><b>ERODE TRUST HOSPITAL</b><h1>
<div class="prd"><p>MultiSpeciality Hospital</p></div>
<div class="adr"><p>Thindal , Erode</p></div></center>
</header>
<div class="login-page">
  <div class="form">
    
	
    <form class="login-form" method="post" action="Login.php">
	LOGIN<br><br>
      <input type="text" placeholder="username" name="name"/>
      <input type="password" placeholder="password" name="pass"/>
      <input class="submit" type="submit" value="Login" name="Submit" />
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>

<?php
session_start();
if(isset($_POST["Submit"]))
{
		$un=$_POST["name"];
		$pwd=$_POST["pass"];
		$sql="SELECT * FROM Admin WHERE Mobile='".$un."' and Password='".$pwd."'";

$result=mysqli_query($conn,$sql);
if ($result)
{
	echo "<br>";
}
else
{
	echo "Error in displaying ".mysqli_error($conn);
}	
if(mysqli_num_rows($result)==1)
{
	$row=mysqli_fetch_array($result);
	$_SESSION["user"]=$row["2"];
	header('location:report.php');
	exit;
}

else
{
	echo "<script type='text/javascript'>alert('Username does not exist 2 attempts left');</script>";
}		
		mysqli_close($conn);
}
?>

</body>
</html>