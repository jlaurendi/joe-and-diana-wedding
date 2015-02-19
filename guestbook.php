<?php

session_start();
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

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment'])) {
  $return['message'] = "Please fill out all of the fields";
  die(json_encode($return));
}

$db = new mysqli('localhost', 'fourplat_admin', 'l%9,wPfmG;k}', 'fourplat_wedding');
if ($db->connect_errno == 0) {
  $name = $db->real_escape_string($_POST['name']);
  $email = $db->real_escape_string($_POST['email']);
  $comment = $db->real_escape_string($_POST['comment']);

  $insert_query = "INSERT INTO guestbook (name, email, comment) VALUES ('$name', '$email', '$comment');";
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
