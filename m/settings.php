<?php
require "init.php";
$email = $_POST["email"];
$newpassword = $_POST["newpassword"];

$sql = "UPDATE users SET userpassword='".$newpassword."' where useremail like '".$email."';";

mysqli_query($connect,$sql);

$sql = "SELECT username FROM users WHERE useremail like '".$email."';";

$result = mysqli_query($connect,$sql);

$response = array();

if(mysqli_num_rows($result)>0)
{
	$row = mysqli_fetch_array($result);
	$code = "change_success";
	array_push($response,array("code"=>$code,"username"=>$row[0]));
	
	echo json_encode($response);
}

else 
{
	echo '("message":"Şifreniz Değiştirilemedi.")';
}

mysqli_close($connect);


?>