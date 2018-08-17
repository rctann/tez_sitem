<?php
require "init.php";
$sql = "SELECT aboutus,smtpmail FROM settings where id=0";

$result = mysqli_query($connect,$sql);

$response = array();

if(mysqli_num_rows($result))
{
	$row = mysqli_fetch_row($result);
	$aboutus = $row[0];	
	$smtpmail = $row [1];
	array_push($response,array("aboutus"=>$aboutus,"smtpmail"=>$smtpmail));
	echo json_encode($response);
	
}

mysqli_close($connect);
?>



