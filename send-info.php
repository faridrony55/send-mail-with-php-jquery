<?php
   
 
$name=$_POST['name1'];
$email=$_POST['email1'];

$email=filter_var($email,FILTER_SANITIZE_EMAIL);

if(filter_var($email,FILTER_VALIDATE_EMAIL)){

	if ($name == "" ) {
		echo "Please Enter your First Name.";
	} else {
		$headers ='MIME-Version: 1.0' . "\r\n";
		$headers .='Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From:' . $email. "\r\n";
		$headers .= 'Cc:' . $email. "\r\n";

		$template="<div style='width:400px;border:1px solid #f33;padding:30px'> " . "Name : " . $name . "</div> <br>";

		$mailto="faridrony55@gmail.com";

		mail($mailto,  $name , $template , $headers);
 
		echo "Thank you for your email, we will contact you shortly.";
	}

}
else {
	echo "Invalid email *";
}

 