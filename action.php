 <?php
 session_start();
 if (isset($_POST['submit']))
 {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
$to = 'info@vikaspolyplast.com';
$message = "
<html>
<body>
<p style='color:#DC7318;font-size:20px;text-transform:capitalize;'>From your website $name wants to contact you.</p>
<table>
<tr>
<td style='color:#DC7318;font-size:16px;'>Name :</td>
<td color:#333333;font-size:16px;text-transform:capitalize;> $name</td>
</tr>
<tr>
<td style='color:#DC7318;font-size:16px;width:135px;'> Email : </td>
<td color:#333333;font-size:16px;text-transform:capitalize;> $email</td>
</tr>

<tr>
<td style='color:#DC7318;font-size:16px;width:135px;'> Message : </td>
<td color:#333333;font-size:16px;text-transform:capitalize;> $message</td>
</tr>

<tr>
<td> <br/><br/><br/>Thank you,<br/><br/> Vikas Polyplast</td>
<td></td>
</tr>
</table>
</body>
</html>
";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$ee='';
$headers .= 'From: vikaspolyplast'."\r\n";
$subject='Contact Mail';
if(mail($to,$subject,$message,$headers)){
	$_SESSION['message']="Your request submitted successfully. We will contact you as soon as possible.";

}
else{
		$_SESSION['message1']="Request not submitted. Please try again.";
}
echo "<script>";
	echo 'window.location.href="contact.php";';
echo "</script>";
  } 
  
  ?>
 