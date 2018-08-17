<?php
require "init.php";

$userid=$_POST["userid"];
$bookid=$_POST["bookid"];
$borrowdate=date('Y-m-d');
$returndate =date("Y-m-d",mktime(0, 0, 0, date("m"), date("d")+3,   date("Y")));


$sql="SELECT amount FROM books WHERE id=$bookid";


$result = mysqli_query($connect,$sql);

$row = mysqli_fetch_array($result);


$amount = $row[0] - 1 ;

$sql="UPDATE books SET amount=$amount WHERE id=$bookid";

$result = mysqli_query($connect,$sql);
$response = array();
	$code = "rez_success";
	array_push($response,array("code"=>$code,"userid"=>$userid,"bookid"=>$bookid,"borrowdate"=>$borrowdate,"returndate"=>$returndate));
	$sql = "INSERT INTO borrow(userid,bookid,borrowdate,returndate) VALUES ('".$userid."','".$bookid."','".$borrowdate."','".$returndate."');";

	mysqli_query($connect,$sql);



echo json_encode($response);



mysqli_close($connect);

?>