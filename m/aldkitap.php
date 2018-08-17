<?php
require "init.php";

$id =$_POST["id"];

$sql = "SELECT  isbnno,bookname,publishdate,publishername,authorname,borrowdate,borrowrdate,borc,book_img FROM borrowtamam AS cm JOIN books AS bk ON cm.bookid=bk.id
	JOIN users as us	ON cm.userid=us.id WHERE cm.userid='".$id."' GROUP BY cm.bookid";
	
$result = mysqli_query($connect,$sql);

$response = array();

if(mysqli_num_rows($result)>0)
{

while($row = mysqli_fetch_array($result))
	{	
		$code = "login_success";
		array_push($response,array("code"=>$code,"isbnno"=>$row[0],"bookname"=>$row[1],"publishdate"=>$row[2],"publishername"=>$row[3],"authorname"=>$row[4],"borrowdate"=>$row[5],"borrowrdate"=>$row[6],"borc"=>$row[7],"book_img"=>$row[8]));		
	}
		
echo json_encode($response);

}
else 
{
		$code = "gec_failed";
		$message = "Aldiginiz kitap bulunmamaktadir.";
		array_push($response,array("code"=>$code,"message"=>$message));
		echo json_encode($response);
}

mysqli_close($connect);

?>