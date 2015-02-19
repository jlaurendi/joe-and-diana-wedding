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

$return = array('type' => 'error', 'session' => $_SESSION);

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment'])) {
  $return['message'] = "Please fill out all of the fields";
  die(json_encode($return));
}

$db = new mysqli('localhost', 'fourplat_admin', 'l%9,wPfmG;k}', 'fourplat_wedding');
if ($db->connect_errno == 0) {
  $name = $db->real_escape_string($_POST['name']);
  $email = $db->real_escape_string($_POST['email']);
  $comment = $db->real_escape_string($_POST['comment']);

  $insert_query = "INSERT INTO guestbook (name, email, comment) VALUES ($name, $email, $comment);"
  $db->query($insert_query);
}
