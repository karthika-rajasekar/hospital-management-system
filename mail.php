<html>
<head>
    <style>
	
 .content{
	 width:100%;
	 height:20px;
	
	 float:left;
 }
img{

	margin-left:0;
	width:300px;
	height:200px;
	position:relative;
}
a
{
	text-decoration:none;
}
 
	</style>
</head>
<body>






<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
@$name=$_POST["mobile"];
@$email1=$_POST["nmobile"];
@$purdate=$_POST["mmobile"];
@$messent=$_POST["bmobile"];

#$conn=mysqli_connect($servername,$username,$password,$dbname);
#if(!$conn)
#{
	#die("connection failed".mysqli_connect_error());
#}
#$sql="INSERT INTO pur(name,email,purdate,messent)VALUES('".$name."','".$email1."','".$purdate."','".$messent."')";
#if (mysqli_query($conn,$sql))
{
	

  require 'phpmailer/PHPMailerAutoload.php';
                    $conn=mysqli_connect($servername,$username,$password,$dbname);
                    $email = "ilakkiyamouni1998@gmail.com";                    
                    $password = "Ravijeya24";
                   
 #replace with your mailid and password in this id.php file
				 $to_id = "$email1";
				 $message="<html>
				 <h3 style=color:green;>Your quantity of medicine is less.Please check it out.</h3></html>";
                    $subject = "Medicine stock regarding";

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('from@example.com', 'Otp mail');

                    $mail->addReplyTo('dontreply@gmail.com', 'auto generated mail');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Message sent!!!");</script>';
}
}
                    
?><br>
</body>
</html>
