<?php

require "init.php";

$sql = "select username,bookid,tarih,comm from comment";

$result = mysqli_query($connect,$sql);
$response = array();
   
   while($row = mysqli_fetch_array($result))
	{	
		array_push($response,array("username"=>$row[0],"bookid"=>$row[1],"tarih"=>$row[2],"comm"=>$row[3]));

		
	}
		
echo json_encode(array("server_response"=>$response));


mysqli_close($connect);
?>