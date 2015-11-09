<!DOCTYPE html>
<html>
<?php

session_start();
$db = new mysqli('localhost', 'fourplat_admin', 'l%9,wPfmG;k}', 'fourplat_wedding');
$db->set_charset('utf8');
//for use with javascript unescape function
function encode($input) {
	$temp = '';
	$length = strlen($input);
	for($i = 0; $i < $length; $i++) {
		$temp .= '%' . bin2hex($input[$i]);
	}
	return $temp;
}
$headers = "SHOW columns FROM rsvps";
$header_results = $db->query($headers);

$query = "SELECT * FROM rsvps;";
$results = $db->query($query);
?>

<table>
    <?php while ($h = $header_results->fetch_array(MYSQLI_ASSOC)) { ?>
      <th><?php echo $h['Field']; ?></th>
    <?php } ?>
  </tr>
<?php while ($row = $results->fetch_array(MYSQLI_ASSOC)) { ?>
  <tr>
    <?php foreach ($row as $col => $val) { ?>
      <td><?php echo $val; ?></td>
    <?php } ?>
  </tr>
<?php } ?>
</html>
