<?php
require "init.php";

$id =$_POST["id"];

$sql = "SELECT  isbnno,bookname,publishdate,publishername,authorname,borrowdate,returndate,book_img FROM borrow AS cm JOIN books AS bk ON cm.bookid=bk.id
	JOIN users as us	ON cm.userid=us.id WHERE cm.userid='".$id."' AND onay='1'";
	
$result = mysqli_query($connect,$sql);

$response = array();

if(mysqli_num_rows($result)>0)
{

while($row = mysqli_fetch_array($result))
	{	
		$code = "rez_success";
		array_push($response,array("code"=>$code,"isbnno"=>$row[0],"bookname"=>$row[1],"publishdate"=>$row[2],"publishername"=>$row[3],"authorname"=>$row[4],"borrowdate"=>$row[5],"returndate"=>$row[6],"book_img"=>$row[7]));		
}
		
echo json_encode($response);

}
else 
{
		$code = "rez_failed";
		array_push($response,array("code"=>$code));
		echo json_encode($response);
}

mysqli_close($connect);

?>