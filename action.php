<?php

session_start();
$db = new mysqli('localhost', 'fourplat_admin', 'l%9,wPfmG;k}', 'fourplat_wedding');

//for use with javascript unescape function
function encode($input) {
	$temp = '';
	$length = strlen($input);
	for($i = 0; $i < $length; $i++) {
		$temp .= '%' . bin2hex($input[$i]);
	}
	return $temp;
}


//if posting only
if(isset($_POST['submit'])) {
	$return = array('type' => 'error', 'session' => $_SESSION);
	$answer = isset($_POST['autovalue']) ? trim($_POST['autovalue']) : false;

	// if(!isset($_SESSION['_form_validate']) || !$answer || $_SESSION['_form_validate'] != $answer) {
	// 	$return['message'] = 'Error validating security question.';
	// } else {
		$to = 'darkplumwu@gmail.com, jlaurendi@gmail.com';

		$name = isset($_POST['name']) ? trim($_POST['name']) : '';
		$email = isset($_POST['email']) ? trim($_POST['email']) : '';
		$persons = isset($_POST['persons']) ? trim($_POST['persons']) : '';
		// $message = isset($_POST['message']) ? trim($_POST['message']) : '';
		$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
		$which_wedding = isset($_POST['which-wedding']) ? trim($_POST['which-wedding']) : '';
		$subject = isset($_POST['subject']) ? trim($_POST['subject']) : "Wedding RSVP! ($which_wedding)";
		$address = isset($_POST['address']) ? trim($_POST['address']) : '';
        	$dietary = isset($_POST['dietary']) ? trim($_POST['dietary']) : '';

		if($name && $email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= "From: {$name} <{$email}>\r\n";

			$message .= 'New Signup for your Wedding<br />';
			$message .= ' <br /> Name: ' . $name;
			$message .= ' <br /> Email: ' . $email;
			$message .= ' <br /> Address: ' . $address;
            $message .= ' <br /> Dietary restrictions: ' . $dietary;
			if($persons) {
				$message .= ' <br /> Number of Persons: ' . $persons;
			}
			$message .= ' <br /> Wedding: '. $which_wedding;

			@$send = mail($to, $subject, $message, $headers);

			if($send) {
				$return['type'] = 'success';
				$return['message'] = 'Email successfully sent.';
			} else {
				$return['message'] = 'Error sending email.';
			}
		} else {
			$return['message'] = 'Error validating email.';
		}

		$attend_usa = 0;
		$attend_taiwan = 0;
		if ($which_wedding == 'USA') {
			$attend_usa = 1;
		} elseif ($which_wedding == 'Taiwan') {
			$attend_taiwan = 1;
		} else {
			$attend_usa = 1;
			$attend_taiwan = 1;
		}

		$name = $db->real_escape_string($name);
		$email = $db->real_escape_string($email);
		$persons = $db->real_escape_string($persons);
		$phone = $db->real_escape_string($phone);
		$address = $db->real_escape_string($address);
		$dietary = $db->real_escape_string($dietary);

	  $insert_query = "INSERT INTO rsvps (name, email, guests, phone, attend_taiwan, attend_usa, address, dietary) VALUES ('$name', '$email', $persons, '$phone', $attend_taiwan, $attend_usa, '$address', '$dietary');";
	  if (!$result = $db->query($insert_query)) {
	    $return['message'] = "Error signing up -- check that you filled out the entire form. If you keep getting this error, contact Joe and Diana.";
	  } else {
	    $return['message'] = "Success!";
	  }

	// }

	die(json_encode($return));
}



if(isset($_POST['get_auto_value'])) {
	$num1 = rand(1, 10);
	$num2 = rand(1, 10);

	$_SESSION['_form_validate'] = $num1 + $num2;

	$return = array(
		'data' => encode("What is {$num1} + {$num2}"),
		'session' => $_SESSION
	);

	die(json_encode($return));
}

?>
