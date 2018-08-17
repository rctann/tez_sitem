<?php

require "init.php";

$sql = "select id,isbnno,bookname,publishdate,amount,publishername,authorname,categoryid,categoryname,pagenumber,book_img from books where categoryid=3";
$result = mysqli_query($connect,$sql);

$response = array();
   
   while($row = mysqli_fetch_array($result))
	{	
		array_push($response,array("id"=>$row[0],"isbnno"=>$row[1],"bookname"=>$row[2],"publishdate"=>$row[3],"amount"=>$row[4],"publishername"=>$row[5],"authorname"=>$row[6],"categoryid"=>$row[7],"categoryname"=>$row[8],"pagenumber"=>$row[9],"book_img"=>$row[10]));

		
	}
		
echo json_encode(array("server_response"=>$response));


mysqli_close($connect);
?>