<?php
require "init.php";
$TC = $_POST["TC"];
$userpassword = $_POST["userpassword"];
$username = $_POST["username"];
$usersurname = $_POST["usersurname"];
$useremail = $_POST["useremail"];
/*$useradress = $_POST["useradress"];
tablo düzeltilmesi lazım */
$usertel = $_POST["usertel"];

$sql = "SELECT * FROM users where TC like '".$TC."';";

$result = mysqli_query($connect,$sql);
$response = array();
if(mysqli_num_rows($result)>0)
{
	$code = "reg_failed";
	$message = "User already exist..";
	array_push($response,array("code"=>$code,"message"=>$message));
	echo json_encode($response);
	
}

else 
{		
		$sql = "INSERT INTO users(TC,userpassword,username,usersurname,useremail,usertel,attribute) VALUES('".$TC."','".$userpassword."','".$username."','".$usersurname."','".$useremail."','".$usertel."','Üye');";
		$result = mysqli_query($connect,$sql);
		$code = "reg_success";
		$message = "thank you for register with us. Now you can login..";
		array_push($response,array("code"=>$code,"message"=>$message));
		echo json_encode($response);
}


mysqli_close($connect);


?>