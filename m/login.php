<?php
require "init.php";
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT id,useremail,userpassword,username,usersurname FROM users where useremail like '".$email."' and userpassword like '".$password."';";

$result = mysqli_query($connect,$sql);

$response = array();

if(mysqli_num_rows($result)>0)
{
	$row = mysqli_fetch_row($result);
	$id = $row[0];
	$useremail = $row[1];
	$userpassword = $row [2];
	$username = $row[3];
	$usersurname = $row[4];
	$code = "login_success";
	array_push($response,array("code"=>$code,"id"=>$id,"useremail"=>$useremail,"userpassword"=>$userpassword,"username"=>$username,"usersurname"=>$usersurname));
	echo json_encode($response);
	
}

else 
{
		$code = "login_failed";
		$message = "user not found.please register.";
		array_push($response,array("code"=>$code,"message"=>$message));
		echo json_encode($response);
}

mysqli_close($connect);


?>