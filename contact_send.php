

<?php



$name = $_POST['name'];

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$msg = "<html>

<head>



</head>

<body>

<p>QUICK CONTACT</p>

<table>



<tr>

<td>Name </td>

<td>:".$name."</td>

</tr>



<tr>

<td> Email </td>

<td> :  ".$email."</td>

</tr>

<tr>

<td> Email </td>

<td> :  ".$subject."</td>

</tr>

<tr>

<td>Message </td>

<td>:  ".$message."</td>

</tr>





</table>

</body>

</html>";



/*echo $msg;*/



$to = "aparnabhaasi@gmail.com";

$subject = "Quick Contact";

$headers = "MIM\	E-Version: 1.1" . "\r\n";

$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";



mail($to,$subject,$msg,$headers);

{

	header('location:contact.php?mail_sent=success');

 } 





	?>



