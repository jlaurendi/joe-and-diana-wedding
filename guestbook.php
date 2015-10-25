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

$return = array('type' => 'error', 'session' => $_SESSION, 'message' => "Failed to post.");

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment']) || empty($_POST['g-recaptcha-response'])) {
  $return['message'] = "Please fill out all of the fields";
  die(json_encode($return));
}

$captcha_response = $_POST['g-recaptcha-response'];
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
  'secret' => '6LedjgwTAAAAAND-o6ESxk5yw90iASa-_-ONb2VC',
  'response' => $captcha_response,
  'remoteip' => $_SERVER['REMOTE_ADDR']
);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = json_decode(file_get_contents($url, false, $context), true);

if (empty($result) || empty($result['success']) ||!$result['success']) {
  $return['message'] = "Captcha failed";
  die(json_encode($return));
}


if ($db->connect_errno == 0) {
  $name = $db->real_escape_string($_POST['name']);
  $email = $db->real_escape_string($_POST['email']);
  $comment = $db->real_escape_string($_POST['comment']);
  $wedding = $db->real_escape_string($_POST['wedding']);

  $insert_query = "INSERT INTO guestbook (name, email, comment, wedding) VALUES ('$name', '$email', '$comment', '$wedding');";
  if (!$result = $db->query($insert_query)) {
    $return['message'] = $db->error;
  } else {
    $return['message'] = "Success!";

                $to = 'jlaurendi@gmail.com, darkplumwu@gmail.com';

		$subject = "New wedding guestbook post";
                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                        $headers .= "From: {$name} <{$email}>\r\n";

                        $message .= 'New post<br />';
                        $message .= ' <br /> Name: ' . $name;
                        $message .= ' <br /> Email: ' . $email;
			$message .= ' <br /> Message: ' . $comment;

                        @$send = mail($to, $subject, $message, $headers);

  }
}

die(json_encode($return));
