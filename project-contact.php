
<?php 
//   if(isset($_POST['submit'])){
	  
	$fName = $_POST["first_name"];
	$lName = $_POST["last_name"];
	$from = $_POST["email_id"];
	$phone = $_POST["phone_number"];
	$designation = $_POST["user_designation"];
	$organization = $_POST["user_organization"];
	$comment = $_POST["user_question"];
	
	// Email Receiver Address
	$receiver="lawrence@aicumen.com";
	$subject="TB Contact form details";

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body>
	<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tr>
	<td colspan='2' align='center' valign='top'><img style=' margin-top: 15px; ' src='http://www.yourdomain.com/images/logo-email.png' ></td>
	</tr>
	<tr>
	<td width='50%' align='right'>&nbsp;</td>
	<td align='left'>&nbsp;</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Name:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$fName + " " + $lName."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Email:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$from."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Phone:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$phone."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Designation:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$designation."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Organization:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".$organization."</td>
	</tr>
	<tr>
	<td align='right' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 5px 7px 0;'>Message:</td>
	<td align='left' valign='top' style='border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; font-family:Raleway; font-size:13px; color:#000; padding:7px 0 7px 5px;'>".nl2br($comment)."</td>
	</tr>
	</table>
	</body>
	</html>
	";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";  
   if(mail($receiver,$subject,$message,$headers))  
   {
	   //Success Message
      echo "The message has been sent!";
   }
   else
   {	
   	 //Fail Message
      echo "The message could not been sent!";
   }

// }
?>
