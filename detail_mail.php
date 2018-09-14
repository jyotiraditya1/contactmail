<?php
if(isset($_POST['submit'])){
 $a = $_POST["name"];
$de = $_POST["designation"];
$b = $_POST["company"];
$c = $_POST["address"];
$d = $_POST["city"];
$e = $_POST["state"];
$f = $_POST["zip"];
$g = $_POST["country"];
$h = $_POST["phone"];
$i = $_POST["email"];
$j = $_POST["details"];

$to = "shandilyajyotiraditya@gmail.com";
$subject = "Contact Us Form Testing";

$message = "<b>Name:&nbsp;</b>".$a."</br>
<b>Designation:&nbsp;</b>".$de."</br>
<b>Company:&nbsp;</b>".$b."</br>
<b>Adress:&nbsp;</b>".$c."</br>
<b>State:&nbsp;</b>".$e."</br>
<b>Zip:&nbsp;</b>".$f."</br>
<b>Country:&nbsp;</b>".$g."</br>
<b>Phone:&nbsp;</b>".$h."</br>
<b>Email:&nbsp;</b>".$i."</br>
<b>Details:&nbsp;</b>".$j."</br>";

echo $message;


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <kusum@example.com>' . "\r\n";

if (mail($to,$subject,$message,$headers)){

	echo "Sent Successfully....";
}
else

{
	echo "not sent";
}

}

?>