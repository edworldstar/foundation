<?php
if(isset($_POST['ContactUs'])){
foreach($_POST  as $key => $value) {
					   $$key = addslashes($value);
	}
	foreach($_REQUEST  as $key => $value) {
					   $$key = addslashes($value);
	}
	
$to = 'd@worldstarhiphop.com';
//$to = 'ajmalbalakot@gmail.com';
	 	 	$from = $email;
			$subjects = 'Contact Us: '.$subject;
	 		$message = "Name : $username <br/>
			Email : $email <br/>
			Subject : $subject <br/>
			Message : $message <br/>";
	
	 
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$from>" . "\r\n";
	$okay =  mail($to,$subjects,$message,$headers);
	if($okay){ 
	echo '<script type="text/javascript">window.location.href = "thankyou.html";</script>';
	exit;
	}
	
	}
	 
	 ///////////////////////////////////////Volunteer Now///////////////////////////////////////////////////////////
	 
	if(isset($_POST['VounteerNow'])){
foreach($_POST  as $key => $value) {
					   $$key = addslashes($value);
	}
	foreach($_REQUEST  as $key => $value) {
					   $$key = addslashes($value);
	}
	
$to = 'd@worldstarhiphop.com';
//$to = 'ajmalbalakot@gmail.com';
	 	 	$from = $email;
			$subject = 'Volunteer Now: '.$username;
	 		$message = "Have you ever volunteered before : $before <br/>
			Name : $username <br/>
			Mobile : $mobile <br/>
			Email : $email <br/>
			Country/State/City : $country <br/>
			Address : $address <br/>
			Area/Field  : $field <br/>
			Write detail about you/Cover letter : ".addslashes($coverletter)." <br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$from>" . "\r\n";
	$ok =  mail($to,$subject,$message,$headers);
	if($ok){
	echo '<script type="text/javascript">window.location.href = "thankyou.html";</script>';
	exit();
	}
}
?>